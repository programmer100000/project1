<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanTransaction extends Model
{
    protected $table = 'plans_transaction';
    protected $primaryKey = 'plan_transaction_id';
}
