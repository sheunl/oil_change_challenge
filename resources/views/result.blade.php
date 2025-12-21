@include('parts.header', ['title' => 'Oil Change Result'])
<h3 class="text-2xl mx-auto my-5 text-center">Oil Change Result</h3>
@if ($result->needs_oil_change)
    <div class="container mx-auto md:w-1/2 lg:w-1/3">
        <div class="alert-danger mb-5">
            <p>Your vehicle needs an oil change.</p>
        </div>
    </div>
@else
    <div class="container mx-auto md:w-1/2 lg:w-1/3">
        <div class="alert-info mb-5">
            <p>Your vehicle does not need an oil change at this time.</p>
        </div>
    </div>
@endif

<div id="oil-change-div" class="container mx-auto mt-5 p-4 border rounded md:w-1/2 lg:w-1/3">
    <div class="flex justify-center flex-col gap-4">
        <ul class="mb-0 list-disc list-inside">
            <li><i>Calculation ID:</i>  {{ $result->calculation_id }}</li>
            <li><i>Current Odometer:</i> {{ $result->current_odometer }} km</li>
            <li><i>Date of Previous Oil Change:</i> {{ $result->previous_oil_change_date->format('jS M Y') }}</li>
            <li><i>Odometer at Previous Oil Change:</i> {{ $result->previous_oil_change_odometer }} km</li>
        </ul>
        <a href="{{ route('oil-change.index') }}" class="text-center"><button class="btn btn-gray cursor-pointer">Back to Calculator</button></a>
    </div>

</div>
@include('parts.footer')
