<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
protected $fillable=['user_id','foto_payment', 'kode_tes'];

public function users(){
return $this->belongsTo(User::class);
}
}
