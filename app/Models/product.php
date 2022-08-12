<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['uuid' ,'name','type', 'price', 'quantity'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
    //membuat relasi one to one
    // public function pembelian()
    // {
    //     return $this->hasOne(pembelian::class, 'id_barang');
    // }

    // public function pesanan()
    // {
    //     return $this->hasOne(pesanan::class, 'id_barang');
    // }
    // public function image()
    // {
    //     if ($this->foto && file_exists(public_path('images/barang/'.$this->foto))){
    //         return asset('images/barang/'.$this->foto);
    //     }else{
    //         return asset('images/no_image.jpg');
    //     }
    // }
    // public function deleteImage()
    // {
    //     if ($this->foto && file_exists(public_path('images/barang/'.$this->foto))){
    //         return unlink(public_path('images/barang/'.$this->foto));
    //     }
    // }

}
