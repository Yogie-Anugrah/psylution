
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Our Services</h2>
        <div class="row">
            @php
                $services = [
                    ['image' => 'Services-1.jpg', 'title' => 'Counseling Services', 'desc' => 'Professional counseling for mental well-being.'],
                    ['image' => 'Services-2.jpg', 'title' => 'Teen Therapy', 'desc' => 'Supporting teenagers through challenges.'],
                    ['image' => 'Services-3.jpg', 'title' => 'Individual Therapy', 'desc' => 'One-on-one sessions with specialists.'],
                    ['image' => 'Services-4.jpg', 'title' => 'Group Therapy', 'desc' => 'Healing together in a safe space.'],
                    ['image' => 'Services-5.jpg', 'title' => 'Couples Counseling', 'desc' => 'Helping couples strengthen relationships.'],
                    ['image' => 'Services-6.jpg', 'title' => 'Family Therapy', 'desc' => 'Guidance for healthy family relationships.'],
                ];
            @endphp
            
            @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card border-dark shadow-sm" style="border-radius: 15px;">
                        <div class="card-body p-0 text-center" style="height: 200px; background-color: #ffffff; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                            <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" 
                                style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        </div>
                        <div class="card-footer text-center p-3" style="background-color: #dbe7fd; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; border-top: 1px solid #000;">
                            <h5 class="fw-bold text-dark">{{ $service['title'] }}</h5>
                            <p class="mb-1 text-dark">{{ $service['desc'] }}</p>
                            <a href="#" class="fw-bold" style="color: #4c5fd5; text-decoration: none;">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
