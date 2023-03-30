<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movies::all();
        return view('movies.list', compact('movies'));
    }
}
