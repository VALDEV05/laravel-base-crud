
    <div id="topnav" class="d-flex align-items-center">
        <div class="container">
            <nav class="nav justify-content-end">
                <a class="text-decoration-none text-uppercase fw-bold me-5 d-flex align-items-center" href="{{route('comics')}}">Guest <i class="ms-2 fas fa-users"></i></a>
                <a class="text-decoration-none text-uppercase fw-bold me-5 d-flex align-items-center" href="{{route('admin.comics')}}">Admin <i class="ms-2 fas fa-user-shield"></i></a>
                <a class="text-decoration-none text-uppercase fw-bold me-5 d-flex align-items-center" href="#">DC power visa <i class="far fa-registered"></i></a>
                <a class="text-decoration-none text-uppercase fw-bold d-flex align-items-center" href="#">Additional dc sites <i class="fas fa-sort-down" style="margin-bottom: 10px; padding-left: 5px;"></i></a>
            </nav>
        </div>    
    </div>
    <!-- /#topnav -->
    <nav id="menu_wrapper">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="{{ route('home')}}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
                </a>
                

            </div>
            <!-- /.logo -->
            <nav id="main_menu">
                <ul class="list-unstyled d-flex ">
                    @foreach(config('db.menu') as $item)
                        <li class="px-3"><a href="{{ $item['href'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <!-- /#main_menu -->
            <div id="search" class="input-group mb-3">
                <input type="text" class="form-control border-0" placeholder="Search">
                <span class="input-group-text border-0" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <!-- /#search -->

        </div>
    </nav>
    <!-- /#menu_wrapper -->
