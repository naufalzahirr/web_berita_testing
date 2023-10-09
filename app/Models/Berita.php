<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use Sluggable;
    protected $table = 'tb_berita';
    protected $fillable = ['kreator','id_kategori','judul_berita','isi_berita','gambar_berita','slug'];

    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_berita'
            ]
        ];
    }

}
