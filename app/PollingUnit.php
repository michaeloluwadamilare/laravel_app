<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    protected $table = 'polling_unit';
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $primaryKey = 'uniqueid';
}
