<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'appointment_id',
        'name',
        'email',
        'phone',
        'start_time',
        'end_time',
        'ondate',
    ];

    public function book()
    {
        return $this->hasOne('App\Models\Booking','id','appointment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class); // This will link to the 'user_id'
    }
}
