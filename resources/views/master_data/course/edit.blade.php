@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ $form_action }}" method="{{ $form_method }}">
                @csrf
                <input type="hidden" value="{{ base64_encode($course->id) }}" name="id">
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    {{ $errors->all()[0] }}
                </div>
                @endif

                @if(Session::has('data-updated'))
                <div class="alert alert-success">Data has been updated</div>
                @endif
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name_school" class="form-label">School Name</label>
                            <select class="form-control" name="school_token">
                                @foreach($schools as $value)
                                @if($value->token == $course->school_token)
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
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="code" class="form-label">Code Course</label>
                            <input type="text" class="form-control" name="code" value="{{ $course->code }}" id="code">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $course->name }}" id="name">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="teacher_id" class="form-label">Teacher</label>
                            <select class="form-control" name="teacher_id">
                                @foreach($teachers as $value)
                                @if($value->id == $course->teacher_id)
                                <option value="{{ $value->id }}" selected>
                                    {{ $value->name }}
                                </option>
                                @else
                                <option value="{{ $value->id }}" selected>
                                    {{ $value->name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control"
                                style="height:100px;">{{ $course->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ URL::to('/master/course') }}">Back</a>
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