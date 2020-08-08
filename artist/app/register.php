<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table='register';
    protected $fillable=['usn','email','pass'];
    protected $PrimaryKey='rid';
}
