<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['name', 'email', 'contact', 'package_id'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}