@extends('layouts.main')
<div id="modalExt" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Ekstrakulikuler</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <hr>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-2">
              <label for="dateInput" class="form-label"><b>NAMA</b></label>
          </div>
          <div class="col-lg-10">
              <input type="text" class="form-control" id="dateInput">
          </div>
        </div>
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Simpan</button>
        <button type="button" class="btn btn-outline-secondary waves-effect waves-light" data-bs-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
@section('content')

<div class="card">
  <div class="card-body">
    <h4 class="card-title">DATA EKSTRAKURIKULER</h4>
    <br>
    <button type="button" class="btn btn-outline-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalExt">Tambah</button>
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
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>23232</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>23232</td>
                  <td>Adul Jangkung</td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Hapus</button>
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