<nav class="navbar navbar-expand-md bg-black user-select-none">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('/image/logo.png') }}" width="600px" height="80px" alt="Logo" class="d-inline-block">
        </a>
 
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav nav-pills mr-auto">
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_welcome ?? '' }}" aria-current="page" href="/">Home<i class="fa-solid fa-house fa-fade ms-1"></i></a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_cars ?? '' }}" href="/car">Car<i class="fa-solid fa-car fa-fade ms-1"></i></a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_brands ?? '' }}" href="/brand">Brand<i class="fa-solid fa-copyright fa-fade ms-1"></i></a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_contacts ?? ''}}" href="/contact">Contact<i class="fa-solid fa-user fa-fade ms-1"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>