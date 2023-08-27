@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title"></h4>
      <p class="card-category">Pengisian yang belum disimpan akan hilang</p>
    </div>
    <div class="card-body">
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama">
            </div>
          </div>          
          <div class="col-md-6">
            <div class="">
              <label class="bmd-label-floating">Ijazah</label>
              <input type="file" class="form-control" id="validatedCustomFile" required>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Jenis Kelamin</label>
              <div class="row col-md-12">                
                <div class="col-md-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Laki - laki
                  </label>
                </div>
                <div class="col-md-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                  </label>
                </div>
              </div>              
            </div>
          </div>
          <div class="col-md-6">
            <div class="">
              <label class="bmd-label-floating">Akta Kelahiran</label>
              <input type="file" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">NISN</label>
              <input type="text" class="form-control" name="nama">
            </div>
          </div>          
          <div class="col-md-6">
            <div class="">
              <label class="bmd-label-floating">Kartu Keluarga</label>
              <input type="file" class="form-control" id="validatedCustomFile" required>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Tempat Lahir</label>
              <input type="text" class="form-control" name="nama">
            </div>
          </div>          
          <div class="col-md-6">
            <div class="">
              <label class="bmd-label-floating">Buku Rapor (Semester 1 - 5)</label>
              <input type="file" class="form-control" id="validatedCustomFile" required>
            </div>
          </div>          
        </div>       
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="label-control">Tanggal Lahir</label>
              <input type="date" class="form-control" name="nama">
            </div>
          </div>                   
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="label-control">Alamat</label>
              <textarea type="text" class="form-control" name="nama"></textarea>
            </div>
          </div>                   
        </div>
        <br>
        <button type="submit" class="btn btn-primary pull-right">Save Profile</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
@endsection