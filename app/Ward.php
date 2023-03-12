<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'ward';
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $primaryKey = 'uniqueid';
}
