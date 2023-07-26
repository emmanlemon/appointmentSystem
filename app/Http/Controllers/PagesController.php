<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\Carousel;
Use App\Models\User;

class PagesController extends Controller
{
    public function index($page = null){
        $carousels = Carousel::all();
        $doctors = User::where('role' , '=' , '1')->paginate(5);
        if($page != null){
            return view($page , compact('doctors'));
        }
        return view('index' , compact('carousels'));
    }
}
