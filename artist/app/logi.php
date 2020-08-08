<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logi extends Model
{
   protected $table='logi';
    protected $fillable=['usn','pass'];
    protected $PrimaryKey='lid';
}
