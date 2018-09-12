<?php

namespace devuelving\core;

use Illuminate\Database\Eloquent\Model;

class CallAppointmentModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'call_appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'type', 'date', 'time', 'notes', 'franchise',
    ];
}