<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
 
    public $table = 'pizza';

    protected $fillable = ['name','type','base'];
}
