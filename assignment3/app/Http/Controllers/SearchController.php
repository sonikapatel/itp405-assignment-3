<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //
    public function index(){
      return view('search');
    }

    public function getResults(){
      $search = request('title');
      if (!$search) {

      $dvds  = DB::table('dvds')->get();
    }
      $dvds  = DB::table('dvds')
        ->select('title', 'rating_name', 'genre_name')
         ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
         ->join('genres', 'dvds.genre_id', '=', 'genres.id')
         ->where('title', 'LIKE', "%$search%")
         ->orderBy('title')
         ->get();

      return view('results',[
      'dvds'=> $dvds,
      'search' => $search
      ]);

    }
}
