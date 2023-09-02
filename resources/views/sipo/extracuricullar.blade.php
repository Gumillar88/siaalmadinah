@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-body">
      <table class="table table-nowrap">
        <tbody>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">ASBD</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">PASUS Pramuka</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Fotografi</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Basket</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Karya Ilmiah Remaja</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Panahan</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Band</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">English Club</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Tari Tradisional</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Angklung</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Bola Tangan</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Bulu Tangkis</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Futsal</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Vokal</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">ASBD</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Pramuka</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Seni Baca Al Quran</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Desain Grafis</a></th>
          </tr>
          <tr>
            <th scope="row"><a href="#" class="fw-semibold">Paskibra</a></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-6">
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

@endsection