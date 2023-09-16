<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class Pengunjungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('pengunjung.index', compact('artikels'));
        $Pengumuman = Pengumuman::find($id);
        return view('admin.editpengumuman', compact('Pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function artikel()
    {
        $artikels = Artikel::all();
        return view('pengunjung.artikel', compact('artikels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function pengumuman()
    {
        $pengumumen = Pengumuman::all();
        return view('pengunjung.pengumuman', compact('pengumumen'));
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function about()
    {
        return view('pengunjung.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function detailartikel()
    {
        return view('pengunjung.detailartikel');
    }
}
