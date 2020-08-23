<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TVshowController extends Controller
{
    public function index()
    {
        $top_rated_TVshows = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/top_rated')
            ->json()['results'];//to just scrap only result

//        $genresArray = Http::withToken(config('services.tmdb.token'))
//            ->get('https://api.themoviedb.org/3/genre/tv/list')
//            ->json()['genres'];//to just scrap only result
//
//        $genres = collect($genresArray)->mapWithKeys(function ($genre){
//            return [$genre['id'] => $genre['name']];
//        });

        $popular_TVshows = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];//to just scrap only results

//            dump($top_rated_TVshows);
//        dump($genres);
//        dump($popular_TVshows);

        return view('TVshow.index' , [
            'top_rated'=>$top_rated_TVshows,
//            'genres' => $genres,
            'populars' => $popular_TVshows
        ]);

    }
    public function show($id)
    {

        $tv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=videos,images')
            ->json();

//          dump($tv);

        return view('TVshow.show', [
            'id'=>$id,
            'tv' => $tv
        ]);

    }
}
