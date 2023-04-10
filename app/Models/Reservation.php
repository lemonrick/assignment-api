<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {

    protected $fillable = [
        'event_id',
        'name',
        'surname',
        'email',
        'phone',
        'occupied'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
