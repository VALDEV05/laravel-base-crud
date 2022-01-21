<aside>
    <ul class="nav flex-column">
        <div class="logo">
            <div class="logo d-flex justify-content-center">
                <a href="{{ route('comics')}}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
                </a>
            </div>
        </div>
        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('comics')}}">Guest <i class="ms-2 fas fa-users"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.comics')}}">Admin <i class="ms-2 fas fa-user-shield"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.comics')}}">Comics <i class="ms-2 fa fa-book" aria-hidden="true"></i></a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="#">Movie <i class="ms-2 fa fa-film" aria-hidden="true"></i> </a>
        </li>

        <li class="nav-item d-flex justify-content-center my-2">
            <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="{{route('admin.comics.create')}}">create <i class="ms-2 fa fa-book" aria-hidden="true"></i> </a>
        </li>

    </ul>
</aside>