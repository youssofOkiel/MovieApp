@extends('layouts.app')

@section('content')

    <div class="container border-b border-orange-800 pb-5">
        <div class="container mx-auto flex flex-col sm:flex-row md:flex-row ">
                <img src="{{asset('image/escanoor1.jpg')}}" alt="Escanoor Sama"
                     class="w-64 sm:w-auto md:w-full lg:w-1/3 rounded-lg border-4 border-gray-600">

            <div class=" sm:ml-0 md:ml-0 lg:ml-16">
               <h2 class="uppercase font-semibold tracking-widest text-lg" >Escanoor Sama</h2>
                <div class="flex items-center text-blue-200 mt-4 ">
                    <i class='fas fa-star text-orange-600'></i>
                    <span>star</span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2" >|</span>
                    <span>2020 - 07 - 13</span>
                </div>
                <div class="hover:text-orange-500" >
                    Anime | action | Powers
                </div>
                <h3 class="mt-6 font-semibold text-base">Overview</h3>
                <p>
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                </p>

                <div class="mt-10">
                    <h2 class="text-orange-600 font-bold tracking-wider text-lg">Featuered cast</h2>
                    <div class="flex mt-3">

                        <div>
                           <h3 class="text-lg">Jeff Wadlow</h3>
                            Screenplay, Story
                        </div>

                        <div class="ml-auto">
                            <h3 class="text-lg">Dave Wilson</h3>
                                Director
                        </div>

                        <div class="ml-auto">
                            <h3 class="text-lg">Eric Heisserer</h3>
                                Screenplay
                        </div>

                    </div>

                    <button class="mt-10 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full
                                       focus:outline-none"
                    style=" color: #255784;
                            box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;">
                        Play trailer
                        <i class="fa fa-play-circle"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h2 class="font-bold tracking-wider text-3xl pt-10 ">Top Billed Cast</h2>
        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >

            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                    <img src="{{ asset('image/van.jpg') }}" alt="van desil" class="mx-auto rounded">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>

            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                <img src="{{ asset('image/eiza.jpg') }}" alt="van desil" class="mx-auto rounded">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                <img src="{{ asset('image/topy.jpg') }}" alt="van desil" class="mx-auto rounded">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                <img src="{{ asset('image/van.jpg') }}" alt="van desil" class="mx-auto rounded">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                <img src="{{ asset('image/guy.jpg') }}" alt="van desil" class="mx-auto rounded">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>

            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border-2 border-gray-600
                        transition duration-500 ease-in-out transform hover:-translate-y-3">
                <img src="{{ asset('image/van.jpg') }}" alt="van desil" class="mx-auto rounded">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">van desil</div>
                    <p>
                        Ray Garrison / Bloodshot
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#fastfarios</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#torito</span>
                </div>
            </div>
        </div>
        <hr class="bg-orange-300 my-5">
        <h2 class="font-bold tracking-wider text-3xl ">Recommendations</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3" >

            <div class="mt-10">
                <a href="{{ route('show')  }}">
                    <img src="{{ asset('image/escanoor1.jpg') }}" alt="escanoor sama" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                </a>
                <div class="mt-1">
                    <a href="#" class="text-lg hover:text-orange-500"> escanoor sama</a>
                    <div class="flex items-center text-blue-200">
                        <i class='fas fa-star text-orange-600'></i>
                        <span>star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2" >|</span>
                        <span>2020 - 07 - 13</span>
                    </div>
                    <div class="hover:text-orange-500" >
                        Anime | action | Powers
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <a href="{{ route('show')  }}">
                    <img src="{{ asset('image/escanoor4.jpg') }}" alt="escanoor sama" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                </a>
                <div class="mt-1">
                    <a href="#" class="text-lg hover:text-orange-500"> escanoor sama</a>
                    <div class="flex items-center text-blue-200">
                        <i class='fas fa-star text-orange-600'></i>
                        <span>star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2" >|</span>
                        <span>2020 - 07 - 13</span>
                    </div>
                    <div class="hover:text-orange-500" >
                        Anime | action | Powers
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <a href="{{ route('show')  }}">
                    <img src="{{ asset('image/escanoor5.jpg') }}" alt="escanoor sama" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                </a>
                <div class="mt-1">
                    <a href="#" class="text-lg hover:text-orange-500"> escanoor sama</a>
                    <div class="flex items-center text-blue-200">
                        <i class='fas fa-star text-orange-600'></i>
                        <span>star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2" >|</span>
                        <span>2020 - 07 - 13</span>
                    </div>
                    <div class="hover:text-orange-500" >
                        Anime | action | Powers
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
