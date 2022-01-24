<div class="comic">
    <a href="{{ route('guest.comic.show', $comic->id) }}">
        <div class="poster">
            <img src="{{$comic->thumb}}" alt="{{ $comic->title }} poster">
        </div>
    </a>
    <p>{{$comic->series}}</p>
</div>
