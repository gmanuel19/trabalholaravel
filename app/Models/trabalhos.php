<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabalhos extends Model
{
    protected $table = 'trabalhos';
    protected $fillable = ['servico', 'cliente', 'prazo', 'valor', 'id_usuario'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }
}
