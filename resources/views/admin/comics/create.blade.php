@extends('layouts.app')


@section('content')

    <div class="container my-5">
        <h1>Add a new comic</h1>
    

        {{-- <form action="{{route('admin.comics.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" name="title" id="title" class="form-control" placeholder="Type your title here" aria-describedby="titleHelper" value="{{ old('title') }}">
                {{-- <small id="titleHelper" class="text-muted">Type a title for your post. max: 250</small> 
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="description" placeholder="type description" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Type thumb" name="thumb" aria-label="thumb">
                <input type="text" class="form-control" placeholder="Type series" name="series" aria-label="series">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Type price" name="price" aria-label="price">
                <input type="text" class="form-control" placeholder="Type sale date" name="sale_date" aria-label="sale_date">
                <input type="text" class="form-control" placeholder="Type type" name="type" aria-label="type">
            </div>
            <div class="btn-create d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </form> --}}
        <div class="bg-create">
  <div class="container pt-3 pb-4  mt-2 mb-3 bg-primary rounded text-light">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('admin.comics.store')}}" method="post">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label fs-3 @error('title') is-invalid @enderror">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        @error('title')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label fs-3 @error('description') is-invalid @enderror">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
        @error('description')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class=" mb-3">
        <label for="thumb" class="form-label fs-3  @error('thumb') is-invalid @enderror">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
        @error('thumb')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class=" mb-3">
        <label for="price" class="form-label fs-3 @error('price') is-invalid @enderror">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        @error('price')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class=" mb-3">
        <label for="series" class="form-label fs-3  @error('series') is-invalid @enderror">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
        @error('series')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class=" mb-3">
        <label for="sale_date" class="form-label fs-3  @error('sale_date') is-invalid @enderror">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        @error('sale_date')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class=" mb-3">
        <label for="type" class="form-label fs-3  @error('type') is-invalid @enderror">Types</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
        @error('type')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror
      </div>


      <div class=" save">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>


    </div>
    
@endsection