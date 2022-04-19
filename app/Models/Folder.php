<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'cgm',
        'name',
        'birth_date',
        'label',
        'box',
        'shelf',
        'door',
        'description'
    ];

}
