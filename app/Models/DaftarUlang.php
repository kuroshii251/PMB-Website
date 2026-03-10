<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarUlang extends Model
{
protected $fillable =['user_id','nama','jurusan','bukti_kelulusan', 'ijazah', 'ktp', 'kartu_keluarga', 'akte_kelahiran', 'nim'];

public function user(){
return $this->belongsTo(User::class);
}

}
