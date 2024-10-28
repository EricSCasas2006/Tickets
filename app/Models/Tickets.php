<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'img', 'tipo_solicitud', 'equipo', 'user_id'];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
