@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Users</h4>
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel">
                                Create Users
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ $form_action }}" method="{{ $form_method }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Fullname</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter fullname" id="name">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter email" id="email">
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Enter username" id="username">
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Username</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter password" id="password">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="role_id" class="form-label">Roles</label>
                                            <select class="form-control" name="role_id">
                                                <option value="">Please Select</option>
                                                @foreach($roles as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--end col-->
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
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th class="text-center">#</th>
                        <th class="text-center">Name School</th>
                        <th class="text-center">Fullname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Roles</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @foreach($lists as $key => $value)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-left">{{ $_schools[$value->school_token] }}</td>
                            <td class="text-center">{{ $value->name }}</td>
                            <td class="text-center">{{ $value->email }}</td>
                            <td class="text-center">{{ $_roles[$value->role_id] }}</td>
                            <td class="text-center">
                                <span>
                                    <a class="btn btn-primary fs-15"
                                        href="{{ URL::to('/master/user/edit').'/'.base64_encode($value->id) }}">
                                        <i class="ri-edit-2-line"></i>
                                    </a>
                                    <a class="btn btn-danger fs-15"
                                        href="{{ URL::to('/master/user/remove').'/'.base64_encode($value->id) }}">
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
</div>
@endsection