<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Pengunjungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengunjung.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function artikel()
    {
        return view('pengunjung.artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function pengumuman()
    {
        return view('pengunjung.pengumuman');
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
   
}
