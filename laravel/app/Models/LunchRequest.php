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

    public function lunchRequest()
    {
        return $this->belongsTo(LunchRequest::class);
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
