@extends('layouts.admin')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        
    @endif
    <div class="container">
        <div class="heading d-flex justify-content-center">
            <h1 class="text-uppercase py-4"><i class="fas fa-user-shield"></i> Admin Vision <i class="fas fa-user-shield"></i></h1>
        </div>
        <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-2">
                        <div class="card adminvision" style="width: 9rem; min-height: 460px; height: 100%;" >
                            <img class="card-img-top" src="{{$movie['thumb']}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder" style="font-size: .7rem" >{{$movie['title']}}</h5>
                                <p class="card-text clamp text-center " style="-webkit-line-clamp: 5; font-size: .5rem; opacity:.5;">{{$movie['description']}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center"  style="font-size: .5rem; opacity:.5;">{{$movie['directors']}}</li>
                                <li class="list-group-item text-center"  style="font-size: .5rem; opacity:.5;">{{$movie['writers']}}</li>
                                <li id="actions" class="list-group-item text-center d-flex justify-content-center"  style="font-size: .5rem; opacity:.5;">
                                    <a href="{{route('admin.movies.show', $movie->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#{{--route('admin.movies.edit', $movie->id)--}}">
                                        <i class=" mx-4 fa fa-edit"></i>
                                    </a>
                                    <a class="text-danger" href="#{{--route('admin.movies.delete', $movie->id)--}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
        </div>
        <div id="pagination" class="d-flex justify-content-center">
            {{$movies->links()}}
        </div>
    </div>
@endsection