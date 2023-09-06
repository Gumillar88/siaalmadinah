@extends('layouts.main')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">DATA SISWA</h4>
    <br>
    <button type="button" class="btn btn-outline-success waves-effect waves-light">Tambah</button>
    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Download Format Import</button>
    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Import</button>
    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus Siswa Terpilih</button>
    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus Semua Siswa</button>
    <button type="button" class="btn btn-outline-success waves-effect waves-light">Aktifkan Siswa Terpilih</button>
    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan Siswa Terpilih</button>
    <br>
    <br>
    <select class="form-select mb-3" aria-label="Default select example">
      <option selected> - Pilih Kelas -</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="col-xxl-12 col-lg-12">
      <div class="card card-body">
        <div class="table-responsive">
          <!-- Striped Rows -->
          <table class="table table-striped">
              <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>23232</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan User</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>23232</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan User</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>23232</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan User</button>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div><!-- end col -->
  </div>
</div>
@endsection