<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori =  Kategori::all();
        $kategori_nav =  Kategori::all();
        $berita = Berita::latest('created_at')->take(6)->get();
        return view("blog.index",  compact('kategori','berita','kategori_nav'));
    }

    public function kategori($id)
    {
        
        $kategori_first = Berita::where('id_kategori',$id)->latest()->first();
        Paginator::useBootstrap();
        $kategori = Berita::where('id_kategori', $id)->latest()->first()->skip(1)->paginate(2);
        $kategori_nav =  Kategori::all();
        // dd($kategori);
        // dd($kategori_first);
        return view('blog.kategori', compact('kategori_first','kategori','kategori_nav'));
    }

    public function berita($id)
    {
        $berita = Berita::find($id);
        $kategori_nav =  Kategori::all();
        return view('blog.berita', compact('berita','kategori_nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
