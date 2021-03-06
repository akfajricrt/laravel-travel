<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 'food',
        'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [
        // 
    ];

    public function galleries(){
        return $this->hasMany(Gallery::class,'packages_travel_id','id');
    }
}
