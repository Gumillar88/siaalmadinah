@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{$view['module']}}</h4>
      <p class="card-category">{{$view['page']}}</p>
      <a href="/ppdb/create">
        <!-- <button id="addRow" class="btn btn-primary col-sm-2"><i class=" bx bx-plus-medical"></i> Add New Row</button> -->
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center" colspan="2">Selalu Dilakukan</th>
            <th class="text-center">Mulai Meningkat</th>        
            <th class="text-center">Predikat</th>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i < 15; $i++) { 
            ?>
            <tr>
              <td class="text-center"><?= $i ?></td>
              <td class="text-center">Jamal Bahri</td>
              <td class="text-center">
                <select class="form-control custom-select">
                  <option>Berdoa sebelum dan sesudah ....</option>
                </select>
              </td>
              <td class="text-center">
                <select class="form-control custom-select">
                  <option>Menjalankan ibadah sesuai ....</option>
                </select>
              </td>
              <td class="text-center">
                <select class="form-control custom-select">
                  <option>Berserah diri (tawakal) ....</option>
                </select>
              </td>
              <td class="text-center">
                <select class="form-control custom-select">
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                  <option>D</option>
                </select>
              </td>
            </tr>
            <?php } ?>          
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection