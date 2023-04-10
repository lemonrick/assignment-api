<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $fillable = [
        'seatRowsCount',
        'seatColumnsCount'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
