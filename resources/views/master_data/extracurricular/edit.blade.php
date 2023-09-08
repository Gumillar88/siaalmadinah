@extends('layouts.main')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <form action="{{ $form_action }}" method="{{ $form_method }}">
                @csrf
                <input type="hidden" value="{{ base64_encode($data->id) }}" name="id">
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
                        <div class="mb-3 form-group">
                            <label for="name_school" class="form-label">Extracurricular Name</label>
                            <input class="form-control" name="name" required value="{{@$data->name}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 form-group">
                            <label for="school_level" class="form-label">Description</label>
                            <textarea class="form-control" name="description">{{@$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 form-group">
                            <label for="school_level" class="form-label">PIC</label>
                            <select class="form-control" name="pic">
                                <option value="">Please Select</option>
                                @foreach($teachers as $value)
                                <?php $selected = $value->id == @$data->pic ? ' selected ' :'' ?>
                                <option value="{{ $value->id }}" {{$selected}}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div>
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