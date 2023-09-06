@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="col-xxl-12 col-lg-6">
    <div class="card card-body">
        <h4 class="card-title">Daftar Prestasi di Kelas ini</h4>
        <button type="button" class="btn btn-outline-info waves-effect waves-light col-sm-2">Input Prestasi</button>
        <br>
        <div class="btn-group">
          <select class="form-select mb-3" aria-label="Default select example">
            <option selected>- Pilih Siswa -</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div>
          <label for="" class="form-label">Jenis</label>
          <input type="password" class="form-control" id="">
        </div>
        <div>
          <label for="" class="form-label">Keterangan</label>
          <input type="password" class="form-control" id="">
        </div>
        <br>
        <button type="button" class="btn btn-soft-success waves-effect waves-light col-sm-2">Simpan</button>
        <br>
        <!-- Bordered Tables -->
        <table class="table table-bordered table-nowrap">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA SISWA</th>
                    <th scope="col">JENIS</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td colspan="7" align="center">No data available in table</td>
                </tr>
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Design syntax</td>
                    <td><span class="badge bg-secondary-subtle text-secondary">In Progress</span></td>
                    <td>Calvin Garrett</td>
                    <td>$7,546</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Configurable resources</td>
                    <td><span class="badge bg-success-subtle text-success">Done</span></td>
                    <td>Florence Guzman</td>
                    <td>$1,350</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Implement extensions</td>
                    <td><span class="badge bg-secondary-subtle text-secondary">In Progress</span></td>
                    <td>Maritza Blanda</td>
                    <td>$4,521</td>
                </tr> -->
            </tbody>
        </table>

    </div>
  </div>
  
</div>
@endsection