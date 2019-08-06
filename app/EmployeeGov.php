<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeGov extends Model
{
    protected $table = 'pims.l_emplgovn';
    protected $primaryKey = 'empl_cde';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];
}
