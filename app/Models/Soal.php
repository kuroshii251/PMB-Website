<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{

protected $fillable=['user_id','pertanyaan', 'jawaban', 'opsi_a', 'opsi_b','opsi_c', 'opsi_d'];

public function users() {

return $this->belongsToMany(User::class, 'user_soals')->withPivot('jawaban', 'nilai')->withTimestamps();

}

}

