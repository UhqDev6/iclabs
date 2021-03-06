@extends('master.masterAdmin')
@section('content')

<div class="row">
  <div class="col-md-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="d-flex">
              <div class="wrapper">
                <h3 class="mb-0 font-weight-semibold"></h3>
                <h5 class="mb-0 font-weight-medium text-primary">Employee</h5>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection