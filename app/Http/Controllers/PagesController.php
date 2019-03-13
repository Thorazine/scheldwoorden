<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Word;
use Cache;
use DB;

class PagesController extends Controller
{


    public function index(Request $request)
    {
        $word = Cache::remember('wordOfDay', Carbon::now()->endOfDay()->diffInSeconds(Carbon::now()), function() {
            return Word::inRandomOrder()->first();
        });

        $alfabet = Cache::remember('alfabet', 86400, function() {
            return DB::select('SELECT substr(word,1,1) as letter FROM words group by substr(word,1,1)');
            // return Word::select('word', DB::raw('substr(word,1,1) as letter'))->groupBy(DB::raw('substr(word,1,1)'))->get();
        });

        return view('pages.index')
            ->with('alfabet', $alfabet)
            ->with('word', $word);
    }


    public function alfabet(Request $request)
    {
        $alfabet = Cache::remember('alfabet', 86400, function() {
            return DB::select('SELECT substr(word,1,1) as letter FROM words group by substr(word,1,1)');
            // return Word::select('word', DB::raw('substr(word,1,1) as letter'))->groupBy(DB::raw('substr(word,1,1)'))->get();
        });

        $words = Cache::remember('words:'.$request->letter, 0, function() use ($request) {
            return Word::where(DB::raw('substr(word,1,1)'), $request->letter)->get();
        });

        return view('pages.alfabet')
            ->with('letter', $request->letter)
            ->with('alfabet', $alfabet)
            ->with('words', $words);
    }


    public function random(Request $request)
    {
        $word = Word::inRandomOrder()->first();

        return view('pages.random')
            ->with('word', ucwords($word->word));
    }


    public function arrayPhp(Request $request)
    {
        $words = Cache::remember('words', 0, function() {
            return Word::orderBy('word', 'asc')->pluck('word');
        });

        return view('pages.arrays.php')->with('words', $words);
    }


    public function arrayJson(Request $request)
    {
        $words = Cache::remember('words', 0, function() {
            return Word::orderBy('word', 'asc')->pluck('word');
        });

        return view('pages.arrays.json')->with('words', $words);
    }
}
