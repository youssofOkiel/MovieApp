@extends('layouts.app')
@section('content')

    <div class="container mx-auto ">

        <div class="now_playing">
        <h2 class="text-orange-400 font-semibold uppercase tracking-widest text-lg"  >now_playing</h2>
            <p style="font-size:48px">
                &#128512; &#128516; &#128525; &#128151;
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >
                 @foreach( $now_playing as $movie  )

                    <x-one-movie :movie="$movie" :genres="$genres"/>

                 @endforeach
            </div>
        </div>

        <hr class="my-10 font-bold bg-orange-300">

        <div class="popular_Movies">
            <h2 class="text-orange-400 font-semibold uppercase tracking-widest text-lg"  >popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >

                @foreach( $popularMovies as $movie  )

                    <x-one-movie :movie="$movie" :genres="$genres"/>

                @endforeach

                </div>
            </div>
    </div>

@endsection
