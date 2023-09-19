<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class Artikelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createartikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'judul_artikel' => 'required',
                'gambar_artikel' => 'mimes:png,jpg,gif|image|max:5048',
                'isi_artikel' => 'required',
            ]
        );

        $file = $request->file('gambar_artikel');
        $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar_artikel')->extension());

        $artikels = new Artikel;
        $artikels->judul_artikel = $request['judul_artikel'];
        $artikels->isi_artikel = $request['isi_artikel'];
        $artikels->gambar_artikel = $path;
        $artikels->save();

        return redirect('/dataartikel');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show()
    {
        return view('admin.detailartikel');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $Artikel = Artikel::find($id);
        return view('admin.editartikel', compact('Artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'gambar_artikel' => 'mimes:png,jpg,gif|image|max:5048',
            ]
        );

        if($request->file('gambar_artikel'))
        {
            if($request->oldImage) {
                storage::delete($request->oldImage);
            }
            $file = $request->file('gambar_artikel');
            $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar_artikel')->extension());
        }
        else {
            $path = $request->oldImage;
        }

        $artikels = Artikel::find($id);
        $artikels->judul_artikel = $request['judul_artikel'];
        $artikels->isi_artikel = $request['isi_artikel'];
        $artikels->gambar_artikel = $path;
        $artikels->save();

        return redirect('/dataartikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Artikel::destroy('id', $id);
        return redirect('/dataartikel');
    }
}
