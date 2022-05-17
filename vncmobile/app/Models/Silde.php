<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silde extends Model
{
    use HasFactory;
    protected $fillabel = [
        'name',
        'url',
        'thumb',
        'sort_by',
        'active'

    ];
}
