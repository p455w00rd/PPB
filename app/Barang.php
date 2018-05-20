<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    protected $fillable = ['nama','lokasi','tanggal','deskripsi','tipe','ditemukan'];
}
