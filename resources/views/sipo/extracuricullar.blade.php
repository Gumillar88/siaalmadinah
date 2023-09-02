@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-body">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active" aria-current="true"><i class="bx bxs-right-arrow"></i> ASBD Prestasi</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> PASUS Pramuka</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Fotografi</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Basket</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Karya Ilmiah Remaja</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Panahan</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Band</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> English Club</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Tari Tradisional</button>
    </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-body">
      <h4 class="card-title">Input Nilai Ekstrakulikuler</h4>
      <br>
      <table class="table table-bordered table-nowrap">
        <thead>
          <tr align="center">
              <th scope="col" rowspan="2">NO</th>
              <th scope="col" rowspan="2">NAMA</th>
              <th scope="col" colspan="2">Nilai</th>
          </tr>
          <tr>
            <th scope="col">NILAI</th>
            <th scope="col">DESKRIPSI</th>
          </tr>
        </thead>
        <tbody>
            
        </tbody>
      </table>
      <div class="col">
        <button type="button" class="btn btn-soft-success waves-effect waves-light">Simpan</button>
        <button type="button" class="btn btn-soft-info waves-effect waves-light">Reset</button>
      </div>
    </div>
  </div>
</div>

@endsection