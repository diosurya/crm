<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id'
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
