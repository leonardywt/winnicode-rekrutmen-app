<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeskripsiTambahanPekerjaan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'deskripsi_tambahan_pekerjaan';
    protected $primaryKey = ['id_pekerjaan', 'id_perusahaan'];
    public $incrementing = false;
    protected $fillable = [
        'id_perusahaan',
        'id_pekerjaan',
        'deskripsi',
        'responsibilities',
        'whoyouare',
        'nicetohaves',
        'benefits',
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

