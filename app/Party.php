<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $table = 'party';
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $primaryKey = 'id';
}
