<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pekerjaan';
    
    protected $fillable = [
        'id_perusahaan',
        'nama',
        'rentang_gaji_awal',
        'rentang_gaji_akhir',
        'tanggal_mulai',
        'tanggal_akhir',
    ];

    // Relationship with the User model (Perusahaan)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_perusahaan');
    }

    // Relationship with TipePekerjaan
    public function tipePekerjaan()
    {
        return $this->hasMany(TipePekerjaan::class, 'id_pekerjaan');
    }

    // Relationship with KategoriPekerjaan
    public function kategoriPekerjaan()
    {
        return $this->hasMany(KategoriPekerjaan::class, 'id_pekerjaan');
    }

    // Relationship with DeskripsiTambahanPekerjaan
    public function deskripsiTambahanPekerjaan()
    {
        return $this->hasOne(DeskripsiTambahanPekerjaan::class, 'id_pekerjaan');
    }
}
