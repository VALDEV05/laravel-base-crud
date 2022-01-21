@extends ('layouts.admin')


@section('content')
<div id="show_admin">
    <div class="container pt-4">
        <div class="title">
            <h2>{{$comic->title}}</h2>
        </div>
        <div class="description d-flex justify-content-around align-items-center">
            <div class="poster">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="desc d-flex flex-column">
                <p>
                    {{$comic->description}}
                </p>
                <div class="info d-flex justify-content-around">
                    <p class="price">&dollar;{{$comic->price}}</p>
                    <p class="date">{{$comic->sale_date}}</p>
                    <p class="type">{{$comic->type}}</p>
                    <p class="series">{{$comic->series}}</p>
                </div>
            </div>
            
        </div>
        <div id="actions" class=" mt-5 d-flex justify-content-center" >

            <button class=" mx-4 btn btn-primary">
                 <a class="text-decoration-none text-uppercase text-light fw-bold d-flex align-items-center" href="{{route('admin.comics')}}">Close View <i class="ms-2 fas fa-times"></i></a>
            </button>
            <button class=" mx-4 btn btn-warning">
                <a class="text-decoration-none text-uppercase text-light fw-bold d-flex align-items-center" href="{{route('admin.comics.edit')}}">Edit View <i class="ms-2 fas fa-user-edit"></i></a>
            </button>
            <button class=" mx-4 btn btn-danger">
                <a class="text-decoration-none text-uppercase text-light fw-bold d-flex align-items-center shadow-lg" href="#">Delete View <i class="ms-2 fas fa-trash"></i></a>
            </button>
        </div>
        
    </div>


</div>





       

@endsection
  