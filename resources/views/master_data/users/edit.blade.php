@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ $form_action }}" method="{{ $form_method }}">
                @csrf
                <input type="hidden" value="{{ base64_encode($users->id) }}" name="id">
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    {{ $errors->all()[0] }}
                </div>
                @endif

                @if(Session::has('data-updated'))
                <div class="alert alert-success">Data has been updated</div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="name_school" class="form-label">School Name</label>
                            <select class="form-control" name="school_token">
                                <option value="">Please Select</option>
                                @foreach($schools as $value)
                                @if($value->token == $users->school_token)
                                <option value="{{ $value->token }}" selected>
                                    {{ $value->name }}
                                </option>
                                @else
                                <option value="{{ $value->token }}">
                                    {{ $value->name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Fullname</label>
                            <input type="text" class="form-control" name="name" value="{{ $users->name }}" id="name">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $users->email }}"
                                id="email">
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $users->username }}"
                                id="username">
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password"
                                id="password">
                            <input type="hidden" name="password_old" value="{{ $users->password }}">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="role_id" class="form-label">Roles</label>
                            <select class="form-control" name="role_id">
                                <option value="">Please Select</option>
                                @foreach($roles as $value)
                                @if($value->id == $users->role_id)
                                <option value="{{ $value->id }}" selected>
                                    {{ $value->name }}
                                </option>
                                @else
                                <option value="{{ $value->id }}">
                                    {{ $value->name }}
                                </option>
                                @endif
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
    </div>
</div>
@endsection