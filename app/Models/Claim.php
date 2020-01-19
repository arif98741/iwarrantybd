<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'name', 'phone_name', 'model', 'imei', 'details', 'problem_pattern', 'subscriber_id'
    ];

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}