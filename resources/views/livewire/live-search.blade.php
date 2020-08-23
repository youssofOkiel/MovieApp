<li class="nav-item ">
    <div class="relative" x-data="{ open: true }">
        <input wire:model.debounce.500ms="search" type="text" placeholder="Search"
               class="bg-light text-black font-bold text-md rounded-full w-64 px-6 pl-10 py-1
               focus:outline-none focus:shadow-outline"
               @click.away="open = false"
               @keydown.escape.window = "open = false"
               @focus="open = true"
        >
        <div class="absolute left-0 top-0 my-1 ml-2" >
            <i class="fa fa-play-circle" style="font-size:18px; color:#e53e3e;" ></i>
        </div>

    <div wire:loading class="absolute right-0 top-0 my-1 mr-2 spinner-border text-danger w-5 h-5"
    style="font-size:13px;"
    ></div>
`
    @if(strlen($search) > 2)
        <div class="absolute z-10 w-64 mt-3 bg-gray-700 rounded-lg border-l-2 border-b-2 border-orange-300
                            shadow-lg" x-show="open" >
            @if(count($moviesArray) > 0  )
            <ul >
                @foreach($moviesArray as $movie)
                <li class="my-1 px-2 rounded-lg hover:bg-gray-100 border-b ">
                  <a href="{{ route('movie' , ['id' =>  $movie['id']]) }}" class="block flex items-center " >
                      @if($movie['poster_path'])
                          <img src="https://image.tmdb.org/t/p/w92/{{ $movie['poster_path'] }}" alt="poster" class="w-8">
                      @else
                          <i class='fas fa-skull-crossbones' style='font-size:36px; color: #e53e3e;'></i>
                      @endif
                      <span class="ml-4">{{ $movie['title'] }}</span>
                  </a>
                </li>
                @endforeach
            </ul>
            @else
                <div class="rounded-md bg-red-600" >No results for {{$search}}</div>
            @endif
        </div>
    @endif
    </div>
</li>


