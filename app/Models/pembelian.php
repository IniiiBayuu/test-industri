<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama', 'merk', 'harga'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
    //membuat relasi one to one
    public function bara()
    { 
        //data dari model 'Siswa' bisa memiliki 1 data
        //dari model 'Wali' melalui id_siswa
        return $this->hasOne(Pesanan::class, 'i');
    }

}
