@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{$view['module']}}</h4>
      <p class="card-category">{{$view['page']}}</p>
      <button id="addRow" class="btn btn-primary col-sm-2" data-toggle="modal" data-target="#exampleModal"><i class=" bx bx-plus-medical"></i> Add New Row</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
              <div class="row">
                <div class="form-group">
                  <label>Kelas</label>
                  <select>
                    <option>VII</option>
                    <option>VIII</option>
                    <option>IX</option>
                  </select>
                </div>
              </div>                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama Kelas</th>
              <th class="text-center">Nama Guru</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i < 15; $i++) { 
            ?>
            <tr>
              <td class="text-center"><?= $i ?></td>
              <td class="text-center">VII</td>
              <td class="text-center">Jamal Bahri</td>
              <td class="text-center">
                <a class="btn btn-outline-success">Edit</a>
                <a class="btn btn-outline-danger">Hapus</a>
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