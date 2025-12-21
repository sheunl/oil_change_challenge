@include('parts.header', ['title' => 'Oil Change Calculator'])
<h3 class="text-2xl mx-auto my-5 text-center">Oil Change Calculator</h3>
@if ($errors->any())
    <div class="container mx-auto md:w-1/2 lg:w-1/3">
        <div class="alert-danger mb-5">
            <ul class="mb-0 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<div id="oil-change-div" class="container mx-auto mt-5 p-4 border rounded md:w-1/2 lg:w-1/3">
    <form action="{{ route('oil-change.calculate') }}" method="POST">
        @csrf
        <span class="flex flex-col space-y-5">
            <label class="form-label mb-0" for="current_odometer">Current Odometer:</label>
            <input class="form-control outline" type="number" id="current_odometer" name="current_odometer" required>
            
            <label class="form-label mb-0" for="previous_oil_change_date">Date of Previous Oil Change:</label>
            <input class="form-control outline" type="date" id="previous_oil_change_date" name="previous_oil_change_date" required>

            <label class="form-label mb-0" for="previous_oil_change_odometer">Odometer at Previous Oil Change:</label>
            <input class="form-control outline" type="number" id="previous_oil_change_odometer" name="previous_oil_change_odometer" required>
            
            <button class="btn btn-gray cursor-pointer" type="submit">Submit</button>
        </span>
    </form>
</div>
@include('parts.footer')
