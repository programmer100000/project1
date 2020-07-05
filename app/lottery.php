<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lottery extends Model
{
    protected $table = 'lotteries';
    protected $primaryKey = 'lottery_id';
}
