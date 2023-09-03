@extends('layouts.main')
<div id="modalTeacher" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">GURU</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <hr>
      <div class="modal-body">
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label"><b>NIP</b></label>
          </div>
          <div class="col-lg-9">
              <input type="text" class="form-control" id="dateInput">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label"><b>NAMA</b></label>
          </div>
          <div class="col-lg-9">
              <input type="text" class="form-control" id="dateInput">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label"><b>GURU BK</b></label>
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
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Simpan</button>
        <button type="button" class="btn btn-outline-secondary waves-effect waves-light" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">DATA GURU</h4>
    <br>
    <button type="button" class="btn btn-outline-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalTeacher">Tambah</button>
    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus Guru Terpilih</button>
    <button type="button" class="btn btn-outline-success waves-effect waves-light">Aktifkan Guru Terpilih</button>
    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan Guru Terpilih</button>
    <br>
    <br>
    <div class="col-xxl-12 col-lg-12">
      <div class="card card-body">
        <div class="table-responsive">
          <!-- Striped Rows -->
          <table class="table table-striped">
              <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama/Username/Password Default</th>
                    <th scope="col">Status User</th>
                    <th scope="col">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>-</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <span class="badge bg-success-subtle text-success">Aktif</span>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan User</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>-</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <span class="badge bg-success-subtle text-success">Aktif</span>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">NonAktifkan User</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>-</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <span class="badge bg-warning-subtle text-warning">Belum Aktif</span>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Aktifkan User</button>
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