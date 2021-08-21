<?php

namespace App\Http\Controllers;

use App\Http\Requests\favorites\StoreRequest;
use App\Http\Requests\favorites\UpdateRequest;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $favorites = Favorite::get()->where('user_id', Auth::user()->id);
        return view('favorites.index', compact('favorites'));
    }

    public function create()
    {
        return view('favorites.create');
    }

    public function store(StoreRequest $request)
    {
        Favorite::create($request->all()+[
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('favorites.index');
    }

    public function show(Favorite $favorite)
    {
        //
    }

    public function edit(Favorite $favorite)
    {
        return view('favorites.edit', compact('favorite'));
    }

    public function update(UpdateRequest $request, Favorite $favorite)
    {
        $favorite->update($request->all()+[]);
        return redirect()->route('favorites.index');
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return redirect()->route('favorites.index');
    }
}
