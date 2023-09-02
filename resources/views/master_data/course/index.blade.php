@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">COURSE</h4>
            <p class="card-category"> Tabel</p>
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
            <!-- Extra Large modal -->
            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                Add New
            </button>
            <!--  Extra Large modal example -->
            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel">
                                Create Course
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ $form_action }}" method="{{ $form_method }}">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name_school" class="form-label">School Name</label>
                                            <select class="form-control" name="school_token">
                                                <option value="">Please Select</option>
                                                @foreach($schools as $value)
                                                <option value="{{ $value->token }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Code Course</label>
                                            <input type="text" class="form-control" name="code"
                                                placeholder="Enter your code course" id="code">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter name"
                                                id="name">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="teacher_id" class="form-label">Teacher</label>
                                            <select class="form-control" name="teacher_id">
                                                <option value="">Please Select</option>
                                                @foreach($teachers as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control"
                                                style="height:100px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="card-body">
            <table class="table">
                <thead class=" text-primary">
                    <th class="text-center">#</th>
                    <th class="text-left">School</th>
                    <th class="text-center">Code Mata Pelajaran</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Teacher</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                    @foreach($lists as $key => $value)
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td class="text-left">{{ $_schools[$value->school_token] }}</td>
                        <td class="text-center">{{ $value->code }}</td>
                        <td class="text-center">{{ $value->name }}</td>
                        <td class="text-center">{{ $_teacher[$value->teacher_id] }}</td>
                        <td class="text-center">
                            <span>
                                <a class="btn btn-primary fs-15"
                                    href="{{ URL::to('/master/course/edit').'/'.base64_encode($value->id) }}">
                                    <i class="ri-edit-2-line"></i>
                                </a>
                                <a class="btn btn-danger fs-15"
                                    href="{{ URL::to('/master/course/remove').'/'.base64_encode($value->id) }}">
                                    <i class=" bx bx-trash"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection