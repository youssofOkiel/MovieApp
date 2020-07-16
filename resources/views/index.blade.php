@extends('layouts.app')
@section('content')

    <div class="container mx-auto ">
        <div class="now_playing">
        <h2 class="text-orange-400 font-semibold uppercase tracking-widest text-lg"  >now_playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >
    @foreach( $now_playing as $movie  )

                <div class="mt-10 rounded-lg border-4 border-gray-600 shadow-lg">
                    <a href="#">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="escanoor sama" class="hover:opacity-75">
                    </a>
                    <div class="mt-1">
                      <a href="#" class="text-lg hover:text-orange-500 ml-1">{{ $movie['title'] }}</a>
                        <div class="flex items-center text-blue-200 my-3 ml-1">
                            <i class='fas fa-star text-orange-600'></i>
                            <div class="progress-bar progress-bar-striped rounded-full"
                                 style="width:{{$movie['vote_average']*10}}.%">{{$movie['vote_average'] *10}}.%
                            </div>
                        </div>
                        <span class="py-2 ml-1 text-lg" >{{$movie['release_date']}}</span>
                        <div class="hover:text-orange-500 pt-2 ml-1" >
                            Anime | action | Powers
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        <hr class="py-10 font-bold bg-orange-300">
            <div class="popular_Movies">
                <h2 class="text-orange-400 font-semibold uppercase tracking-widest text-lg"  >popular Movies</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >

                    @foreach( $popularMovies as $movie  )

                        <div class="mt-10 rounded-lg border-4 border-gray-600 shadow-lg">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="escanoor sama" class="hover:opacity-75">
                            </a>
                            <div class="mt-1">
                                <a href="#" class="text-lg hover:text-orange-500 ml-1">{{ $movie['title'] }}</a>
                                <div class="flex items-center text-blue-200 my-3 ml-1">
                                    <i class='fas fa-star text-orange-600'></i>
                                    <div class="progress-bar progress-bar-striped rounded-full"
                                         style="width:{{$movie['vote_average']*10}}.%">{{$movie['vote_average'] *10}}.%
                                    </div>
                                </div>
                                <span class="py-2 ml-1 text-lg" >{{$movie['release_date']}}</span>
                                <div class="hover:text-orange-500 pt-2 ml-1" >
                                    Anime | action | Powers
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>


                </div>
        </div>
    </div>

@endsection
