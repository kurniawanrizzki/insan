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
    <div class="col-md-8" id="{{ $id }}_parent_education_input">

        <div class="custom-control custom-radio custom-control-inline col-md-3">
            <input type="radio" class="custom-control-input" id="0{{ $id }}_opt_parent_education_input" name="{{ $id }}_opt_parent_education_input" checked>
            <label class="custom-control-label" for="0{{ $id }}_opt_parent_education_input">{{ __("empty_title") }}</label>
        </div>

        @foreach(json_decode($sources["strata"]) as $index => $data)

        <div class="custom-control custom-radio custom-control-inline col-md-3">
            <input type="radio" class="custom-control-input" id="{{ $index + 1 }}{{ $id }}_opt_parent_education_input" name="{{ $id }}_opt_parent_education_input">
            <label class="custom-control-label" for="{{ $index + 1 }}{{ $id }}_opt_parent_education_input">{{ $data }}</label>
        </div>

        @endforeach

    </div>
</div>

<!-- Parent Job Input -->
<div class="form-group row">
    <label for="{{ $id }}_parent_job_input" class="col-md-4 col-form-label">{{ __("parent_job_title", ["parent"=> $label]) }}</label>
    <div class="col-md-8">
        <input id="{{ $id }}_parent_job_input" name="{{ $id }}_parent_job_input" type="text" class="form-control">
    </div>
</div>

