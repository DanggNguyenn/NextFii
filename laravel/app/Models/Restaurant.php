<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "phone",
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function lunchRequests()
    {
        return $this->hasMany(LunchRequest::class);
    }
}
