<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey ='id';
    protected $fillable = ['total_payment', 'date'];//
}
