@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">LIST SCHOOL</h4>
      <p class="card-category"> Tabel</p>
      <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">#</th>
            <th class="text-center">Name School</th>
            <th class="text-center">Provinces</th>
            <th class="text-center">Regions</th>
            <th class="text-center">Locations</th>      
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td class="text-center">1</td>
              <td class="text-center">SMA ISLAM AL-Azhar</td>
              <td class="text-center">Jakarta Timur</td>
              <td class="text-center">Ciracas</td>
              <td class="text-center">Jl. Raya Centex No.24, RT.7/RW.10,<br> Ciracas, Kec. Ciracas, Kota Jakarta Timur,<br> Daerah Khusus Ibukota Jakarta 13740</td>
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