<!-- Parent Name Input -->
<div class="form-group row">
    <label for="{{ $id }}_parent_name_input" class="col-md-4 col-form-label">{{ __("parent_name_title", ["parent"=> $label]) }}</label>
    <div class="col-md-8">
        <input id="{{ $id }}_parent_name_input" name="{{ $id }}_parent_name_input" type="text" class="form-control">
    </div>
</div>

<!-- Parent NIK Input -->
<div class="form-group row">
    <label for="{{ $id }}_parent_nik_input" class="col-md-4 col-form-label">{{ __("parent_nik_title", ["parent"=> $label]) }}</label>
    <div class="col-md-8">
        <input id="{{ $id }}_parent_nik_input" name="{{ $id }}_parent_nik_input" type="text" class="form-control">
    </div>
</div>

<!-- Parent Education Input -->
<div class="form-group row align-items-center">
    <label for="{{ $id }}_parent_education_input" class="col-md-4 col-form-label">{{ __("parent_education_title", ["parent"=> $label]) }}</label>
    <!-- TODO Listing Parent Education From Config -->
</div>

<!-- Parent Job Input -->
<div class="form-group row">
    <label for="{{ $id }}_parent_job_input" class="col-md-4 col-form-label">{{ __("parent_job_title", ["parent"=> $label]) }}</label>
    <div class="col-md-8">
        <input id="{{ $id }}_parent_job_input" name="{{ $id }}_parent_job_input" type="text" class="form-control">
    </div>
</div>

