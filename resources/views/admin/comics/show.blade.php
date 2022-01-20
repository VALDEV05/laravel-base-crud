@extends ('layouts.app')


@section('content')
    <div id="comic" class="admin">
    <div class="container">
        <div class="poster">
            <img src="{{$comic['thumb']}}" alt="">
            <a href="{{route('admin.comics')}}">
                <div class="cross">
                    <i class="fa fa-times-circle"></i>
                </div>
            </a>
            
        </div>
        <!-- /.poster -->
               
        <div id="comic_info">
                <div class="row">
                    <div class="col-8">
                        <div id="title">
                            <h1 class="text-uppercase">{{$comic['title']}}</h1>
                        </div>
                        <!-- /#title -->
                        <div id="info" class="my-2">
                            <div id="price">
                                <p class="mb-0">
                                    U.S. Price: <span class="fw-bolder">${{$comic['price']}}</span>
                                </p>
                                <p class="mb-0 status text-uppercase fw-bolder">
                                    available
                                </p>
                            </div>
                            <div id="availability">
                                Check Availability <i class="fas fa-caret-down"></i>
                            </div>
                            <!-- /#availability -->
                        </div>
                        <!-- /#price -->
                        <div id="description">
                            <p class="mb-0">
                                {{$comic['description']}}
                            </p>
                        </div>
                        <!-- /#description -->
                        
                    </div>   
                </div>
            </div>
        </div>
        <!-- /#comic_info -->
    </div>
    <!-- /#comic -->
@endsection
  