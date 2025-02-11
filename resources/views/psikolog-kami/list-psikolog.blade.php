<div class="container my-5">
    <div class="text-center">
        <h2 class="fw-bold text-dark">Psikolog Kami</h2>
    </div>

    <div class="mt-4">
        @foreach ($psikologsPaginated as $psikolog)
            <div class="card mb-3 p-3 border border-dark rounded-3" style="border-color: #4663F2;">
                <div class="d-flex align-items-center">
                    <!-- Foto Psikolog (Placeholder) -->
                    <div class="me-3">
                        <div class="rounded-circle" style="width: 80px; height: 80px; background-color: #CADFFE;"></div>
                    </div>

                    <div class="flex-grow-1">
                        <!-- Kategori -->
                        <div class="d-inline-block px-3 py-1 text-dark fw-bold rounded-pill" style="background-color: #CADFFE;">
                            {{ $psikolog['category'] }}
                        </div>

                        <!-- Nama Psikolog -->
                        <h5 class="fw-bold mt-2">{{ $psikolog['name'] }}</h5>

                        <!-- Informasi -->
                        <div class="d-flex justify-content-between text-muted mt-1">
                            <span>Jumlah Sesi</span>
                            <span>Pengalaman</span>
                            <span>Ulasan</span>
                        </div>
                        <div class="d-flex justify-content-between fw-bold">
                            <span>{{ $psikolog['sessions'] }}</span>
                            <span>{{ $psikolog['experience'] }}</span>
                            <span>{{ $psikolog['reviews'] }}</span>
                        </div>

                        <div class="text-muted mt-2">Jadwal Tersedia: {{ $psikolog['schedule'] }}</div>

                        <!-- Tombol Booking -->
                        <div class="text-end mt-3">
                            <button class="btn text-white fw-bold" style="background-color: #4663F2; border-radius: 8px;">
                                Booking Sesi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item {{ $psikologsPaginated->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $psikologsPaginated->previousPageUrl() }}" aria-label="Previous" style="background-color: #4663F2; color: white; border-radius: 50%;">
                        <span>&#10094;</span>
                    </a>
                </li>

                @for ($i = 1; $i <= $psikologsPaginated->lastPage(); $i++)
                    <li class="page-item {{ $psikologsPaginated->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $psikologsPaginated->url($i) }}" style="background-color: {{ $psikologsPaginated->currentPage() == $i ? '#4663F2' : '#D6DAF5' }}; color: white; border-radius: 50%;">
                            {{ $i }}
                        </a>
                    </li>
                @endfor

                <li class="page-item {{ $psikologsPaginated->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $psikologsPaginated->nextPageUrl() }}" aria-label="Next" style="background-color: #4663F2; color: white; border-radius: 50%;">
                        <span>&#10095;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>