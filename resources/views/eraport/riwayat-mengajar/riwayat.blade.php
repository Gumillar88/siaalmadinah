@extends('layouts.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <h4 class="title">Data Riwayat Mengajar</h4>

            </div>
            <div class="content">

                <table class="table table-hover table-striped" id="datatabel" style="width: 100%">
                    <thead>
                        <tr>
                            <td width="10%">No</td>
                            <td width="10%">Tahun Ajaran</td>
                            <td width="30%">Mapel</td>
                            <td width="20%">Kelas</td>
                            <td width="30%">Aksi</td>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>20211</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII A</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/44"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-24/20211"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>20211</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII B</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/45"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-25/20211"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>20211</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII C</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/46"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-26/20211"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>20211</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII D</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/47"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-27/20211"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>20211</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII E</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/48"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-28/20211"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>20212</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII A</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/718"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-24/20212"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>20212</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII B</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/719"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-25/20212"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>20212</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII C</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/720"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-26/20212"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>20212</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII D</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/721"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-27/20212"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>20212</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII E</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/722"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-28/20212"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>20221</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII A</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/817"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-24/20221"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>20221</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII B</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/818"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-25/20221"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>20221</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII C</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/819"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-26/20221"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>20221</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII D</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/820"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-27/20221"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>20221</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII E</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/821"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-28/20221"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>20222</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII A</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1093"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-24/20222"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>20222</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII B</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1094"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-25/20222"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>20222</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII C</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1095"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-26/20222"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>20222</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII D</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1096"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-27/20222"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>20222</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII E</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1097"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-28/20222"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>21</td>
                            <td>20231</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII A</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1276"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-24/20231"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>20231</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII B</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1277"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-25/20231"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>23</td>
                            <td>20231</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII C</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1278"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-26/20231"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>24</td>
                            <td>20231</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII D</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1279"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-27/20231"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>

                        <tr>
                            <td>25</td>
                            <td>20231</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>VIII E</td>
                            <td>
                                <a href="http://sipo.smpialazhar19.sch.id/n_pengetahuan/cetak/1280"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NP</a>
                                <a href="http://sipo.smpialazhar19.sch.id/n_keterampilan/cetak/6-28/20231"
                                    class="btn btn-info btn-xs" target="_blank">Cetak NK</a>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>
@endsection