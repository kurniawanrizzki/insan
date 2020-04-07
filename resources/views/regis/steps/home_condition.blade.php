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
            <!-- TODO Listing Ownership From Config -->
        </div>

        <!-- Home Floor Condition Input -->
        <div class="form-group row align-items-center">
            <label for="home_floor_condition_input" class="col-md-4 col-form-label">{{ __("home_floor_condition_title") }}</label>
            <!-- TODO Listing Floor Condition From Config -->
        </div>

        <!-- Home Wall Condition Input -->
        <div class="form-group row align-items-center">
            <label for="home_wall_condition_input" class="col-md-4 col-form-label">{{ __("home_wall_condition_title") }}</label>
            <!-- TODO Listing Home Wall Condition From Config -->
        </div>

        <!-- Home Electricity Source Input -->
        <div class="form-group row align-items-center">
            <label for="home_electricity_src_input" class="col-md-4 col-form-label">{{ __("home_electricity_src_title") }}</label>
            <!-- TODO Listing Electricity Source From Config -->
        </div>
        
        <!-- Home Water Source Input -->
        <div class="form-group row align-items-center">
            <label for="home_water_src_input" class="col-md-4 col-form-label">{{ __("home_water_src_title") }}</label>
            <!-- TODO Listing Water Source From Config -->
        </div>

        <!-- Previous Button -->
        <button class="btn btn-primary previous-stepper-button">{{ __("previous_title") }}</button>

        <!-- Finish Button -->
        <button class="btn btn-primary">{{ __("finish_title") }}</button>
    </div>
</div>