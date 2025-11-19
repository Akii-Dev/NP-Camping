<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    protected $fillable = [
        'customer_id',
        'number_of_people',
        'accommodation',
        'has_dog',
        'extra_tents',
    ];
}
