<div class="container my-5">
    <div class="card shadow p-4 border border-dark rounded-3" style="background-color: #CADFFE; border-color: #A0B3E3;">
        <div class="text-center">
            <h2 class="fw-bold text-dark">{{ $service['title'] }}</h2>
            <p class="text-muted" style="max-width: 800px; margin: auto;">
                Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.
                Lectus varius ut sit consequat nunc donec nulla aliquam. Imperdiet posuere pulvinar
                viverra quam id nulla hac fusce nulla.
            </p>

            <!-- Custom Toggle Offline/Online -->
            <div class="d-flex justify-content-center my-3">
                <div class="toggle-container" style="width: 180px; height: 40px; position: relative; background-color: #4663F2; border-radius: 10px; display: flex; align-items: center; padding: 3px;">
                    <div id="toggleSlider-{{ $id }}" class="toggle-slider" style="
                        position: absolute; left: 3px; width: 86px; height: 34px; background-color: white; border-radius: 8px; transition: all 0.3s ease-in-out;">
                    </div>
                    <div class="toggle-option text-center flex-fill" onclick="setMode('{{ $id }}', 'offline')" style="z-index: 1; font-weight: bold; cursor: pointer; color: #4663F2;">
                        Offline
                    </div>
                    <div class="toggle-option text-center flex-fill" onclick="setMode('{{ $id }}', 'online')" style="z-index: 1; font-weight: bold; cursor: pointer; color: white;">
                        Online
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Pricing -->
        <div class="position-relative p-4 rounded-3 border border-dark overflow-hidden d-md-none" id="mobile-konseling-price" style="background-color: white; border-color: #A0B3E3;">
            <button class="btn position-absolute top-50 start-0 translate-middle-y" onclick="prevPackage('{{ $id }}')"
                style="border: none; background: transparent; font-size: 24px; color: #4663F2;">
                &#10094;
            </button>

            <div id="mobileContentBox-{{ $id }}" class="text-center" style="transition: transform 0.4s ease-in-out;">
                <h4 class="fw-bold" id="mobilePackageTitle-{{ $id }}">{{ $service['packages'][0]['name'] }}</h4>
                <p class="fs-4 fw-bold package-price" id="mobilePackagePrice-{{ $id }}" style="color: #4663F2; font-weight: bold; font-size: 22px;">
                    {{ $service['packages'][0]['offline'] }} <span style="color: #4663F2; font-weight: normal; font-size: 18px;">/ sesi</span>
                </p>
                <ul class="text-start" style="list-style: none; padding-left: 0;">
                    <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                    <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                    <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                </ul>
            </div>

            <button class="btn position-absolute top-50 end-0 translate-middle-y" onclick="nextPackage('{{ $id }}')"
                style="border: none; background: transparent; font-size: 24px; color: #4663F2;">
                &#10095;
            </button>
        </div>

        <!-- Desktop Pricing -->
        <div class="p-4 rounded-3 border border-dark d-none d-md-flex justify-content-between" id="desktop-konseling-price" style="background-color: white; border-color: #A0B3E3;">
            @foreach ($service['packages'] as $package)
                <div class="flex-grow-1 mx-2 text-center p-3 border border-dark rounded-3">
                    <h4 class="fw-bold">{{ $package['name'] }}</h4>
                    <p class="fs-4 fw-bold" style="color: #4663F2;">
                        {{ $package['offline'] }} <span style="color: #4663F2; font-weight: normal; font-size: 18px;">/ sesi</span>
                    </p>
                    <ul class="text-start" style="list-style: none; padding-left: 0;">
                        <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                        <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                        <li>&#10095; Lorem ipsum dolor sit amet consectetur.</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    let services = @json($services);

    function setMode(id, mode) {
        let slider = document.getElementById(`toggleSlider-${id}`);
        slider.style.left = mode === "offline" ? "3px" : "91px";
        updatePackage(id, mode);
    }

    function prevPackage(id) {
        let packages = services[id].packages;
        let index = (parseInt(localStorage.getItem(`index-${id}`) || 0) - 1 + packages.length) % packages.length;
        localStorage.setItem(`index-${id}`, index);
        updatePackage(id, localStorage.getItem(`mode-${id}`) || 'offline');
    }

    function nextPackage(id) {
        let packages = services[id].packages;
        let index = (parseInt(localStorage.getItem(`index-${id}`) || 0) + 1) % packages.length;
        localStorage.setItem(`index-${id}`, index);
        updatePackage(id, localStorage.getItem(`mode-${id}`) || 'offline');
    }

    function updatePackage(id, mode) {
        let index = parseInt(localStorage.getItem(`index-${id}`) || 0);
        document.getElementById(`mobilePackageTitle-${id}`).innerText = services[id].packages[index].name;
        document.getElementById(`mobilePackagePrice-${id}`).innerHTML = `${services[id].packages[index][mode]} <span style="color: #4663F2; font-weight: normal; font-size: 18px;">/ sesi</span>`;
    }
</script>
