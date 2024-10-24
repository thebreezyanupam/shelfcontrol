<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Genre;
use Illuminate\Support\Facades\Session;
class GenreController extends Controller
{
    public function index(Request $request)
    {
        $genres = Genre::latest();

        if(!empty($request->get('keyword'))){
            $genres = $genres->where('name', 'like', '%'.$request->get('keyword').'%');
        }
        $genres = $genres->paginate(10);
        
        return view('admin.genres.list', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
       
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:genres,slug',
        'status' => 'required|boolean',
       ]);

       if($validator->passes()){
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->slug = $request->slug;
        $genre->status = $request->status;
        $genre->save();

        Session::flash('success', 'Genre created successfully');

        return response()->json([
            'status' => true, 
            'message' => 'Genre created successfully'
         ]);
       }
       else{
        return response()->json([
        'status' => false, 
        'errors' => $validator->errors()]);
       }
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
