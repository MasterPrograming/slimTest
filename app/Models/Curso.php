<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // En caso de no quere usar convenciones tendrias que utilizar el siguente atributo
    // protected $table = "cursos";
    // atributo fillable, especifica que campos pueden asignarse en una asignacion masiva
    protected $fillable = ["name", "description", "categoria"];
    //atribullo guarded = Especifica que campos se deben ignorar al momento de hacer una asignacion masiva
    protected $guarded = ['status'];
}
