<?php 
use Illuminate\Support\Facades\URL;

?>
@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{$view['module']}}</h4>
      <p class="card-category">{{$view['page']}}</p>
      <a id="addRow" class="btn btn-primary col-sm-2" href="{{url::to('master/class/edit')}}"><i class=" bx bx-plus-medical"></i> Add New</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">#</th>
            <th class="text-center">School Level</th>
            <th class="text-center">Class</th>
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>
          <?php $no = 0;
          foreach ($list as $row): $no++;?>
            <tr>                
              <td class="text-center">{{$no}}</td>
              <td class="text-center">{{$row->school_grade_id}}</td>
              <td class="text-center">{{$row->name}}</td>
              <td class="text-center">
                <span>
                  <a class="fs-15" href="{{url::to('master/class/edit/$row->id')}}"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
          <?php endforeach ?>      
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection