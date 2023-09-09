@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="alert alert-warning" style="color: #000">
        <b>Petunjuk : </b><br>
        <ul>
            <li>Menu ini digunakan untuk menginput nilai pengetahuan pada mata pelajaran <b><i>Ilmu Pengetahuan
                        Sosial, kelas VIII A.</i></b> </li>
            <li>Jika kompetensi dasar belum ada, silakan klik tombol <b><i>Tambah KD</i></b>. Untuk mengubah
                atau menghapus nama KD, silakan klik tombol "<i class="ri-edit-2-line"></i>" atau "<i
                    class="fa fa-remove"></i>". </li>
            <li>Untuk mengisikan nilai pengetahuan pada masing-masing KD, silakan klik nama KD, dan akan muncul
                daftar siswa serta isian nilai. Nilai dalam <b><i>skala 1-100</i></b>. Jangan lupa klik tombol
                <b><i>Simpan</i></b> di sebelah bawah.
            </li>
        </ul>
    </div>
    <div class="col-xxl-12 col-lg-6">

        <div class="card card-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ URL::to('eraport/list-mapel-diampu') }}" class="btn btn-info"><i
                            class="fa fa-arrow-left"></i>
                        Kembali</a>
                    <a href="{{ URL::to('eraport/list-mapel-diampu') }}" class="btn btn-warning" target="_blank"><i
                            class="fa fa-print"></i> Cetak</a>
                    <a href="{{ URL::to('eraport/list-mapel-diampu') }}" class="btn btn-danger" style="display:none"><i
                            class="fa fa-download"></i> Download File Excel</a>
                    <a href="{{ URL::to('eraport/list-mapel-diampu') }}" class="btn btn-success"><i
                            class="fa fa-upload"></i> Upload KD</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card p-3">
                <div class="header">
                    <h5 class="title">{{ $name_type}} » {{ $name_mapel }} - {{ $name_class }}</h5>
                </div>
                <div class="content">
                    <p>
                        <a href="#" onclick="return edit(0);" class="btn btn-info"><i class="fa fa-plus-circle"></i>
                            Tambah KD</a>
                    </p>

                    <?php if (!empty($course_detail)) { ?>
                    <ul class="list-group" id="list_kd">
                        <div id="list_kd_2" style="margin-bottom: 10px">
                            @foreach($course_detail as $key => $value)
                            <li class="list-group-item">
                                <a href="#" data-course_id="{{ $value->id }}" class="getStudent">({{ $value->hcode }})
                                    {{ $value->name }}</a>
                                <!--onclick="return view_kd(2469, 24);"-->
                                <div class="pull-right">
                                    <a href="#" onclick="return edit(2469);" class="btn btn-xs btn-success p-2">
                                        <i class="ri-edit-2-line"></i>
                                    </a>
                                    <a href="#" onclick="return hapus(2469, 24);" class="btn btn-xs btn-danger p-2">
                                        <i class=" bx bx-trash"></i>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </div>
                        <li class="list-group-item" onclick="return view_kd(6, 24,'t');"><a href="#"><i
                                    class="fa fa-chevron-right"></i> PENILAIAN TENGAH SEMESTER</a></li>
                        <li class="list-group-item" onclick="return view_kd(6, 24,'a');"><a href="#"><i
                                    class="fa fa-chevron-right"></i> PENILAIAN AKHIR SEMESTER</a></li>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card p-3">
                <div class="header">
                    <h4 class="title">Input Nilai </h4>
                </div>
                <div id="alertWarning" class="content alert alert-warning">Silakan pilih KD di samping</div>
                <div id="contentData" class="content d-none">
                    <form name="f_input_nilai" method="post" action="#" id="f_input_nilai">
                        <input type="hidden" name="id_guru_mapel" id="id_guru_mapel" value="1093">
                        <input type="hidden" name="id_mapel_kd" id="id_mapel_kd" value="2469">
                        <input type="hidden" name="jenis" id="jenis" value="h">
                        <input type="file" id="file_kd">
                        <p class="mt-2">
                            <button type="button" class="btn btn-success" id="btnUpload"><i class="fa fa-upload"></i>
                                Upload</button>
                            <a href="{{ URL::to('/eraport/keterampilan?type_id=MQ==&mapel_id=Mw==&class_id=NA==') }}"
                                class="btn btn-primary"><i class="fa fa-download"></i>
                                Download Format</a>
                        </p>
                        <div id="load_nilai" class="pb-2"></div>
                        <div id="buttonProses">
                            <p>
                                <button type="submit" class="btn btn-success" id="tbSimpan">
                                    <i class="fa fa-check"></i>
                                    Simpan
                                </button> &nbsp;
                                <a href="#" class="btn btn-warning" onclick="return view_kd(0, 0);"><i
                                        class="fa fa-minus-circle"></i> Batal
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $('.getStudent').on('click', function(e) {
        e.preventDefault();
        var course_id = $(this).data("course_id");
        // alert(course_id);

        $.ajax({
            type: 'get',
            url: "{{ URL::to('/eraport/keterampilan/get_data') }}",
            data: {
                course_id: course_id
            },
            beforeSend: function() {
                $('#create_new').html('....Please wait');
            },
            success: function(response) {
                alert('Menampilkan Data siswa');
            },
            complete: function(response) {
                var data = response['responseJSON'];
                // console.log(data[0].student_id);

                var html = '';
                $.each(data, function(key, value) {

                    html += '<tr><td>1</td><td>' + value.student_id +
                        '</td><td><input name="id_siswa[]" type="hidden" value="' +
                        value.student_id +
                        '"><input name="nilai[]" type="number" min="0" max="100" class="form-control input-sm" value="' +
                        value.scores + '" required=""></td></tr>';
                });

                $('#load_nilai').html(
                    '<table class="table table-condensed table-bordered table-hover mt-3"><thead><tr><th width="10%">No</th><th width="60%">Nama</th><th width="30%">Nilai</th>' +
                    html + '</thead><tbody>'
                );

                $('#contentData').removeClass('d-none');
                $('#alertWarning').addClass('d-none');
            }
        });
    });
});
</script>
@endsection