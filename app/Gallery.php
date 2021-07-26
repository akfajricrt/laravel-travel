<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'packages_travel_id', 'image'
    ];

    protected $hidden = [
        // 
    ];


    public function travel_package()
    {
        return $this->BelongsTo(TravelPackage::class,'packages_travel_id','id');

    }
}
