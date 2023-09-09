<?php

namespace App\Helpers;

use DB;
use App\Http\Models\MasterSchoolModel;

class AppHelpers
{
    /**
     * Class Contructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->master_school    = new MasterSchoolModel();

    }

    public function _getAllUsersData()
    {
        $result = DB::table('users')->get();

        $data   = [
            '0' => '(none)'
        ];

        foreach ($result as $item)
        {
            $data[$item->id] = $item->first_name;
        }

        return $data;
    }

    /**
     * Get All Master School data
     */
    public function _getAllMasterSchoolData()
    {
        $result = $this->master_school->getAll();

        $data   = [
            '0' => '(none)'
        ];

        foreach ($result as $item)
        {
            $data[$item->id] = $item->name;
        }

        return $data;
    }

    public function _getAllMasterSchoolLevelData()
    {
        $result = DB::table('mst_school_level')->get();

        $data   = [
            '0' => '(none)'
        ];

        foreach ($result as $item)
        {
            $data[$item->id] = $item->name;
        }

        return $data;
    }

    public function _getAllMasterSchoolByTokenData()
    {
        $result = DB::table('mst_school')->get();

        $data   = [];

        foreach ($result as $item)
        {
            $data[$item->token] = $item->name;
        }

        return $data;
    }

    public function _getAllMasterTeacherData()
    {
        $result = DB::table('users')->get();

        $data   = [];

        foreach ($result as $item)
        {
            $data[$item->id] = $item->name;
        }

        return $data;
    }

    public function _getAllMasterRoleByIdData()
    {
        $result = DB::table('mst_role')->get();

        $data   = [];

        foreach ($result as $item)
        {
            $data[$item->id] = $item->name;
        }

        return $data;
    }

    public function _getListScoreStudents($results)
    {
        $data = '';
        $data = '<table class="table table-condensed table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th width="60%">Nama</th>
                            <th width="30%">Nilai</th>
                        </tr>
                    </thead>
                <tbody>';
        
        foreach ($results as $key => $value) {
            $data .= '<tr>
                        <td>'.++$key.'</td>
                        <td>'.$value->name.'</td>
                        <td>
                        <input name="id_siswa[]" type="hidden" value="'.$value->student_id.'">
                        <input name="nilai[]"
                                type="number" min="0" max="100" class="form-control input-sm" value="'.$value->student_id.'"
                                required=""></td>
                    </tr>';
        }

        $data = '</tbody>
            </table>';

        echo json_encode($data);
    }

}