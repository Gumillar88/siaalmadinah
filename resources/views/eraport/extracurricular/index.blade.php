<?php 
use Illuminate\Support\Facades\URL;
?>
@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-body">
      <div class="list-group">
        <?php foreach ($lists as $l): ?>
          <button type="button" class="list-group-item list-group-item-action list-script" aria-current="true" data-id="{{$l->id}}"><i class="bx bxs-right-arrow"></i> {{$l->name}}</button>
        <?php endforeach ?>
        <!-- <button type="button" class="list-group-item list-group-item-action active" aria-current="true"><i class="bx bxs-right-arrow"></i> Nama</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> <b>PASUS Pramuka</b></button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Fotografi</button>
        <button type="button" class="list-group-item list-group-item-action"><i class="bx bxs-right-arrow"></i> Basket</button> -->
    </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-body">
      <h4 class="card-title">Input Nilai Ekstrakulikuler</h4>
      <br>
      <table class="table table-bordered table-nowrap">
        <thead>
          <tr align="center">
              <th scope="col" rowspan="2">NO</th>
              <th scope="col" rowspan="2">NAMA</th>
              <th scope="col" colspan="2">Nilai</th>
          </tr>
          <tr>
            <th scope="col">NILAI</th>
            <th scope="col">DESKRIPSI</th>
          </tr>
        </thead>
        <tbody id="tbody">
            
        </tbody>
      </table>
      <div class="col">
        <button type="button" class="btn btn-soft-success waves-effect waves-light">Simpan</button>
        <button type="button" class="btn btn-soft-info waves-effect waves-light">Reset</button>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
  $(".list-script").click(function(){
    var id = $(this).data('id')
    $.get("{{url::to('eraport/extracurricular/student/load')}}/"+id, function(data){
      // alert("Data: " + data + "\nStatus: " + status);
      var result = $.parseJSON(data);
      var html = ''
      var no = 1
      $.each(result, function (index, row) {
        var student_score       = row.score
        var student_description = row.description
        var html_score = '<select class="form-control" name="student_score['+row.extracurricular_id+']['+row.student_id+']">'
        $.each(['A','B','C','D','E'], function (index, value) {
          html_score += '<option value="'+value+'">'+value+'</option>'
        });
        html_score +='</select>'
        var html_description = '<input class="form-control" name="student_score['+row.extracurricular_id+']['+row.student_id+']">'
        html += '<tr><td>'+row.student_name+'<td><td>'+html_score+'<td><td>'+html_description+'<td></tr>'
        no++
      });
      $(this).html(html)
    });
    // alert(id);
  });
</script>
@endsection
