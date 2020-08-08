<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
	protected $table='recipe';
    protected $fillable=['images','nameor','type','ingredients','preparation'];
    protected $PrimaryKey='rid';

}