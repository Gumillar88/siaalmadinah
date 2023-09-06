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
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label"><b>Tahun</b></label>
          </div>
          <div class="col-lg-9">
            <select class="form-select" aria-label="Default select example">
              <option selected>- Please Select -</option>
              <option value="1">2001</option>
              <option value="2">2002</option>
              <option value="3">2003</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label"><b>Semester</b></label>
          </div>
          <div class="col-lg-9">
            <select class="form-select" aria-label="Default select example">
              <option selected>- Please Select -</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label">Kepala Sekolah</label>
          </div>
          <div class="col-lg-9">
              <input type="text" class="form-control" id="dateInput">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label">NIP Kepsek</label>
          </div>
          <div class="col-lg-9">
              <input type="text" class="form-control" id="dateInput">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label">Tgl TTD Raport</label>
          </div>
          <div class="col-lg-9">
              <input type="date" class="form-control" id="dateInput">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-3">
              <label for="dateInput" class="form-label">Tgl TTP Raport <br>Kelas 9 </label>
          </div>
          <div class="col-lg-9">
              <input type="date" class="form-control" id="dateInput">
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
    <h4 class="card-title">TAHUN AKTIF</h4>
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
                    <th scope="col">Tahun</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2004</td>
                  <td>Adul Jangkung</td>
                  <td>2023-05-05</td>
                  <td>2023-04-04</td>
                  <td><span class="badge bg-danger">Tidak Aktif</span></td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Aktifkan</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2004</td>
                  <td>Adul Jangkung</td>
                  <td>2023-05-05</td>
                  <td>2023-04-04</td>
                  <td><span class="badge bg-danger">Tidak Aktif</span></td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Aktifkan</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>2004</td>
                  <td>Adul Jangkung</td>
                  <td>2023-05-05</td>
                  <td>2023-04-04</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Edit</button>
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Aktifkan</button>
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