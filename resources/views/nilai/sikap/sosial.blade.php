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
              <th class="text-center" rowspan="2">No</th>
              <th class="text-center" rowspan="2">Nama</th>
              <th class="text-center" colspan="7">Selalu Dilakukan</th>
              <th class="text-center" rowspan="2">Mulai Meningkat</th>        
              <th class="text-center" rowspan="2">Predikat</th>
            </tr>
            <tr>
              <th class="text-center">Jujur</th>
              <th class="text-center">Disiplin</th>
              <th class="text-center">Tanggung Jawab</th>
              <th class="text-center">Toleransi</th>
              <th class="text-center">Gotong Royong</th>
              <th class="text-center">Santun</th>
              <th class="text-center">Percaya Diri</th>
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
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <input type="checkbox">
              </td>
              <td class="text-center">
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <input type="checkbox" checked>
              </td>
              <td class="text-center">
                <select class="form-control custom-select">
                  <option>Tanggung Jawab</option>
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