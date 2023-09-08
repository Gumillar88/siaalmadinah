@extends('layouts.main')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <form role="form" method="{{ $form_method }}" action="{{ $form_action }}">
                {!! csrf_field() !!}
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    {{ $errors->all()[0] }}
                </div>
                @endif
                <input type="hidden" name="id" value="{{ base64_encode($id) }}" />

                <p>
                    Warning: This action cannot be undone. <br />
                    Are you sure want to remove?
                </p>

                <div class="col-lg-12 mt-3">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="{{ URL::to('/master/class') }}">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection