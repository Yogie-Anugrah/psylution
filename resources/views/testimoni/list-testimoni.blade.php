<div class="container my-5 text-center">
    <h2 class="fw-bold text-dark mb-4">Testimoni</h2>

    <div class="row">
        @foreach ($testimonis as $testimoni)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card p-3 border border-dark rounded-3 h-100" style="border-color: #4663F2;">
                    <p class="text-dark">
                        {{ $testimoni['message'] }}
                    </p>

                    <div class="d-flex align-items-center p-3 rounded-3" style="background-color: #CADFFE;">
                        <!-- Foto Placeholder -->
                        <div class="rounded-circle me-3" style="width: 50px; height: 50px; background-color: #F9FBFC;"></div>
                        
                        <div>
                            <h5 class="fw-bold mb-0">{{ $testimoni['name'] }}</h5>
                            <p class="mb-0 text-muted">{{ $testimoni['role'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
