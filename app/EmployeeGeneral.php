<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeGeneral extends Model
{
    protected $table = 'pims.l_emplgenr';
    protected $primaryKey = 'empl_cde';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];
}
