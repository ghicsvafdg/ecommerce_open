<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';
    
    protected $fillable = ['code',  'product_id','times_use', 'value'];
}
