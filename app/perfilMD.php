<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    public $timestamps=false;
	protected $table="perfiles";
	protected $primarykey="IDPERFILES";
	protected $fillable=array('NOMBRE','EDAD','ACTUAL');
}
