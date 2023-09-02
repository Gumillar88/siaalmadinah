@extends('layouts.main')

@section('content')
<div class="col-md-6">
    <form action="{{ $form_action }}" method="{{ $form_method }}">
        @csrf
        <input type="hidden" value="{{ base64_encode($school_level->id) }}" name="id">
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
                    <input type="text" class="form-control text-capitalize" name="name"
                        placeholder="Enter your School Name" value="{{ $school_level->name }}" id="name_school">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ URL::to('/master/schoollevel') }}">Back</a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
</div>
@endsection