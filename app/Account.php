<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Account extends Model
{

    protected $fillable = ['name'];

    use Billable;


    function Users(){
        return $this->hasMany(User::class );
    }

}
