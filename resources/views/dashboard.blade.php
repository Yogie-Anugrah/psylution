@extends('layouts.app')

@section('content')
<div class="container text-center" style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div>
        <h2 style="color: #251D4C;">Welcome, Admin!</h2>
        <p style="color: #5271FF;">You are now logged in.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn" style="background-color: #5271FF; color: white; border-radius: 8px;">Logout</button>
        </form>
    </div>
</div>
@endsection
