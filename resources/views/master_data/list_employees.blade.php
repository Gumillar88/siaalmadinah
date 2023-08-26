@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">LIST EMPLOYEE</h4>
      <p class="card-category"> Tabel</p>
      <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>#</th>
            <th>Kode Pegawai</th>
            <th>Departemen</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>        
            <th>Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td>1</td>
              <td>123456</td>
              <td>Staff</td>
              <td>Taryana Levianda</td>
              <td>Laki-laki</td>
              <td>Pondok Kelapa</td>
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