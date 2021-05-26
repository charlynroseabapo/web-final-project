<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $table = 'totals';
    protected $primaryKey ='id';
    protected $fillable = ['sub_total', 'overall_total', 'date'];//
}
