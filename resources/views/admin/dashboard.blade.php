@extends('layouts.admin')




@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="heading d-flex justify-content-center">
            <h1 class="text-uppercase py-4"><i class="fas fa-dragon"></i> Dashboard <i class="fas fa-dragon"></i></h1>
        </div>

        <div id="dashboard">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="card-text w-100 text-center pt-3">
                            <h1>
                                <i class="fas fa-book"></i>
                                Comics
                                <i class="fas fa-book"></i>
                            </h1>
                        </div>
                        <div id="show" class="my-2 d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary"><a class="text-uppercase text-light text-center text-decoration-none" href="{{ route('admin.comics.index') }}">Show Comics <i class="fas fa-book"></i></a></button>

                        </div>
                        <div id="createNew" class="my-2 d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary"><a class="text-uppercase text-light text-center text-decoration-none" href="{{ route('admin.comics.create') }}">Create a new <i class="fas fa-book"></i></a></button>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="card-text w-100 text-center pt-3">
                            <h1>
                                <i class="fas fa-film"></i>
                                Movies
                                <i class="fas fa-film"></i>
                            </h1>
                        </div>
                        <div id="show" class="my-2 d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary"><a class="text-uppercase text-light text-center text-decoration-none" href="{{ route('admin.movies.index') }}">Show Movies <i class="fas fa-film"></i></a></button>
                        </div>
                        <div id="createNew" class="my-2 d-flex justify-content-center align-items-center" >
                            <button class="btn btn-primary"><a class="text-uppercase text-light text-center text-decoration-none" href="{{ route('admin.movies.create') }}">Create a new <i class="fas fa-film"></i></a></button>
                        </div>
                    </div>
                </div>      
            </div>
        </div>

        
    </div>
@endsection