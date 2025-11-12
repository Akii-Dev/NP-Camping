<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;
    // admin belongs to 1 user. 1 user can have 1 admin. no more no less
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
