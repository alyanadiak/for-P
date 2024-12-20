<section id="#sidebar">
    <nav class="sidebar text-uppercase shadow box-area" id="sidebar">
        {{-- header --}}
        <div class="d-flex justify-content-between align-items-center" id="brand">
            <span class="ff-heading">KASIREK.</span>
            <div href="" class="brand">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    <div class="text-lowercase">
        @php
            $usn =  Auth::user() -> name;
        @endphp
        <p class="d-flex justify-content-end">@ {{ $usn }}
            <span class="d-flex justify-content-end"> -admin</span>
        </p>
    </div>

    {{-- menu bar --}}
    <div class="side-menu">
        <li class="" id="icon-brand">
            <a href="/dashboard">
                <i class="fa fa-house" id="icon-brand"></i>
                <span class="text"> dashboard</span>
            </a>
        </li>
    </div>
    <div class="side-menu" id="icon-brand">
        <li>
            <a href="/barang">
                <i class="fa-solid fa-dolly" id="icon-brand"></i>
                <span class="text">barang</span>
            </a>
        </li>
    </div>
    <div class="side-menu" id="icon-brand">
        <li>
            <a href="/petugas">
                <i class="fa fa-user-tag" id="icon-brand"></i>
                <span class="text">petugas</span>
            </a>
        </li>
    </div>
    <div class="side-menu" id="icon-brand">
        <li>
            <a href="/member">
                <i class="fa-regular fa-address-card"></i>
                <span class="text">member</span>
            </a>
        </li>
    </div>
    <div class="side-menu" id="icon-brand">
        <li>
            <a href="/dashboard/laporan">
                <i class="fa-regular fa-folder-open" id="icon-brand"></i>
                <span class="text">laporan</span>
            </a>
        </li>
    </div>
    <footer class="footer-bar mt-auto row row-cols-lg-1 pt-5">
        <div class="col d-flex justify-content-center">
            <li class="pt-1" id="icon-brando">
                <a href="/dashboard/profile">
                    <i class="fa-solid fa-gear icon-brando" id="icon-brando"></i>
                    ⚙ Profile
                </a>
            </li>
        </div>
        <div class="col d-flex justify-content-center">
            <li class="pt-2" id="icon-brando">
                <a href="/session/logout">
                <i class="fa-solid fa-arrow-left icon-brando"></i>
                    < logout</a>
            </li>
        </div>
    </footer>
</nav>
</section>
<style>
    li{
        list-style: none;
        text-decoration: none;
    }
</style>
<script>
    const toggler = document.querySelector(".brand");
    toggler.addEventListener("click", function(){
        document.querySelector("#sidebar").classList.toggle("collapsed");
        // remove active
        $(this).siblings().removeClass("active");
        // add active
        $(this).toggleClass("active");
    })
</script>