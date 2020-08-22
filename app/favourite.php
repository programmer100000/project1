<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    protected $table = 'gnet_favourites';
    protected $primaryKey = 'gnet_favourite_id';
}
