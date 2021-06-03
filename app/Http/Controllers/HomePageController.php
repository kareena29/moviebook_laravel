<?php

namespace App\Http\Controllers;

use App\Repositories\IHomepageRepository;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public $movie;
    public function __construct(IHomepageRepository $home)
    {
        $this->movie = $home;
    }

    public function index(){
        $trending = $this->movie->getTrending();
        $popular = $this->movie->getPopular();
        return view('user.home_page',compact('trending','popular'));
    }

    public function popularMovies(){

        return view('user.home_page');
    }

    public function trendingMovies(){

        return view('user.home_page');
    }

    public function search(Request $request){

        return view('user.home_page');
    }
}
