<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamenet extends Model
{
    protected $table = 'gamenets';
    protected $primarykey = 'gamenet_id';
    public $timestamps = false;
}
