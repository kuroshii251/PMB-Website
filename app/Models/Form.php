<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
protected $fillable=['nama','email' ,'jurusan','jenis_kelamin','agama','tempat_lahir', 'tanggal_lahir', 'foto_pas', 'nisn','asal_sekolah', 'nomor_telepon', 'nik'];

public function users(){
return $this->belongsTo(User::class);
}
}
