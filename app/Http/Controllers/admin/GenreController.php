<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        // return view('admin.pages.genre.index');
    }

    public function create()
    {
        return view('admin.genres.create');
       
    }

    public function store(Request $request)
    {
        // dd($request->all());
    }

    public function edit($id)
    {
        // dd($id);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all(), $id);
    }
    public function destroy($id){
        // dd($id);
    }
}
