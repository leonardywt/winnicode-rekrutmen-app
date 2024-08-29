<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KategoriPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'kategori_pekerjaan';
    protected $primaryKey = ['id_pekerjaan', 'id_perusahaan', 'kategori'];
    public $incrementing = false;
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
