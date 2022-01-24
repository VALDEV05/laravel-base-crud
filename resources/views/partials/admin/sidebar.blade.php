<aside>
    <ul class="nav flex-column">
        <div class="logo">
            <div class="logo d-flex justify-content-center">
                <a href="{{ route('guest.comics.index')}}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
                </a>
            </div>
        </div>
        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('guest.comics.index')}}">Guest <i class="ms-2 fas fa-users"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.dashboard')}}">Dashboard <i class="ms-2 fas fa-dragon"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.comics.index')}}">Comics <i class="ms-2 fa fa-book"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.movies.index')}}">Movie <i class="ms-2 fa fa-film"></i> </a>
        </li>

    </ul>
</aside>