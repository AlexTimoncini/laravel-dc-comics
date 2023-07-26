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

    public function create(){
        return view('guest.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $newComic = new Comic();
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['comic_type'];
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('guest.show', $newComic->id);        
    }

    public function edit($id){
        $comic = Comic::findOrFail($id);
        return view('guest.edit', compact('comic'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);

        return redirect()->route('guest.show', $comic->id);
    }

    public function destroy($id){
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('guest.home');
    }
}
