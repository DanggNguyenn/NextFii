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
    ];

    public function lunchChoice()
    {
        return $this->belongsTo(LunchChoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
