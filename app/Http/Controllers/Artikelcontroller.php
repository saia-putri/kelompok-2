<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Artikelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.artikel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'gambar_post' => 'mimes:png,jpg,gif|image|max:5048',
                'penulis_post' => 'required',
                'isi_post' => 'required',
                'judul_post' => 'required',
            ]
        );

        $file = $request->file('gambar_post');
        $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar_post')->extension());

        $post = new Post;
        $post->penulis_post = $request['penulis_post'];
        $post->judul_post = $request['judul_post'];
        $post->isi_post = $request['isi_post'];
        $post->gambar_post = $path;
        $post->save();

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    public function edit()
    {
        return view('admin.editartikel');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
