<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'willing_to_work',
        'languages'
    ];

    static function getGenders(): array
    {
        return [
            'male',
            'female'
        ];
    }

    static function getLanguages()
    {
        return [
            'english',
            'hindi',
        ];
    }
}
