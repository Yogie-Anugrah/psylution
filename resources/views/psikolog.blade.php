@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card p-3">
                <h5 class="fw-bold">Categories</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark">Lorem Ipsum</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Lorem Ipsum</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Lorem Ipsum</a></li>
                </ul>
            </div>

            <div class="card p-3 mt-3">
                <h5 class="fw-bold">Sort By</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark">Default</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Lowest to Highest Price</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Highest to Lowest Price</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <!-- Filter Bar -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Custom Toggle Offline/Online -->
                <div class="d-flex justify-content-center my-3">
                    <div class="toggle-container" style="width: 180px; height: 40px; position: relative; background-color: #4663F2; border-radius: 10px; display: flex; align-items: center; padding: 3px;">
                        <div id="toggleSlider-" class="toggle-slider" style="
                            position: absolute; left: 3px; width: 86px; height: 34px; background-color: white; border-radius: 8px; transition: all 0.3s ease-in-out;">
                        </div>
                        <div class="toggle-option text-center flex-fill" onclick="" style="z-index: 1; font-weight: bold; cursor: pointer; color: #4663F2;">
                            Offline
                        </div>
                        <div class="toggle-option text-center flex-fill" onclick="" style="z-index: 1; font-weight: bold; cursor: pointer; color: white;">
                            Online
                        </div>
                    </div>
                </div>
                <div>
                    <input type="text" class="form-control d-inline-block w-auto" placeholder="Nama Psikolog">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>

            <!-- Filter Options -->
            <div class="d-flex gap-2 mb-3">
                <button class="btn btn-primary">Semua Hari</button>
                <button class="btn btn-outline-primary">Semua Waktu</button>
            </div>

            <!-- List of Psychologists -->
            <div class="row">
                @foreach(range(1,3) as $i)
                <div class="col-md-12">
                    <div class="card p-3 mb-3 border-primary" style="border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-light" style="width: 80px; height: 80px;"></div>
                            <div class="ms-3 flex-grow-1">
                                <span class="badge bg-light text-dark">Kategori</span>
                                <h5 class="fw-bold m-0">Lorem Ipsum</h5>
                                <small>Jumlah Sesi | Ulasan | Pengalaman | Jadwal Tersedia</small>
                            </div>
                            {{-- <button class="btn btn-primary">Booking Sesi</button> --}}
                            <a href="{{ url('/booking/' . $i . '/form') }}" class="btn btn-primary">Booking Sesi</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    function setMode(id, mode) {
        let slider = document.getElementById(`toggleSlider-${id}`);
        slider.style.left = mode === "offline" ? "3px" : "91px";
        updatePackage(id, mode);
    }
</script>
@endsection
