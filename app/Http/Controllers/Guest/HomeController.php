<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index(){
        $comicList = Comic::paginate(5);
        return view('guest.home', compact('comicList'));
    }

    public function show($id){
        $comic = Comic::findOrFail($id);
        return view('guest.show', compact('comic'));
    }
}
