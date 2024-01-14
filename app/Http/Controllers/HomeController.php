<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getDataFromAPI()
    {   
       // getting fake post data of REST API from  JSONPlaceholder which is fake online REST API for testing.
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // Decode the JSON response
        $posts = $response->json();
        // dd($posts);
        return view('posts',compact('posts'));
    }
}
