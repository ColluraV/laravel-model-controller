<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::all();
        
        dump($movies);
<<<<<<< HEAD
        return view('home',["film"=>$movies]);
=======
        return view('home');
>>>>>>> 4fe61bab9e6c436a35f529f7ce0cc53bcb44c16d
    }
}
