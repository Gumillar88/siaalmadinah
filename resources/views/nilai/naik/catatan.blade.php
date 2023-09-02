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
            <th class="text-center">Naik Kelas</th>
            <th class="text-center">Catatan</th>
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
                  <option selected>Ya</option>
                  <option>Tidak</option>
                </select>
              </td>
              <td class="text-center">
                <input class="form-control" placeholder="Catatan untuk siswa">
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