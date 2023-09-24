<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\Carousel;
Use App\Models\Announcement;
Use App\Models\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index($page = null){
        $carousels = Carousel::all();
        $doctors = DB::table('users')->leftJoin('services as s', 's.id', '=', 'users.service_id')
        ->select('*' , 'users.id as id')
        ->where('users.role', '=', '1')
        ->paginate(5);
        $announcements = Announcement::latest()->first();
        if($page != null){
            return view($page , compact('doctors'));
        }
        return view('index' , compact('carousels' , 'announcements'));
    }
}
