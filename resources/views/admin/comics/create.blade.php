@extends('layouts.admin')


@section('content')
    <div id="edit_admin">
        <div class="container mt-2">
            <div class="title d-flex justify-content-center">
                <h1 class="text-center text-uppercase"><i class="fas fa-user-edit pe-1"></i>Add new comic <i class="fas fa-user-edit ps-1"></i></h1>
                {{-- <a href="{{route('admin.comics.index')}}">
                    <div class="cross" style="font-size: 30px">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </div>
                </a> --}}
            </div>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="form" class="mt-5" action="{{route('admin.comics.store')}}" method="post">
                @csrf 

                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="title" class="form-label fs-3 @error('title') is-invalid @enderror">Title</label>
                    <input type="text" class="form-control w-75" id="title" name="title" placeholder="TYPE HERE" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="description" class="form-label fs-3 @error('description') is-invalid @enderror">Description</label>
                    <textarea type="text" class="form-control w-75" id="description" name="description" placeholder="TYPE HERE" value="{{old('description')}}"></textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="thumb" class="form-label fs-3 @error('thumb') is-invalid @enderror">Thumb</label>
                    <input type="text" class="form-control w-75" id="thumb" name="thumb" placeholder="TYPE HERE" value="{{old('thumb')}}">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="series" class="form-label fs-3 @error('series') is-invalid @enderror">Series</label>
                    <input type="text" class="form-control w-75" id="series" name="series" placeholder="TYPE HERE" value="{{old('series')}}">
                    @error('series')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex justify-content-evenly align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <label for="price" class="form-label fs-3 @error('price') is-invalid @enderror">Price</label>
                        <input type="text" class="form-control w-100" id="price" name="price" placeholder="TYPE HERE" value="{{old('price')}}">
                        @error('price')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <label for="sale_date" class="form-label fs-3 @error('sale_date') is-invalid @enderror">Sale Date</label>
                        <input type="text" class="form-control w-100" id="sale_date" name="sale_date" placeholder="TYPE HERE" value="{{old('sale_date')}}">
                        @error('sale_date')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <label for="type" class="form-label fs-3 @error('type') is-invalid @enderror">Type</label>
                        <input type="text" class="form-control w-100" id="type" name="type" placeholder="TYPE HERE" value="{{old('type')}}"> 
                        @error('type')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                </div>
                <div id="btn-form" class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary text-uppercase" style="padding: 0.55rem 7rem;">Save</button>
                </div>
            </form>
            {{-- /#form --}}
        </div>
        {{-- /. container --}}
    </div>
@endsection