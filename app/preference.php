<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preference extends Model
{
    public $timestamps=false;
    protected $primarykey="IDPROFILES";
	protected $fillable=array('IDGENRE');
}
