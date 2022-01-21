@extends('layouts.admin')


@section('content')
    <div id="edit_admin">
        <div class="container mt-2">
            <h1 class="text-center text-uppercase"><i class="fas fa-user-edit pe-1"></i>edit here <i class="fas fa-user-edit ps-1"></i></h1>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="form" class="mt-5" action="{{route('admin.comics.update', $comic->id)}}" method="post">
                @csrf 
                @method('PUT')
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="title" class="form-label fs-3">Title</label>
                    <input type="text" class="form-control w-75" id="title" name="title" placeholder="TYPE HERE" value="{{old('title')}}">
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="description" class="form-label fs-3">Description</label>
                    <textarea type="text" class="form-control w-75" id="description" name="description" placeholder="TYPE HERE" value="{{old('description')}}"></textarea>
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="thumb" class="form-label fs-3">Thumb</label>
                    <input type="text" class="form-control w-75" id="thumb" name="thumb" placeholder="TYPE HERE" value="{{old('thumb')}}">
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="series" class="form-label fs-3">Series</label>
                    <input type="text" class="form-control w-75" id="series" name="series" placeholder="TYPE HERE" value="{{old('series')}}">
                </div>
                <div class="mb-1 d-flex justify-content-evenly align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <label for="price" class="form-label fs-3">Price</label>
                        <input type="text" class="form-control w-100" id="price" name="price" placeholder="TYPE HERE" value="{{old('price')}}">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <label for="sale_date" class="form-label fs-3">Sale Date</label>
                        <input type="text" class="form-control w-100" id="sale_date" name="sale_date" placeholder="TYPE HERE" value="{{old('sale_date')}}">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <label for="type" class="form-label fs-3">Type</label>
                        <input type="text" class="form-control w-100" id="type" name="type" placeholder="TYPE HERE" value="{{old('type')}}"> 
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