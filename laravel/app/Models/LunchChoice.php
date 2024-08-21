<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunchChoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'lunch_request_id',
        'user_id',
        'meal_id',
        'request_time',
        'request_date',
        'quantity',
    ];

    public function lunchRequest()
    {
        return $this->belongsTo(LunchRequest::class, 'lunch_request_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class,'meal_id');
    }
}
