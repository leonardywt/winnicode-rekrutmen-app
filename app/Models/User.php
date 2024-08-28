<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'usertype',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'id_perusahaan');
    }

    // Relationship with TipePekerjaan
    public function tipePekerjaan()
    {
        return $this->hasMany(TipePekerjaan::class, 'id_perusahaan');
    }

    // Relationship with KategoriPekerjaan
    public function kategoriPekerjaan()
    {
        return $this->hasMany(KategoriPekerjaan::class, 'id_perusahaan');
    }

    // Relationship with DeskripsiTambahanPekerjaan
    public function deskripsiTambahanPekerjaan()
    {
        return $this->hasMany(DeskripsiTambahanPekerjaan::class, 'id_perusahaan');
    }
}
