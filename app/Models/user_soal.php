<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_soal extends Model
{
protected $fillable=['user_id', 'soal_id', 'jawaban', 'nilai'];

public function users(){
return $this->belongsTo(User::class);
}
}
