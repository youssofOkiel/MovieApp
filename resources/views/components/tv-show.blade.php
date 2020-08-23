
<div class="mt-10 rounded-lg border-4 border-gray-600 shadow-lg
                            transition duration-500 ease-in-out transform hover:-translate-y-3">
    <a href="{{ route('TVshow' , $tv['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$tv['poster_path'] }}" alt="escanoor sama"
             class="hover:opacity-75">
    </a>
    <div class="mt-1">
        <a href="{{ route('TVshow' , $tv['id']) }}" class="text-lg hover:text-orange-500 ml-1">
            {{ $tv['name'] }}</a>
        <div class="flex items-center text-blue-200 my-3 ml-1">
            <i class='fas fa-star text-orange-600'></i>
            <div class="progress-bar progress-bar-striped rounded-full">
                <span class="py-2 ml-1 text-lg" >{{$tv['vote_average']}}%</span>
            </div>
        </div>
        <span class="py-2 ml-1 text-lg" >{{$tv['first_air_date']}}</span>
        <div class="hover:text-orange-500 pt-2 ml-1" >
{{--           <span>{{ $tv['genres']  }}</span>--}}
        </div>
    </div>
</div>


