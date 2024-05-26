<?php

namespace App\Http\Controllers;

//import Model "barang
use App\Models\barang;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $barangs = barang::latest()->paginate(5);

        //render view with barang
        return view('barang.index', compact('barang'));
    }
}