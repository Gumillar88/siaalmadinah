@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">LIST SCHOOL</h4>
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
                                Create School
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
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter your School Name" id="name_school">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="provinces" class="form-label">Provinces</label>
                                            <input type="text" class="form-control" name="provinces"
                                                placeholder="Enter your Provinces" id="provinces">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="school_level" class="form-label">School Level</label>
                                            <select class="form-control" name="school_level_id">
                                                <option value="">Please Select</option>
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
                                            <input type="text" class="form-control" name="regions"
                                                placeholder="Enter Regions" id="regions">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <label for="locations" class="form-label">Locations</label>
                                        <textarea class="form-control" id="locations" name="location" rows="3"
                                            placeholder="Enter your Locations"></textarea>
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
                        <th class="text-left">School Name</th>
                        <th class="text-center" width="8%">School Level</th>
                        <th class="text-center">Provinces</th>
                        <th class="text-center">Regions</th>
                        <th class="text-center" width="30%">Locations</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @foreach($lists as $key => $value)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-left">{{ $value->name }}</td>
                            <td class="text-center">
                                {{ isset($_schoollevels[$value->school_level_id]) ? $_schoollevels[$value->school_level_id] : "-" }}
                            </td>
                            <td class="text-center">{{ $value->provinces }}</td>
                            <td class="text-center">{{ $value->regions }}</td>
                            <td class="text-left">{{ $value->locations }}</td>
                            <td class="text-center">
                                <span>
                                    <a class="btn btn-primary fs-15"
                                        href="{{ URL::to('/master/school/edit').'/'.base64_encode($value->id) }}">
                                        <i class="ri-edit-2-line"></i>
                                    </a>
                                    <a class="btn btn-danger fs-15"
                                        href="{{ URL::to('/master/school/remove').'/'.base64_encode($value->id) }}">
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