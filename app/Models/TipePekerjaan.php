<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TipePekerjaan extends Model
{
    use HasFactory;

    protected $table = 'tipe_pekerjaan';
    protected $primaryKey = ['id_pekerjaan', 'id_perusahaan', 'tipe'];
    public $incrementing = false;
    protected $fillable = [
        'id_perusahaan',
        'id_pekerjaan',
        'tipe',
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
