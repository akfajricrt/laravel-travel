<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'packages_travel_id', 'users_id','additional_visa',
        'transaction_total','transaction_status'
    
    ];

    protected $hidden = [
        // 
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class,'transactions_id','id');

    }

    public function travel_package()
    {
        return $this->BelongsTo(TravelPackage::class,'packages_travel_id','id');

    }
    public function user()
    {
        return $this->BelongsTo(User::class,'users_id','id');

    }
    
}
