<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorHomeController extends Controller
{
    public function index()
    {
        $actor = Actor::all();
        return view('user.cast_show',compact('actor'));
    }
}
