<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; // se a tabela for diferente do padrão 'students' altere este valor

    protected $fillable = [ // campos que podem ser preenchidos em massa
        'name',
        'email',
        'batch',
    ];

    public function getStudent()
    {
        return Student::all()->where('batch', '>', 1);
    }
}