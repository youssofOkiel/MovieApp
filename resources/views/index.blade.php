@extends('layouts.app')
@section('content')

    <div class="container mx-auto ">
        <div class="latest_Movies">
        <h2 class="text-orange-400 font-semibold uppercase tracking-widest text-lg"  >latest Movies</h2>
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
                    <a href="#">
                        <img src="{{ asset('image/escanoor2.jpg') }}" alt="escanoor sama" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
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
                    <a href="#">
                        <img src="{{ asset('image/allmight.jpg') }}" alt="allmight" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> allmight</a>
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
                    <a href="#">
                        <img src="{{ asset('image/baki.jpg') }}" alt="baki hnma" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> baki hnma</a>
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
                    <a href="#">
                        <img src="{{ asset('image/baki1.jpg') }}" alt="baki hnma" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> baki hnma</a>
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
                    <a href="#">
                        <img src="{{ asset('image/youjro1.jpg') }}" alt="youjro" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> youjro Hanma</a>
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
                    <a href="#">
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
                    <a href="#">
                        <img src="{{ asset('image/youjro2.jpg') }}" alt="youjro sama" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> youjro Hanma</a>
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
                    <a href="#">
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
                    <a href="#">
                        <img src="{{ asset('image/youjro3.jpg') }}" alt="youjro hanma" class="hover:opacity-75 rounded-lg border-4 border-gray-600">
                    </a>
                    <div class="mt-1">
                        <a href="#" class="text-lg hover:text-orange-500"> youjro hanma</a>
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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

            </div>
        </div>
    </div>

@endsection
