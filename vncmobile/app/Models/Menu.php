<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'parent_id',
        'content', 
        'active'

    ];
    function sub_Menu(){
        return $this->hasMany('App\Menu','id');

    }
}
