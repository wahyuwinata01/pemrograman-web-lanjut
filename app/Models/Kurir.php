<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    use HasFactory;
    protected $table = "kurir";

    public function user(){
        return $this->belongsTo(User::Class,"id_user");
    }
}
