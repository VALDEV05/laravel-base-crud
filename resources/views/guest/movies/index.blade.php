@extends('layouts.app')


@section('content')
    <div id="movies_wrapper">
        <div class="jumbotron"></div>
        <!-- /.jumbotron -->
        <div id="movies" class="container row m-auto py-3">
            @foreach ($movies as $movie)
                
                @include('partials.movie')

            @endforeach
        </div>
         <!-- /#movies -->
        @include('partials.merchandise')
        <!-- /#marchandising -->
    </div>
    
@endsection