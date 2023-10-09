<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tb_kategori';
    protected $fillable = ['nama_kategori'];
    public function Berita(){
        return $this->hasMany(Berita::class);
    }
}
