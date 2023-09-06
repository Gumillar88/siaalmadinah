@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{$view['module']}}</h4>
      <a href="/ppdb/create">
        <!-- <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New Row</button> -->
      </a>
    </div>
    <div class="card-body">
      <a class="btn btn-outline-success"><i class="fa fa-print"></i> Cetak Leger Nilai Penilaian dan Nilai Keterampilan</a>
      <a class="btn btn-outline-danger"><i class="fa fa-print"></i> Cetak Leger Nilai Pengetahuan</a>
      <a class="btn btn-outline-danger"><i class="fa fa-print"></i> Cetak Leger Nilai PTS</a>
      <a class="btn btn-outline-success"><i class="fa fa-print"></i> Cetak Leger Nilai Esktrakulikuler dan Absensi</a>
    </div>
  </div>
</div>
@endsection