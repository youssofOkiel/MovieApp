
    <div class="mt-10 rounded-lg border-4 border-gray-600 shadow-lg
                            transition duration-500 ease-in-out transform hover:-translate-y-3">
        <a href="{{ route('movie' , $movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="escanoor sama" class="hover:opacity-75">
        </a>
        <div class="mt-1">
            <a href="{{ route('movie' , $movie['id']) }}" class="text-lg hover:text-orange-500 ml-1">
                {{ $movie['title'] }}</a>
            <div class="flex items-center text-blue-200 my-3 ml-1">
                <i class='fas fa-star text-orange-600'></i>
                <div class="progress-bar progress-bar-striped rounded-full"
                     style="width:{{$movie['vote_average']*10}}.%">{{$movie['vote_average'] *10}}.%
                </div>
            </div>
            <span class="py-2 ml-1 text-lg" >{{$movie['release_date']}}</span>
            <div class="hover:text-orange-500 pt-2 ml-1" >
                @foreach( $movie['genre_ids'] as $genre )
                    {{ $genres->get($genre) }}
                    @if(! $loop->last ) | @endif
                @endforeach
            </div>
        </div>
    </div>


