<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use File;
use Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        $user =  Auth::user();
        return view("berita.index", compact("berita","user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori =  Kategori::all();
        $user =  Auth::user();

        return view("berita.create",  compact('user','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data_validasi = $request->validate([
            "kreator" => 'required',
            "id_kategori" => 'required',
            "judul_berita" => 'required',
            "isi_berita" => 'required',
            "gambar_berita" => 'image',
        ]);
        
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        
        $data_validasi['gambar_berita'] = $request->file('gambar_berita')->store('public/berita-images');
        $data_validasi['gambar_berita'] = str_replace('public/', '', $data_validasi['gambar_berita']);
        // $path = $request->file('gambar_berita')->storeAs('public/berita-images', $request->file('gambar_berita'));
        // $data_validasi['gambar_berita'] = $path;
        
        $PostBerita=Berita::create($data_validasi);
        
        
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
