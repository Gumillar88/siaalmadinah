@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <div class="alert alert-warning" role="alert" style="color: black;">
        <strong> Petunjuk: </strong><br>
        Menu ini digunakan untuk menginput nilai pada setiap masing-masing mata pelajaran diampu. Silahkan klik menu
        <b><i>Nilai Pengtahuan</i></b> untuk menginput nilai pengetahuan, dan <b><i>Nilai Keterampilan</i></b> untuk
        menginput nilai keterampilan
    </div>
    <div class="col-xxl-12 col-lg-6">
        <div class="card card-body">
            <h4 class="card-title">MASS Upload Data Nilai</h4>
            <form action="{{ $action_upload}}" method="{{ $method }}" enctype="multipart/form-data">
                @csrf
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    {{ $errors->all()[0] }}
                </div>
                @endif
                <div class="form-group col-lg-2">
                    <select name="class_id" class="btn btn-light dropdown-toggle">
                        <option value=""> -- Semua Kelas -- </option>
                        @foreach($classes as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group col-lg-2">
                    <select name="types" class="btn btn-light dropdown-toggle">
                        <option value=""> -- Semua Pengetahuan -- </option>
                        @foreach($types as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="col-lg-3">
                    <input class="form-control" type="file" id="formFile" name="files">
                </div>
                <br>
                <div class="col">
                    <button type="submit" class="btn btn-soft-success waves-effect waves-light">Upload</button>
                    <a href="#" class="btn btn-soft-info waves-effect waves-light">Download Format</a>
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class="row">

        @foreach($mapel as $value)
        <div class="col-xxl-4 col-lg-6">
            <div class="card card-body">
                <h4 class="card-title">{{ $value->mapel_name .' - '. $value->class_name }}</h4>
                <div class="card">
                    <?php 
						$mapel_type = DB::select("SELECT * FROM `mst_type` WHERE `mst_type`.`school_token` = '".$value->school_token."'");
					?>
                    @foreach($mapel_type as $val)
                    <div class="card-header">
                        <a
                            href="{{ URL::to('eraport/keterampilan?') }}type_id={{ base64_encode($val->id) }}&mapel_id={{ base64_encode($value->mapel_id) }}&class_id={{ base64_encode($value->class_id) }}">
                            <h6 class="card-title mb-0"><i class="fa fa-chevron-right"></i> {{ $val->name }}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection