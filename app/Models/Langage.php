<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langage extends Model
{
    use HasFactory;
    protected $fillable = [
        'langage',
        'langage2',
    ];
}
