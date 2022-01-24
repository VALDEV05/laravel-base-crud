@extends('layouts.admin')


@section('content')

    <div id="form_admin">
        <div class="container mt-2">
            <div class="title d-flex justify-content-center">
                <h1 class="text-center text-uppercase"><i class="fas fa-user-edit pe-1"></i>edit here <i class="fas fa-user-edit ps-1"></i></h1>
                {{-- <a href="{{route('admin.comics.index')}}">
                    <div class="cross" style="font-size: 30px">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </div>
                </a> --}}
            </div>

            <div id="form" action="{{ route('admin.movies.update', $movie->id) }}" class="mt-5" method="post">
                @csrf
                @method('PUT')


                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="title" class="form-label fs-3 @error('title') is-invalid @enderror">Title</label>
                    <input type="text" class="form-control w-75" id="title" name="title" placeholder="TYPE HERE" value="{{ $movie->title }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="description" class="form-label fs-3 @error('description') is-invalid @enderror">Description</label>
                    <textarea type="text" class="form-control w-75" id="description" name="description" placeholder="TYPE HERE" value="{{ $movie->description }}"></textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="thumb" class="form-label fs-3 @error('thumb') is-invalid @enderror">Thumb</label>
                    <input type="text" class="form-control w-75" id="thumb" name="thumb" placeholder="TYPE HERE" value="{{ $movie->thumb }}">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="directors" class="form-label fs-3 @error('directors') is-invalid @enderror">Directors</label>
                    <input type="text" class="form-control w-75" id="directors" name="directors" placeholder="TYPE HERE" value="{{ $movie->directors }}">
                    @error('directors')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-1 d-flex flex-column align-items-center">
                    <label for="writers" class="form-label fs-3 @error('writers') is-invalid @enderror">Writers</label>
                    <input type="text" class="form-control w-75" id="writers" name="writers" placeholder="TYPE HERE" value="{{ $movie->writers }}">
                    @error('writers')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

            </div>
        </div>
    </div>

@endsection
