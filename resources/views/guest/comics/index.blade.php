@extends ('layouts.app')


@section('content')
    <div id="comics_wrapper">
        <div class="jumbotron"></div>
        <!-- /.jumbotron -->
        <div id="comics" class="container row m-auto py-3">
            @foreach($comics as $comic)
                
                @include('partials.comic')
                
            @endforeach
        </div>
        <!-- /#comics -->
        @include('partials.merchandise')
        <!-- /#marchandising -->
    </div>
    <!-- /#comics_wrapper -->
@endsection