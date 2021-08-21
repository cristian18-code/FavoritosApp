<?php

namespace App\Http\Controllers;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Favorite $favorite)
    {
        //
    }

    public function edit(Favorite $favorite)
    {
        //
    }

    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    public function destroy(Favorite $favorite)
    {
        //
    }
}
