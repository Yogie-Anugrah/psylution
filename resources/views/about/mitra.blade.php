<div class="container my-5 text-center">
    <h2 class="fw-bold text-dark mb-4">Mitra Psylution</h2>

    <div class="row">
        @foreach ($mitras as $mitra)
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="rounded-3 border" style="width: 100%; aspect-ratio: 1; background-color: {{ $mitra['image'] }};">
                </div>
            </div>
        @endforeach
    </div>
</div>