@extends('layouts.app')

@section('content')

    <div class="container border-b border-orange-800 pb-5">
        <div class="container mx-auto flex flex-col sm:flex-row md:flex-row ">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$tv['poster_path'] }}" alt="escanoor sama"
                 class="w-64 sm:w-auto md:w-full lg:w-1/3 rounded-lg border-4 border-gray-600">

            <div class=" sm:ml-0 md:ml-0 lg:ml-16">
                <h2 class="uppercase font-bold tracking-widest text-4xl text-orange-600 mt-3">
                    {{ $tv['name'] }}</h2>
                <div class="flex items-center text-blue-200 mt-4 ">
                    <i class='fas fa-star text-orange-600'></i>
                    <div class="progress-bar progress-bar-striped rounded-full"
                         style="width:{{$tv['vote_average']*10}}.%">{{$tv['vote_average'] *10}}.%
                    </div>
                </div>

                <div class="hover:text-orange-500 pt-2 ml-1" >
                    @foreach( $tv['genres'] as $genre )
                        {{ $genre['name'] }}
                        @if(! $loop->last ) | @endif
                    @endforeach
                </div>

                <span class="py-2 ml-1 text-lg" >{{$tv['first_air_date']}}</span>

                <h3 class="mt-6 font-semibold text-base">overview</h3>
                <p class="pt-2 pl-1 rounded-lg border-b-2 border-l-2 border-orange-300 shadow-lg">
                    {{$tv['overview']}}
                </p>

                <div class="mt-10">
                    <h2 class="text-orange-600 font-bold tracking-wider text-lg">Featuered crew</h2>
                    <div class="flex  mt-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                        @foreach($tv['seasons'] as $season )
                            @if($loop->index <= 3 )
                                <div class="my-3 rounded-lg border-b-2 border-r-2 border-orange-300 shadow-lg">
                                    <h3 class="text-lg">{{$season['name']}}</h3>
                                    {{substr($season['overview'], 0, 100)}}
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-10" x-data="{ open: false }">
                        @if(count($tv['videos']['results']) > 0 )

                            <button
                                x-on:click="open = true"
                                href="https://www.youtube.com/embed/{{ $tv['videos']['results'][0]['key'] }}"
                                class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none"
                                style=" color: #255784;
                                    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;">

                                Play trailer

                                <i class="fa fa-play-circle" ></i>
                            </button>

                        @else
                            <button id="info" class="hover:bg-red-700 text-white font-bold py-2 px-4
                        rounded-full focus:outline-none"
                                    style="box-shadow: 0 0 10px #e53e3e, 0 0 40px #e53e3e, 0 0 80px #e53e3e;">

                                <p>NO Play trailer &#128517;</p>
                            </button>
                        @endif

                        <div
                            style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                            x-show="open"
                            x-on:keydown.escape.window="open = false">
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            class="text-3xl leading-none hover:text-gray-300 focus:outline-none"
                                            x-on:click="open = false"
                                        >&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                    src="https://www.youtube.com/embed/{{ $tv['videos']['results'][0]['key'] }}"
                                                    style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>

                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">


        <hr class="bg-orange-300 my-5" >
        <div id="demo" class="carousel slide mx-auto sm:w-3/4 md:w-2/4 lg:w-50 h-50 " data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($tv['images']['backdrops'] as $image )
                    @if($loop->index < 5)
                        <li data-target="#carouselIndicators" data-slide-to="{{ $loop->index }}" class="active"></li>
                    @endif
                @endforeach
            </ol>
            <!-- The slideshow -->
            <div class="carousel-inner ">
                @foreach($tv['images']['backdrops'] as $image )
                    @if($loop->index < 5)
                        @if($loop->index == 0 )
                            <div class="carousel-item active ">
                                <img  src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="slide item" >
                            </div>
                        @else
                            <div class="carousel-item">
                                <img  src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="slide item" >
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



    </div>
@endsection
