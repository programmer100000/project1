<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table = 'gnet_devices';
    protected $primarykey = 'gnet_device_id';
    public $timestamps = false;
}
