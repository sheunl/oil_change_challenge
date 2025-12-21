<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilChange extends Model
{
    protected $fillable = [
        'calculation_id',
        'current_odometer',
        'previous_oil_change_date',
        'previous_oil_change_odometer',
        'needs_oil_change',
    ];

    protected $casts = [
        'needs_oil_change' => 'boolean',
        'previous_oil_change_date' => 'date',
    ];
}
