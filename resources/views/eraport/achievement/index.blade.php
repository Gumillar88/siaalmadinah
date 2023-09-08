<?php 
use Illuminate\Support\Facades\URL;

?>
@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Prestasi</h4>
            <!-- <p class="card-category"> Tabel</p> -->
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
            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                Add New
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
                        <form action="{{ $form_action }}" method="{{ $form_method }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 form-group">
                                        <label for="school_level" class="form-label">Student</label>
                                        <select class="form-control" name="student_id">
                                            <option value="">Please Select</option>
                                            @foreach($student as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-group">
                                        <label for="school_level" class="form-label">Nama Prestasi</label>
                                        <input class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-group">
                                        <label for="school_level" class="form-label">Jenis</label>
                                        <input class="form-control" name="type" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-group">
                                        <label for="school_level" class="form-label">Keterangan</label>
                                        <textarea class="form-control" name="description"></textarea>
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
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th class="text-center">#</th>
                <th>Student</th>
                <th>Nama Prestasi</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th></th>
            </thead>
            <tbody>
                <?php 
                $no = 0;
                foreach ($lists as $row): 
                  $no++;
                  ?>
                  <tr>                
                      <td class="text-center">{{$no}}</td>
                      <td>{{$row->student_name}}</td>
                      <td>{{$row->achievement_name}}</td>
                      <td>{{$row->type}}</td>
                      <td>{{$row->description}}</td>
                      <td>
                        <span>
                            <a class="btn btn-primary fs-15" href="{{ URL::to('/master/extracurricular/edit').'/'.base64_encode($row->id) }}">
                                <i class="ri-edit-2-line"></i>
                            </a>
                            <a class="btn btn-danger fs-15" href="{{ URL::to('/master/extracurricular/remove').'/'.base64_encode($row->id) }}">
                                <i class=" bx bx-trash"></i>
                            </a>
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