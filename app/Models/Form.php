<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
protected $fillable = ['user_id', 'nama', 'email', 'jurusan', 'jenis_kelamin', 'agama', 'tempat_lahir', 'tanggal_lahir', 'foto_pas', 'nisn', 'asal_sekolah', 'nomor_telepon', 'nik'];

public function user()
{
    return $this->belongsTo(User::class);
}

public function payments()
{
    return $this->hasManyThrough(Payment::class, User::class);
}
}
