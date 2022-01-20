@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="heading d-flex justify-content-center">
            <h1 class="text-uppercase"><i class="fas fa-user-shield"></i> Admin Vision <i class="fas fa-user-shield"></i></h1>
        </div>

       <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Sale Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>
                        <a class="text-uppercase btn btn-primary" href="{{route('admin.comics.show')}}">view </a>
                        <a class="text-uppercase btn btn-secondary" href="#"> edit </a>
                        <a class="text-uppercase btn btn-danger" href="#"> delete </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div id="pagination" class="d-flex justify-content-center">
            {{$comics->links()}}
        </div>
    </div>
    
    
@endsection