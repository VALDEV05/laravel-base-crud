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
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card adminvision" style="width: 9rem; min-height: 460px; height: 100%;" >
                        <img class="card-img-top" src="{{$comic['thumb']}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bolder" style="font-size: .7rem" >{{$comic['title']}}</h5>
                            <p class="card-text clamp text-center " style="-webkit-line-clamp: 5; font-size: .5rem; opacity:.5;">{{$comic['description']}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center"  style="font-size: .5rem; opacity:.5;">{{$comic['series']}}</li>
                            <li class="list-group-item text-center"  style="font-size: .5rem; opacity:.5;">$ {{$comic['price']}} | {{$comic['sale_date']}}</li>
                            <li class="list-group-item text-center"  style="font-size: .5rem; opacity:.5;">{{$comic['type']}}</li>
                            <li id="actions" class="list-group-item text-center d-flex justify-content-center"  style="font-size: .5rem; opacity:.5;">
                                <a href="{{route('admin.comics.show', $comic->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('admin.comics.edit', $comic->id)}}">
                                    <i class=" mx-4 fa fa-edit"></i>
                                </a>
                                <a class="text-danger" href="{{route('admin.comics.delete', $comic->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>





        <div id="pagination" class="d-flex justify-content-center">
            {{$comics->links()}}
        </div>
    </div>
    
    
@endsection