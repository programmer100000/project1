<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'gnet_games';
    protected $primaryKey = 'gnet_game_id';
}
