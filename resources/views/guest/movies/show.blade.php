@extends('layouts.app')



@section('content')
    <div id="movie">
        <div id="jumbo_wrap">
            <div id="jumbotron"></div>
            <!-- #jumbotron -->
            <div class="banner"></div>
            <!-- /.banner -->
            <div class="container">
                <div id="poster_wrap">
                    <div class="poster">
                        <img src="{{$movie['thumb']}}" alt="">
                    </div>
                    <!-- /.poster -->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#jumbo_wrap -->
        <div id="movie_info">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div id="title">
                            <h1 class="text-uppercase">{{$movie['title']}}</h1>
                        </div>
                        <!-- /#title -->
                        <div id="description" class="my-2">
                            <p class="mb-0">
                                {{$movie['description']}}
                            </p>
                        </div>
                        <!--/#description-->
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <p class="mb-0">
                            Direttore:
                            {{$movie['directors']}}
                        </p>
                        <p class="mb-0">
                            Autori:
                            {{$movie['writers']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#movie_info -->
    </div>


@endsection