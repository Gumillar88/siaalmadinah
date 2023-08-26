@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">PAYMENT</h4>
      <p class="card-category"> Tabel</p>
      <a href="/payment/create">
        <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New</button>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">#</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Jam</th>
            <th class="text-center">Atas Nama</th>
            <th class="text-center">Type</th>
            <th class="text-center">Metode</th>
            <th class="text-center">Nominal</th>        
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td class="text-center">1</td>
              <td class="text-center">02-09-2023</td>
              <td class="text-center">13.00</td>
              <td class="text-center">Adul</td>
              <td class="text-center">Spp</td>
              <td class="text-center">Transfer</td>
              <td class="text-center">120.000</td>
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