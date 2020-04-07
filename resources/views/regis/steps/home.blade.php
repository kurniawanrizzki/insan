<div class="card">
    <div class="card-body">
        <!-- Address Input -->
        <div class="form-group row">
            <label for="address_input" class="col-md-4 col-form-label">{{ __("address_title") }}</label>
            <div class="col-md-8">
                <textarea id="address_input" name="address_input" class="form-control"></textarea>
            </div>
        </div>

        <!-- Province Input -->
        <div class="form-group row">
            <label for="province_input" class="col-md-4 col-form-label">{{ __("province_title") }}</label>
            <div class="col-md-8">
                <input id="province_input" name="province_input" type="text" class="form-control">
            </div>
        </div>

        <!-- Regency Input -->
        <div class="form-group row">
            <label for="regency_input" class="col-md-4 col-form-label">{{ __("regency_title") }}</label>
            <div class="col-md-8">
                <input id="regency_input" name="regency_input" type="text" class="form-control">
            </div>
        </div>

        <!-- District Input -->
        <div class="form-group row">
            <label for="district_input" class="col-md-4 col-form-label">{{ __("district_title") }}</label>
            <div class="col-md-8">
                <input id="district_input" name="district_input" type="text" class="form-control">
            </div>
        </div>

         <!-- Sub-District Input -->
         <div class="form-group row">
            <label for="sub_district_input" class="col-md-4 col-form-label">{{ __("sub_district_title") }}</label>
            <div class="col-md-8">
                <input id="sub_district_input" name="sub_district_input" type="text" class="form-control">
            </div>
        </div> 
        
        <!-- Phone Input -->
        <div class="form-group row">
            <label for="phone_input" class="col-md-4 col-form-label">{{ __("phone_title") }}</label>
            <div class="col-md-8">
                <input id="phone_input" name="phone_input" type="text" class="form-control">
            </div>
        </div>  
    
        <!-- Zipcode Input -->
        <div class="form-group row">
            <label for="zipcode_input" class="col-md-4 col-form-label">{{ __("zipcode_title") }}</label>
            <div class="col-md-8">
                <input id="zipcode_input" name="zipcode_input" type="text" class="form-control">
            </div>
        </div>   

        <!-- Previous Button -->
        <button class="btn btn-primary previous-stepper-button">{{ __("previous_title") }}</button>

        <!-- Next Button -->
        <button class="btn btn-primary next-stepper-button">{{ __("next_title") }}</button>
    </div>
</div>