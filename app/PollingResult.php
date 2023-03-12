<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingResult extends Model
{
    protected $table = 'announced_pu_results';
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $primaryKey = 'resultid';
}
