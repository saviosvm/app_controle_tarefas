<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'data_limite_conclusao', 'user_id'];

    public function user(){ // metodo no singular é pq varias tarefa pertence a somente 1 usuarios
        return $this->belongsTo('App\Models\User');
    }
}
