<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Pesanan extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail', 'pesanan_id', 'id');
    }
}
