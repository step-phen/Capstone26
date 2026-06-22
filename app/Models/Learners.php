<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learners extends Model
{
    protected $fillable = [
        'name',
        'age',
        'gender'
    ];
}
