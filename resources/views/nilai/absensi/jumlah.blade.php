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
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Sakit</th>
              <th class="text-center">Izin</th>
              <th class="text-center">Tanpa Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i < 15; $i++) { 
            ?>
            <tr>
              <td class="text-center"><?= $i ?></td>
              <td class="text-center">Jamal Bahri</td>
              <td class="text-center">
                <input type="number" class="form-control" value="0">
              </td>
              <td class="text-center">
                <input type="number" class="form-control" value="0">
              </td>
              <td class="text-center">
                <input type="number" class="form-control" value="0">
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