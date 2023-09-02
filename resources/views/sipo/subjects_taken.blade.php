@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="alert alert-warning" role="alert" style="color: black;">
    <strong> Petunjuk: </strong><br>
    Menu ini digunakan untuk menginput nilai pada setiap masing-masing mata pelajaran diampu. Silahkan klik menu <b><i>Nilai Pengtahuan</i></b> untuk menginput nilai pengetahuan, dan <b><i>Nilai Keterampilan</i></b> untuk menginput nilai keterampilan
  </div>
  <div class="col-xxl-12 col-lg-6">
    <div class="card card-body">
        <h4 class="card-title">MASS Upload Data Nilai</h4>
        <div class="btn-group col-lg-2">
          <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -- Semua Kelas -- </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <br>
        <div class="btn-group col-lg-2">
          <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pengetahuan</button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <br>
        <div class="col-lg-3">
          <input class="form-control" type="file" id="formFile">
        </div>
        <br>
        <div class="col">
          <button type="button" class="btn btn-soft-success waves-effect waves-light col-lg-1">Upload</button>
          <button type="button" class="btn btn-soft-info waves-effect waves-light">Download Format</button>
        </div>
        <br>
    </div>
  </div>
  <div class="row">
    <div class="col-xxl-4 col-lg-6">
      <div class="card card-body">
          <h4 class="card-title">IPS - VIII A</h4>
          <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">  Nilai Pengtahuan</h6>
            </div>
            <div class="card-footer">
              <h6 class="card-title mb-0 ml-0">  Nilai Keterampilan</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-lg-6">
      <div class="card card-body">
          <h4 class="card-title">IPS - VIII B</h4>
          <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">  Nilai Pengtahuan</h6>
            </div>
            <div class="card-footer">
              <h6 class="card-title mb-0 ml-0">  Nilai Keterampilan</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-lg-6">
      <div class="card card-body">
          <h4 class="card-title">IPS - VIII C</h4>
          <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">  Nilai Pengtahuan</h6>
            </div>
            <div class="card-footer">
              <h6 class="card-title mb-0 ml-0">  Nilai Keterampilan</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xxl-4 col-lg-6">
      <div class="card card-body">
          <h4 class="card-title">IPS - VIII D</h4>
          <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">  Nilai Pengtahuan</h6>
            </div>
            <div class="card-footer">
              <h6 class="card-title mb-0 ml-0">  Nilai Keterampilan</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-lg-6">
      <div class="card card-body">
          <h4 class="card-title">IPS - VIII E</h4>
          <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">  Nilai Pengtahuan</h6>
            </div>
            <div class="card-footer">
              <h6 class="card-title mb-0 ml-0">  Nilai Keterampilan</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection