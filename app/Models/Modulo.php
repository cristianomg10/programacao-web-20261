<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Modulo extends Model
{
    use HasFactory;

    function usuarios() {
        return $this->belongsToMany(User::class);
    }
}
