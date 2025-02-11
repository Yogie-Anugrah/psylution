<div class="container my-5">
    <div class="card shadow p-4 border rounded-3" style="background-color: #CADFFE; border-color: #A0B3E3;">
        <div class="text-center">
            <h2 class="fw-bold text-dark">Psikolog Terbaik Kami</h2>
        </div>

        <div class="mt-4">
            @foreach ($psikologs as $psikolog)
                <div class="card mb-3 p-3" style="background-color: #F8F9FF; border-radius: 12px;">
                    <div class="d-flex align-items-center">
                        <!-- Foto Psikolog (Placeholder) -->
                        <div class="me-3">
                            <div class="rounded-circle" style="width: 80px; height: 80px; background-color: #CADFFE;"></div>
                        </div>

                        <div class="flex-grow-1">
                            <!-- Rating -->
                            <div class="d-inline-block px-3 py-1 text-white fw-bold rounded-pill" style="background-color: #4663F2;">
                                ⭐ {{ $psikolog['rating'] }}
                            </div>

                            <!-- Deskripsi -->
                            <p class="mt-2 text-dark">
                                {{ $psikolog['description'] }}
                            </p>

                            <!-- Tombol Booking -->
                            <button class="btn text-white fw-bold" style="background-color: #4663F2; border-radius: 8px;">
                                Booking Sesi
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
