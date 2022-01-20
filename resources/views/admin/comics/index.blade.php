@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="heading d-flex justify-content-between">
            <h1 class="text-uppercase"><i class="fas fa-user-shield"></i> Admin Vision <i class="fas fa-user-shield"></i></h1>
            <div class="create">
                <a class="text-uppercase btn btn-primary" href="{{route('admin.comics.create')}}">Create </a>
            </div>
        </div>
        

       {{-- <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumb</th>
                    <th>Series</th>
                    <th>Price</th>
                    <th>Sale_date</th>
                    <th>type</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="text-uppercase btn btn-primary" href="{{route('admin.comics.show', $comic->id)}}">view </a>
                        <a class="text-uppercase btn btn-secondary" href="#"> edit </a>
                        <a class="text-uppercase btn btn-danger" href="#"> delete </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table> --}}


         {{-- <div id="comics" class="container row m-auto py-3">
            @foreach($comics as $comic)
                <div class="col-2 mt-4">
                    <div id="comic" class="card">
                           <a href="{{route('comic', $comic->id)}}">
                                <div class="poster">
                                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} poster">
                                </div>
                            </a>
                            <p class="my-4 text-decoration-none">{{$comic['title']}}</p>
                            <p class="clamp">{{$comic['description']}}</p>
                            <p>{{$comic['price']}} {{$comic['sale_date']}}</p>
                        </div> 
                <!-- /comic-->
                </div>
            @endforeach
        </div> --}}

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
                                <i class=" mx-4 fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
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