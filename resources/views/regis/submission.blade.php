@extends("layouts.app")

@section("content")
<div class="container">
  <div class="card">
    <div class="card-header">{{ __("santri_registration_title") }}</div>
    <div class="card-body">
      <div id="stepper-form" class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
          <!-- stepper here -->
          <div class="step" data-target="#student-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="student-part" id="student-part-trigger">
              <span class="bs-stepper-circle">1</span>
              <span class="bs-stepper-label">{{ __("santri_data_title") }}</span>
            </button>
          </div>
          <div class="bs-stepper-line"></div>
          <div class="step" data-target="#parental-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="parental-part" id="parental-part-trigger">
              <span class="bs-stepper-circle">2</span>
              <span class="bs-stepper-label">{{ __("parental_data_title") }}</span>
            </button>
          </div>
          <div class="bs-stepper-line"></div>
          <div class="step" data-target="#home-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="home-part" id="home-part-trigger">
              <span class="bs-stepper-circle">3</span>
              <span class="bs-stepper-label">{{ __("home_data_title") }}</span>
            </button>
          </div>
          <div class="bs-stepper-line"></div>
          <div class="step" data-target="#home-condition-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="home-condition-part" id="home-condition-part-trigger">
              <span class="bs-stepper-circle">4</span>
              <span class="bs-stepper-label">{{ __("home_condition_data_title") }}</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form class="needs-validation" onsubmit="return false" novalidate>
            <div id="student-part" class="content fade" role="tabpanel" aria-labelledby="student-part-trigger">
              @include("regis.steps.student")
            </div>
            <div id="parental-part" class="content fade" role="tabpanel" aria-labelledby="parental-part-trigger">
              @include("regis.steps.parental")
            </div>
            <div id="home-part" class="content fade" role="tabpanel" aria-labelledby="home-part-trigger">
              @include("regis.steps.home")
            </div>
            <div id="home-condition-part" class="content fade" role="tabpanel" aria-labelledby="home-condition-part-trigger">
              @include("regis.steps.home_condition")
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
