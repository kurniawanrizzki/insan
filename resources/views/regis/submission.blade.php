@extends("layouts.app")

@section("content")
<div class="container">
  <div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
      <div class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
          <!-- stepper here -->
          <div class="step" data-target="#student-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="student-part" id="student-part-trigger">
              <span class="bs-stepper-circle">1</span>
              <span class="bs-stepper-label">Data Santri</span>
            </button>
          </div>
          <div class="bs-stepper-line"></div>
          <div class="step" data-target="#parental-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="parental-part" id="parental-part-trigger">
              <span class="bs-stepper-circle">2</span>
              <span class="bs-stepper-label">Data Keluarga</span>
            </button>
          </div>
          <div class="bs-stepper-line"></div>
          <div class="step" data-target="#attribute-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="attribute-part" id="attribute-part-trigger">
              <span class="bs-stepper-circle">3</span>
              <span class="bs-stepper-label">Data Pelengkap</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <div id="student-part" class="content fade" role="tabpanel" aria-labelledby="student-part-trigger">
            <p>Lorem ipsum 1</p>
          </div>
          <div id="parental-part" class="content fade" role="tabpanel" aria-labelledby="parental-part-trigger">
            <p>Lorem ipsum 2</p>
          </div>
          <div id="attribute-part" class="content fade" role="tabpanel" aria-labelledby="attribute-part-trigger">
            <p>Lorem ipsum 3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
