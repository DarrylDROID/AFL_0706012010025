<nav class="navbar navbar-expand-md bg-black user-select-none">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('logo.png') }}" width="600px" height="80px" alt="Logo" class="d-inline-block">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_welcome ?? '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_car ?? '' }}" href="/car">Car</a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_brand ?? '' }}" href="/brand">Brand</a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_contact ?? ''}}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>