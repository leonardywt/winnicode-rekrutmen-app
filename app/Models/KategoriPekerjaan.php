<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPekerjaan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'kategori_pekerjaan';
    protected $fillable = [
        'id_perusahaan',
        'id_pekerjaan',
        'kategori',
    ];

    // Relationship with the Pekerjaan model
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan');
    }

    // Relationship with the User model (Perusahaan)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_perusahaan');
    }
}
