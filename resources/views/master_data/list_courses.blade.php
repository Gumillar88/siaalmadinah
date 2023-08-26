@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">COURSE</h4>
      <p class="card-category"> Tabel</p>
      <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>#</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nama</th>
            <th>Guru</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td>1</td>
              <td>IP123456</td>
              <td>Agama Islam</td>
              <td>Sinta Yulia</td>
              <td>X IPA 3</td>
              <td class="text-center">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection