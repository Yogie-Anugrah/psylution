<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\URL;
use App\Jobs\SendWhatsappJob;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Redirect path after successful registration/login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the registration page.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle manual registration request.
     */
    public function register(Request $request)
    {
        // 1) Validate
        $this->validator($request->all())->validate();

        // 2) Create & fire Registered event
        event(new Registered($user = $this->create($request->all())));

        // 3) Send email verification
        // $user->sendEmailVerificationNotification();

        // 4) (Optional) dispatch WhatsApp verification via Starsender here
        // Generate signed URL verifikasi (1 jam berlaku)
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addHour(),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        // Kirim link aktivasi via WhatsApp
        dispatch(new SendWhatsappJob(
            $user->whatsapp,
            "Halo {$user->name},\n\nTerima kasih sudah mendaftar! Silakan aktifkan akun kamu dengan klik link berikut:\n{$verificationUrl}"
        ));

        // 5) Redirect to please-verify page
        return redirect()->route('verification.notice')
                         ->with('status', 'Please verify your email/WhatsApp to activate your account.');
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email', 'max:255', 'unique:users'],
            'residence'  => ['required', 'string', 'max:255'],
            'whatsapp'   => ['required', 'string', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
            'consent'    => ['accepted'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name'              => $data['name'],
            'email'             => $data['email'],
            'residence'         => $data['residence'],
            'whatsapp'          => $data['whatsapp'],
            'password'          => Hash::make($data['password']),
            'consent_accepted'  => true,
        ]);
    }

    /**
     * Redirect to Google OAuth page.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle callback from Google.
     */
    public function handleGoogleCallback()
    {
        $socialUser = Socialite::driver('google')->stateless()->user();

        // If user exists, log them in
        if ($user = User::where('email', $socialUser->getEmail())->first()) {
            Auth::login($user);
            return redirect($this->redirectPath());
        }

        // Otherwise, pre-fill and show the same register form
        return view('auth.register', [
            'name'      => $socialUser->getName(),
            'email'     => $socialUser->getEmail(),
        ]);
    }
}
