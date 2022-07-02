<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    // untuk get data menggunakan variabel $table dengan value nama table
    protected $table = 'pegawai';

    // untuk memfilter kolom mana yang akan diinput menggunakan variabe; $fillable dengan value colom yang akan diinput
    protected $fillable = ['nama','alamat'];
}
