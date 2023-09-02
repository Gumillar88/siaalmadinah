@extends('layouts.main')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <form action="{{ $form_action }}" method="{{ $form_method }}">
                @csrf
                <input type="hidden" value="{{ base64_encode($classes->id) }}" name="id">
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

                                @foreach($schools as $value)
                                @if($value->token == $classes->school_token)
                                <option value="{{ $value->token }}" selected>
                                    {{ $value->name }}
                                </option>
                                @else
                                <option value="{{ $value->token }}" selected>
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
                            <label for="school_level" class="form-label">School Level</label>
                            <select class="form-control" name="school_level_id">
                                @foreach($school_levels as $value)
                                @if($value->id == $classes->school_grade_id)
                                <option value="{{ $value->id }}" selected>
                                    {{ $value->name }}
                                </option>
                                @else
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12">
                        <label for="name" class="form-label">Class Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $classes->name }}" id="name">
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