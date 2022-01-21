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
                <a class="text-decoration-none text-uppercase text-light fw-bold d-flex align-items-center" href="{{route('admin.comics.edit', $comic->id)}}">Edit View <i class="ms-2 fas fa-user-edit"></i></a>
            </button>
            {{-- <button class="mx-4 btn btn-danger">
                <a class="text-decoration-none text-uppercase text-light fw-bold d-flex align-items-center shadow-lg" href="{{route('admin.comics.delete', $comic->id)}}"></a>
            </button> --}}

            <!-- Button trigger modal -->
                    <button type="button" class=" mx-4 btn btn-danger text-uppercase fw-bolder" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                        Delete View <i class="ms-2 fas fa-trash"></i>
                    </button>

                    <!-- Modal -->

            <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete comic {{$comic->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        ⚡ Attenzione questa operazione non puo essere annullata!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('admin.comics.delete', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        
    </div>


</div>





       

@endsection
  