<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OilChangeController extends Controller
{
    function index() {
        return view('oil-change');
    }

    function calculate(Request $request) {
        // Calculation logic here
        // dd($request->all());
        $validated = $request->validate([
        'current_odometer' => 'required|integer|min:0',
        'previous_oil_change_date' => 'required|date|before_or_equal:today',
        'previous_oil_change_odometer' => [
            'required',
            'integer',
            'min:0',
            'lte:current_odometer' // Must be less than or equal to current current_odometer
        ],
        ], [
            'previous_oil_change_odometer.lte' => 'Previous odometer reading must be less than or equal to current odometer.',
            'previous_oil_change_date.before_or_equal' => 'Previous oil change date cannot be in the future.',
        ]);

        dd($validated);
    }   
}
