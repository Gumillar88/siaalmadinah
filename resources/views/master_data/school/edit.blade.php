@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <form action="{{ $form_action }}" method="{{ $form_method }}">
        @csrf
        <input type="hidden" value="{{ base64_encode($schools->id) }}" name="id">
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
                    <input type="text" class="form-control" name="name" placeholder="Enter your School Name"
                        id="name_school" value="{{ $schools->name }}">
                </div>
            </div>
            <!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="provinces" class="form-label">Provinces</label>
                    <input type="text" class="form-control" name="provinces" placeholder="Enter your Provinces"
                        id="provinces" value="{{ $schools->provinces }}">
                </div>
            </div>
            <!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="school_level" class="form-label">School Level</label>
                    <select class="form-control" name="school_level_id">
                        @if(!empty($school_level_data))
                        <option value="{{ $school_level_data->id }}" selected>{{ $school_level_data->name }}</option>
                        @else
                        <option value="">Please Select</option>
                        @endif

                        @foreach($school_level as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="regions" class="form-label">Regions</label>
                    <input type="text" class="form-control" name="regions" placeholder="Enter Regions" id="regions"
                        value="{{ $schools->regions }}">
                </div>
            </div>
            <!--end col-->
            <div class="col-12">
                <label for="locations" class="form-label">Locations</label>
                <textarea class="form-control" id="locations" name="location" rows="3"
                    placeholder="Enter your Locations">{{ $schools->locations }}</textarea>
            </div>
            <!--end col-->
            <div class="col-lg-12 mt-3">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ URL::to('/master/school') }}">Back</a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
</div>
@endsection