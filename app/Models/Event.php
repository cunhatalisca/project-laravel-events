<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class); // ou seja, o evento pertence a um usuário
    }
}
