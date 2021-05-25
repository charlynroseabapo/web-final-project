<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';
    protected $primaryKey ='id';
    protected $fillable = ['budget_amount', 'items', 'price_amount'];
}
