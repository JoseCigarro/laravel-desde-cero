<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //use HasFactory;

    // Podemos desabilitar a proteção padrão da aplicação sempre que não utilizamos o método (request()->all()) para guardar campos de um formulário.
    protected $guarded = [];

    //Use this functions instead of the same one in the Class Illuminate\Database\Eloquent\Model
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
