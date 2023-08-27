@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">PPDB</h4>
      <p class="card-category"> Tabel</p>
      <a href="/ppdb/create">
        <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New Row</button>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">#</th>
            <th class="text-center">NISN</th>
            <th class="text-center">NIS</th>
            <th class="text-center">Name</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Address</th>        
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td class="text-center">1</td>
              <td class="text-center">12345</td>
              <td class="text-center">123456</td>
              <td class="text-center">Jupri</td>
              <td class="text-center">Laki-laki</td>
              <td class="text-center">Cipinang</td>
              <td class="text-center">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>              
            <tr>                
              <td class="text-center">2</td>
              <td class="text-center">12346</td>
              <td class="text-center">123457</td>
              <td class="text-center">Jamal</td>
              <td class="text-center">Laki-laki</td>
              <td class="text-center">Bojong Gede</td>
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