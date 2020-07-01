<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livelog extends Model
{
    protected $table = 'gnet_live_logs';
    protected $primaryKey = 'gnet_live_log_id';
}
