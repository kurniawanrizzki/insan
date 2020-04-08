<div class="card">
    <div class="card-body">
        <!-- NIP Input -->
        <div class="form-group row">
            <label for="nip_input" class="col-md-4 col-form-label">{{ __("nip_title") }}</label>
            <div class="col-md-8">
                <input id="nip_input" name="nip_input" type="text" class="form-control" required>
            </div>
        </div>

        <!-- Name Input -->
        <div class="form-group row">
            <label for="name_input" class="col-md-4 col-form-label">{{ __("name_title") }}</label>
            <div class="col-md-8">
                <input id="name_input" name="name_input" type="text" class="form-control" required>
            </div>
        </div>

        <!-- Birth Place Input -->
        <div class="form-group row">
            <label for="birth_place_input" class="col-md-4 col-form-label">{{ __("birth_place_title") }}</label>
            <div class="col-md-8">
                <input id="birth_place_input" name="birth_place_input" type="text" class="form-control" required>
            </div>
        </div>

        <!-- Birth Date Input -->
        <div class="form-group row">
            <label for="birth_date_input" class="col-md-4 col-form-label">{{ __("birth_date_title") }}</label>
            <div class="col-md-3">
                <input id="birth_date_input" name="birth_date_input" type="text" class="form-control date" required>
            </div>
        </div>

        <!-- Gender Input -->
        <div class="form-group row align-items-center">
            <label for="gender_input" class="col-md-4 col-form-label">{{ __("gender_title") }}</label>
            <div class="col-md-3" id="gender_input">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="gender_option_m_input" name="gender_option_input" value="M" checked="checked">
                    <label class="custom-control-label" for="gender_option_m_input">{{ __("gender_men_title") }}</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="gender_option_f_input" name="gender_option_input" value="F">
                    <label class="custom-control-label" for="gender_option_f_input">{{ __("gender_women_title") }}</label>
                </div>
            </div>
        </div>

        <!-- Domicile Category Input -->
        <div class="form-group row align-items-center">
            <label for="domicile_category_input" class="col-md-4 col-form-label">{{ __("domicile_category_title") }}</label>
            <div class="col-md-3" id="domicile_category_input">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="resident_option_r_input" name="resident_option_input" checked="checked">
                    <label class="custom-control-label" for="resident_option_r_input">{{ __("domicile_resident_title") }}</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="resident_option_nr_input" name="resident_option_input">
                    <label class="custom-control-label" for="resident_option_nr_input">{{ __("domicile_non_resident_title") }}</label>
                </div>
            </div>
        </div>

        <!-- Formal Education Input -->
        <div class="form-group row align-items-center">
            <label for="formal_education_input" class="col-md-4 col-form-label">{{ __("education_title", ["type" => "Formal"]) }}</label>
            <div class="col-md-8" id="formal_education_input">

                <div class="custom-control custom-radio custom-control-inline col-md-3">
                    <input type="radio" class="custom-control-input" id="0f_education_input" name="f_education_option_input" checked>
                    <label class="custom-control-label" for="0f_education_input">{{ __("empty_title") }}</label>
                </div>

                @foreach($education["formal"] as $data)

                <div class="custom-control custom-radio custom-control-inline col-md-3">
                    <input type="radio" class="custom-control-input" id="{{ $data->id }}f_education_input" name="f_education_option_input">
                    <label class="custom-control-label" for="{{ $data->id }}f_education_input">{{ $data->name }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Non Formal Education Input -->
        <div class="form-group row align-items-center">
            <label for="non_formal_education_input" class="col-md-4 col-form-label">{{ __("education_title", ["type" => "Non Formal"]) }}</label>
            <div class="col-md-8" id="non_formal_education_input">
                
                <div class="custom-control custom-radio custom-control-inline col-md-4">
                    <input type="radio" class="custom-control-input" id="0nf_education_input" name="nf_education_option_input" checked>
                    <label class="custom-control-label" for="0nf_education_input">{{ __("empty_title") }}</label>
                </div>

                @foreach($education["informal"] as $data)

                <div class="custom-control custom-radio custom-control-inline col-md-4">
                    <input type="radio" class="custom-control-input" id="{{ $data->id }}nf_education_input" name="nf_education_option_input">
                    <label class="custom-control-label" for="{{ $data->id }}nf_education_input">{{ $data->name }}</label>
                </div>

                @endforeach

            </div>
        </div>

        <!-- Next Button -->
        <button class="btn btn-primary next-stepper-button">{{ __("next_title") }}</button>
    </div>
</div>