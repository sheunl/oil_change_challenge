<?php

namespace App\Http\Controllers;

use App\Models\OilChange;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OilChangeController extends Controller
{
    public function index()
    {
        return view('oil-change');
    }

    public function check(Request $request)
    {

        $validated = $request->validate([
            'current_odometer' => 'required|integer|min:0',
            'previous_oil_change_date' => 'required|date|before_or_equal:today',
            'previous_oil_change_odometer' => [
                'required',
                'integer',
                'min:0',
                'lte:current_odometer', // Must be less than or equal to current current_odometer
            ],
        ], [
            'previous_oil_change_odometer.lte' => 'Previous odometer reading must be less than or equal to current odometer.',
            'previous_oil_change_date.before_or_equal' => 'Previous oil change date cannot be in the future.',
        ]);

        $needsOilChange = ($validated['current_odometer'] - $validated['previous_oil_change_odometer']) > 5000 ||
                         (abs(now()->diffInMonths(Carbon::parse($validated['previous_oil_change_date']))) > 6);

        $oilChangeResult = OilChange::create([
            'calculation_id' => Str::uuid(),
            'current_odometer' => $validated['current_odometer'],
            'previous_oil_change_date' => $validated['previous_oil_change_date'],
            'previous_oil_change_odometer' => $validated['previous_oil_change_odometer'],
            'needs_oil_change' => $needsOilChange,
        ]);

        return redirect()->route('oil-change.result', ['id' => $oilChangeResult->calculation_id]);

    }

    public function result($id)
    {
        $result = OilChange::where('calculation_id', $id)->firstOrFail();

        // dd($result);
        return view('result', ['result' => $result]);
    }
}
