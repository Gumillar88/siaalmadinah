<?php 
use Illuminate\Support\Facades\URL;
?>
@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            {{ $errors->all()[0] }}
        </div>
        @endif
        @if(Session::has('data-created'))
        <div class="alert alert-success" role="alert">Data has been created</div>
        @endif

        @if(Session::has('data-updated'))
        <div class="alert alert-success" role="alert">Data has been updated</div>
        @endif

        @if(Session::has('data-deleted'))
        <div class="alert alert-danger" role="alert">Data has been removed</div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="card card-body">
            <div class="list-group">
                <?php foreach ($lists as $l): ?>
                    <button type="button" class="list-group-item list-group-item-action list-script" aria-current="true" data-id="{{base64_encode($l->id)}}" data-name="{{$l->name}}"><i class="bx bxs-right-arrow"></i> {{$l->name}}</button>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <span style="float:right;">
                    <button type="button" class="btn btn-sm btn-outline-info " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" id="btn_assign" style="display:none">
                        Assign Student
                    </button>
                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">
                                    Create School
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ $form_assign_action }}" method="{{ $form_method }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3 form-group">
                                                <label for="name_school" class="form-label">Extracurricular Name</label>
                                                <input type="hidden" class="form-control" id="assign-extracurricular_id" name="id" required>
                                                <input type="text" class="form-control" id="assign-extracurricular_name" readonly>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 form-group">
                                                <label for="school_level" class="form-label">Student</label>
                                                <select class="form-control" name="student_id" id="assign-student_id">
                                                    <option selected disabled>Please Select</option>
                                                    @foreach($student as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </span>
            <h4>Input Nilai Ekstrakulikuler</h4>
        </div>
        <br>
        <div class="card-body">
            <form action="{{ $form_action }}" method="{{ $form_method }}">
                <div class="table-responsive">
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
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-soft-success waves-effect waves-light">Simpan</button>
                    <!-- <button type="button" class="btn btn-soft-info waves-effect waves-light">Reset</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    function StudentNotAssignedRender(extracurricular_id) {
        $.get("{{url::to('eraport/extracurricular/student/not/assigned/')}}/"+extracurricular_id, function(data){
            var result = $.parseJSON(data);
            console.log(result)
            var html = '<option selected disabled>Please Select</option>'
            var no = 0
            $.each(result, function (index, row) {
                html += '<option value="'+row.student_id+'">'+row.student_name+'</option>'
            });
            $('#assign-student_id').html(html)

        });
    }
    $(".list-script").click(function(){
        var id = $(this).data('id')
        $('.list-script').removeClass('active')
        $('#btn_assign').removeAttr('style')
        $.get("{{url::to('eraport/extracurricular/student/load')}}/"+id, function(data){
            var result = $.parseJSON(data);
            var html = ''
            var no = 0
            $.each(result, function (index, row) {
                var student_score       = row.score
                var student_description = row.description == null ? '' : row.description
                no++
                var html_score = '<select class="form-control" name="student_score['+row.extracurricular_id+']['+row.student_id+']">'
                var html_description = '<input class="form-control" name="student_score['+row.extracurricular_id+']['+row.student_id+']" value="'+student_description+'">'
                $.each(['A','B','C','D','E'], function (index, value) {
                  html_score += '<option value="'+value+'" '+(value == student_score ? ' selected ' : '')+'>'+value+'</option>'
              });
                html_score +='</select>'
                html += '<tr><td>'+no+'</td><td>'+row.student_name+'</td><td>'+html_score+'</td><td>'+html_description+'</td></tr>'
            });
            $('#tbody').html(html)
        });
        StudentNotAssignedRender(id)
        $(this).addClass('active')
        $('#assign-extracurricular_name').val($(this).data('name'))
        $('#assign-extracurricular_id').val($(this).data('id'))
    });
</script>
@endsection
