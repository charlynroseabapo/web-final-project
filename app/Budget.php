<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';
    protected $primaryKey ='id';
    protected $fillable = ['quantity', 'items', 'price_amount','sub_total'];
    public function setTotalAttribute()
    {
        $this->attributes['sub_total'] = $this->quantity * $this->price_amount; 
    }

    public function getTotalAttribute($value)
    {
        return $value;
    }
    
}
