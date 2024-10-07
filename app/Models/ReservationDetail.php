<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    public function reservation()
    {
        return $this->belongsTo('App\Models\Reservation');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }
}
