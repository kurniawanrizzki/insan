<div class="card">
    <div class="card-body">
        <!-- Home Area Input -->
        <div class="form-group row">
            <label for="area_input" class="col-md-4 col-form-label">{{ __("area_title") }}</label>
            <div class="col-md-2">
                <input id="area_input" name="area_input" type="text" class="form-control">
            </div>
        </div>

        <!-- Home Ownership Input -->
        <div class="form-group row align-items-center">
            <label for="home_ownership_input" class="col-md-4 col-form-label">{{ __("home_ownership_title") }}</label>
            <div class="col-md-8" id="home_ownership_input">

                @foreach(json_decode($sources["ownership"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_home_ownership_input" name="opt_home_ownership_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_home_ownership_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Home Floor Condition Input -->
        <div class="form-group row align-items-center">
            <label for="home_floor_condition_input" class="col-md-4 col-form-label">{{ __("home_floor_condition_title") }}</label>
            <div class="col-md-8" id="home_floor_condition_input">

                @foreach(json_decode($sources["floor"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_home_floor_condition_input" name="opt_home_floor_condition_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_home_floor_condition_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Home Wall Condition Input -->
        <div class="form-group row align-items-center">
            <label for="home_wall_condition_input" class="col-md-4 col-form-label">{{ __("home_wall_condition_title") }}</label>
            <div class="col-md-8" id="home_wall_condition_input">

                @foreach(json_decode($sources["wall"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_home_wall_condition_input" name="opt_home_wall_condition_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_home_wall_condition_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Home Electricity Source Input -->
        <div class="form-group row align-items-center">
            <label for="home_electricity_src_input" class="col-md-4 col-form-label">{{ __("home_electricity_src_title") }}</label>
            <div class="col-md-8" id="home_electricity_src_input">

                @foreach(json_decode($sources["electricity"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_home_electricity_src_input" name="opt_home_electricity_src_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_home_electricity_src_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>
        
        <!-- Home Water Source Input -->
        <div class="form-group row align-items-center">
            <label for="home_water_src_input" class="col-md-4 col-form-label">{{ __("home_water_src_title") }}</label>
            <div class="col-md-8" id="home_water_src_input">

                @foreach(json_decode($sources["water"]) as $index => $data)

                <div class="custom-control custom-radio custom-control-inline col-md-5">
                    <input type="radio" class="custom-control-input" id="{{ $index }}_opt_home_water_src_input" name="opt_home_water_src_input" @if($index === 0) {{ "checked" }} @endif>
                    <label class="custom-control-label" for="{{ $index }}_opt_home_water_src_input">{{ $data }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Previous Button -->
        <button class="btn btn-primary previous-stepper-button">{{ __("previous_title") }}</button>

        <!-- Finish Button -->
        <button class="btn btn-primary">{{ __("finish_title") }}</button>
    </div>
</div>