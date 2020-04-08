<div class="card">
    <div class="card-body">
        <!-- NKK Input -->
        <div class="form-group row">
            <label for="nkk_input" class="col-md-4 col-form-label">{{ __("nkk_title") }}</label>
            <div class="col-md-8">
                <input id="nkk_input" name="nkk_input" type="text" class="form-control">
            </div>
        </div>

        <!-- KPS Input -->
        <div class="form-group row">
            <label for="kps_input" class="col-md-4 col-form-label">{{ __("kps_title") }}</label>
            <div class="col-md-8">
                <input id="kps_input" name="kps_input" type="text" class="form-control">
            </div>
        </div>

        <!-- Father Identity Input -->
        <div class="form-group card">
            <div class="card-header">{{ __("parental_identity_title", ["parent" => "Ayah"]) }}</div>
            <div class="card-body">
                @include("regis.steps.ext.parental_identity", ["id" => "f", "label" => "Ayah"])
            </div>
        </div>

        <!-- Mother Identity Input -->
        <div class="form-group card">
            <div class="card-header">{{ __("parental_identity_title", ["parent" => "Ibu"]) }}</div>
            <div class="card-body">
                @include("regis.steps.ext.parental_identity", ["id" => "m", "label" => "Ibu"])
            </div>
        </div>

        <!-- Income Average Input -->
        <div class="form-group row align-items-center">
            <label for="income_average_input" class="col-md-4 col-form-label">{{ __("income_average_title") }}</label>
            <div class="col-md-8" id="income_average_input">

                @foreach(json_decode($sources["incoming"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_income_average_input" name="opt_income_average_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_income_average_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>        

        <!-- Number of Siblings Input -->
        <div class="form-group row">
            <label for="number_of_siblings_input" class="col-md-4 col-form-label">{{ __("number_of_siblings_title") }}</label>
            <div class="col-md-2">
                <input id="number_of_siblings_input" name="number_of_siblings_input" type="text" class="form-control">
            </div>
        </div>

        <!-- Previous Button -->
        <button class="btn btn-primary previous-stepper-button">{{ __("previous_title") }}</button>

        <!-- Next Button -->
        <button class="btn btn-primary next-stepper-button">{{ __("next_title") }}</button>
    </div>
</div>