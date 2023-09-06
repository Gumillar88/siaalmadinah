@extends('layouts.main')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">DATA SISWA</h4>
    <br>
    <form action="">
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="nameInput" class="form-label">NIS</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="nameInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="websiteUrl" class="form-label">NISN</label>
        </div>
        <div class="col-lg-9">
            <input type="url" class="form-control" id="websiteUrl">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NAMA</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="timeInput" class="form-label">JENIS KELAMIN</label>
        </div>
        <div class="col-lg-9">
        <select class="form-select" aria-label="Default select example">
          <option selected>- Please Select -</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TEMPAT LAHIR</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TANGGAL LAHIR</label>
        </div>
        <div class="col-lg-9">
            <input type="date" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="contactNumber" class="form-label">AGAMA</label>
        </div>
        <div class="col-lg-9">
          <select class="form-select" aria-label="Default select example">
            <option selected>- Please Select -</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="contactNumber" class="form-label">STATUS ANAK</label>
        </div>
        <div class="col-lg-9">
          <select class="form-select" aria-label="Default select example">
            <option selected>- Please Select -</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">ANAK KE</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="contactNumber" class="form-label">GOLONGAN DARAH</label>
        </div>
        <div class="col-lg-9">
          <select class="form-select" aria-label="Default select example">
            <option selected>- Please Select -</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TINGGI BADAN</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">BERAT BADAN</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT</label>
        </div>
        <div class="col-lg-9">
            <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NO TELP</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">SEKOLAH ASAL</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT SEKOLAH ASAL</label>
        </div>
        <div class="col-lg-9">
            <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="contactNumber" class="form-label">DITERIMA DI KELAS</label>
        </div>
        <div class="col-lg-9">
          <select class="form-select" aria-label="Default select example">
            <option selected>- Please Select -</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">DITERIMA TANGGAL</label>
        </div>
        <div class="col-lg-9">
            <input type="date" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NO IJAZAH</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TAHUN IJAZAH</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NO SKHUN</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TAHUN SKHUN</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NAMA AYAH</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NAMA IBU</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT ORTU</label>
        </div>
        <div class="col-lg-9">
            <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">TELP ORTU</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">PEKERJAAN AYAH</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">PEKERJAAN IBU</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NAMA WALI</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT WALI</label>
        </div>
        <div class="col-lg-9">
            <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">NO. TELP RUMAH</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">PEKERJAAN WALI</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
            <label for="dateInput" class="form-label">FOTO SISWA</label>
        </div>
        <div class="col-lg-9">
            <input type="file" class="form-control" id="dateInput">
        </div>
      </div>
      <div class="text-start">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Simpan</button>
        <button type="button" class="btn btn-outline-secondary waves-effect waves-light">Kembali</button>
      </div>
    </form>
  </div>
</div>
@endsection