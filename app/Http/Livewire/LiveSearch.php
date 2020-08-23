<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LiveSearch extends Component
{
    public  $search = '';

    public function render()
    {
        $moviesArray = [];
      if ( strlen($this->search) > 3 )
      {
          $moviesArray = Http::withToken(config('services.tmdb.token'))
              ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
              ->json()['results'];
      }

         // dump($moviesArray);

        return view('livewire.live-search',[
            'moviesArray'=>collect($moviesArray)->take(8)
        ]);
    }
}
