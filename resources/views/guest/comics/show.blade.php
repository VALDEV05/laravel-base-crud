@extends ('layouts.app')


@section('content')
    <div id="comic">
        <div id="jumbo_wrap">
            <div id="jumbotron"></div>
            <!-- #jumbotron -->
            <div class="banner"></div>
            <!-- /.banner -->
            <div class="container">
                <div id="poster_wrap">
                    <div class="poster">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <!-- /.poster -->
                </div>
                
            </div>
            <!-- /.container -->
        </div>
        <!-- /#jumbo_wrap -->
        <div id="comic_info">
            <div class="container">
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
  