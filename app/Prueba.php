<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Prueba extends Model
{
	protected $primaryKey = 'Id';

    protected $table = 'cap_usuario';
    public $timestamps = false;
}
