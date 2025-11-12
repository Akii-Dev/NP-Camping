<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // fillable fields
    protected $fillable = [
        'user_id',
        'title',
        'initials',
        'intersertion',
        'surname',
        'street',
        'house_number',
        'house_number_addition',
        'postal_code',
        'city',
        'country',
        'phone_number',
    ];
}
