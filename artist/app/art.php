<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class art extends Model
{
    protected $table='art';
    protected $fillable=['images','artname','type','description','price'];
    protected $PrimaryKey='aid';

}
