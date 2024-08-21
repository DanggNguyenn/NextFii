<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunchRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'admin_id',
        'restaurant_id',
        'request_time',
        'request_date',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lunchchoices()
    {
        return $this->hasMany(LunchChoice::class);
    }
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
