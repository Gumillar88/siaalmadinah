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
      <!-- <a id="addRow" class="btn btn-primary col-sm-2" href=""><i class=" bx bx-plus-medical"></i> Add New</a> -->
    </div>
    <div class="card-body">
      <form method="POST" action="{{url::to(Session::get('hcode').'/class/create/store')}}">    
        @csrf
        <div class="row">
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_',' ','academic_year'))}}</label>
            <select required class="form-control" name="academic_year_id">
              <?php foreach ($MstAcademicYear as $row): 
                $selected = $row->current_year == '1' ? ' selected ' : '';
                ?>
                <option value="{{$row->id}}" {{$selected}}>{{$row->start_year.'/'.$row->final_year.' '.$row->period}}</option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_',' ','school_grade'))}}</label>
            <select required class="form-control" name="school_grade_id">
              <?php foreach ($MstSchoolGrade as $row): ?>
                <option value="{{$row->id}}">{{$row->name}}</option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_',' ','name'))}}</label>
            <input type="text" required class="form-control" name="name">
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_',' ','pic'))}}</label>
            <select required class="form-control" name="pic">
              <?php foreach ($User as $row): ?>
                <option value="{{$row->id}}">{{$row->name}}</option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection