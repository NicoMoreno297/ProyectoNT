<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public $timestamps=false;
	protected $primarykey="IDGENRE";
	protected $fillable=array('NOMBRE');
}