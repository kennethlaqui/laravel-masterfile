<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'common.s_empl_mst';
    protected $primaryKey = 'empl_cde';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];


}



