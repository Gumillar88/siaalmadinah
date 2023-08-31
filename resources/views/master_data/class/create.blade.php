@extends('layouts.main')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{$view['module']}}</h4>
      <p class="card-category">{{$view['page']}}</p>
      <!-- <a id="addRow" class="btn btn-primary col-sm-2" href="{{route('master-class-create')}}"><i class=" bx bx-plus-medical"></i> Add New</a> -->
    </div>
    <div class="card-body">
      <form method="POST" accept="{{route('master-class-store')}}">    
        @csrf
        <div class="row">
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_','','academic_year'))}}</label>
            <input type="text" required class="form-control" name="academic_year_id">
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_','','school_grade'))}}</label>
            <input type="text" required class="form-control" name="school_grade_id">
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_','','name'))}}</label>
            <input type="text" required class="form-control" name="name">
          </div>
          <div class="col-md-12 form-group">
            <label>{{ucwords(str_replace('_','','pic'))}}</label>
            <input type="text" required class="form-control" name="pic">
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