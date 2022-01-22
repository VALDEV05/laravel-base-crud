<div class="movie">
    <a href="{{ route('movie', $movie->id) }}">
        <div class="poster">
            <img src="{{$movie->thumb}}" alt="{{ $movie->title }} poster">
        </div>
    </a>
    <p>{{$movie->title}}</p>
</div>