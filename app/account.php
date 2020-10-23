<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table='accounts';
    protected $fillable = [
        'acct_name','init_invest','start_date','remarks', 'created_at', 'updated_at','user_id'
    ];
}
