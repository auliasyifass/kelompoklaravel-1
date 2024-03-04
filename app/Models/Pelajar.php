<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    use HasFactory;

    protected $table = 'pelajar'; // Perbarui nama tabel ke 'pelajar'
    
    protected $fillable = ['no', 'nis', 'nama', 'no_hp', 'alamat']; // Atau gunakan $guarded jika perlu
}
