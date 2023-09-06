@extends('layouts.main')

@section('content')
  <h4 class="card-title">PILIH KELAS</h4>
  <div>
    <select class="form-select mb-3" aria-label="Default select example">
      <option selected> - Please Select -</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <h4 class="card-title">PILIH SISWA UNTUK MEMILIH SATU PERSATU, GUNAKAN CTRL+KLIK, UNTUK MEMILIH SEMUA GUNAKAN CTRL+A</h4>
  <br>
  <div class="col-md-5">
    <div class="card card-body">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active" aria-current="true"><i class="bx bxs-right-arrow"></i> Adul Bahri</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Kehed</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Kopling</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Petot</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Jangkung</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
      </div>
    </div>
  </div>
  <div class="col-sm-2" style="width: max-content;">
    <button type="button" class="btn btn-outline-success bx bxs-right-arrow"></button>
    <button type="button" class="btn btn-outline-success bx bxs-left-arrow"></button>
  </div>
  <div class="col-md-5">
    <div class="card card-body">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active" aria-current="true"><i class="bx bxs-right-arrow"></i> Adul Bahri</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Kehed</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Kopling</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Petot</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul Jangkung</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Adul </button>
      </div>
    </div>
  </div>
  <!-- Outline Buttons -->
  <div class="col">
    <!-- Outline Buttons -->
    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Simpan</button>
    <button type="button" class="btn btn-outline-secondary waves-effect waves-light">Kembali</button>
  </div>
  
@endsection