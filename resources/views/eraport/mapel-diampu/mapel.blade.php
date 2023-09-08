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
                    <ul class="list-group" id="list_kd">
                        <div id="list_kd_2" style="margin-bottom: 10px">
                            @foreach($course_detail as $key => $value)
                            <li class="list-group-item">
                                <a href="#" data-course_id="{{ $value->id }}">({{ $value->hcode }})
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
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card p-3">
                <div class="header">
                    <h4 class="title">Input Nilai </h4>
                </div>
                <div class="content">
                    <form name="f_input_nilai" method="post" action="#" id="f_input_nilai">
                        <input type="hidden" name="id_guru_mapel" id="id_guru_mapel" value="1093">
                        <input type="hidden" name="id_mapel_kd" id="id_mapel_kd" value="2469">
                        <input type="hidden" name="jenis" id="jenis" value="h">

                        <div id="load_nilai" class="pb-2">
                            <input type="file" id="file_kd">
                            <button type="button" class="btn btn-success mr-3" id="btnUpload">
                                <i class="fa fa-upload"></i>
                                Upload
                            </button>
                            <a href="{{ URL::to('eraport/list-mapel-diampu') }}" class="btn btn-primary"><i
                                    class="fa fa-download"></i>
                                Download Format
                            </a>
                            <table class="table table-condensed table-bordered table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th width="60%">Nama</th>
                                        <th width="30%">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Adriano Bramantyo Yudhantoro</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2363"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Aldrich Zhafran Bassarewan</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2364"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Andi Fadhil Zain</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2365"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="86"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Andi Muhammad Raditya Tsaqif</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2366"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="87"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Aniqa Syafiqa Arvianti</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2367"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="86"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Arkan Wistara Rakha</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2368"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="89"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Aryasatya Buana Prabowo</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2369"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="86"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Athar Adrian Hamdi</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2370"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Daffa Aryasatya</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2371"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="89"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Fakhri Reza Arrafi</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2844"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="80"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Fazriel Irsyad Abdurrahman</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2372"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="94"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Givran Khawarizmi Miftah</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2373"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="88"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Hafidzar Yusuf Chairuddin</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2374"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="85"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Ibrahim Adjie</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2375"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="85"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Kensaka Arasy Sarsono</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2376"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Keysha Rahmannisa</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2377"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="83"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Khalishya Jahra Dwidani</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2378"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="95"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Meisya Janeeta Ansori</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2379"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="84"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Mikail Alvaro Suanda</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2380"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="92"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Muhammad Alfadhlan Hidayat</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2381"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="94"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Muhammad Fathan Izzat</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2382"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="88"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Muhammad Fikri Fauzan</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2383"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Muhammad Hanif Bachsin</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2384"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="91"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Muhammad Rizky Leonardo</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2385"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="93"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Nadia Ayu Putri Andhini</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2387"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="91"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Nararya Khansa Ayundhia</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2388"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="86"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Naura Adryrera Putrie</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2389"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="86"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Nur Aisyah Indah Fitriani</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2390"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Ranni Putri Jesmine</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2391"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Reeno Raffa Abbiyu</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2526"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="90"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Reesya Shakira Cindy Setiawan</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2392"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="89"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Robby Haocun Yusar Janitra</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2393"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="88"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Syakara Rania Adinda</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2394"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="93"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Talitha Kiandra Sofian</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2395"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="92"
                                                required=""></td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Zeeshan Azmithar Safiy</td>
                                        <td><input name="id_siswa[]" type="hidden" value="2396"><input name="nilai[]"
                                                type="number" min="0" max="100" class="form-control input-sm" value="92"
                                                required=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><button type="submit" class="btn btn-success" id="tbSimpan"><i class="fa fa-check"></i>
                                    Simpan</button> &nbsp; <a href="#" class="btn btn-warning"
                                    onclick="return view_kd(0, 0);"><i class="fa fa-minus-circle"></i> Batal</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.')
});
</script>
@endsection