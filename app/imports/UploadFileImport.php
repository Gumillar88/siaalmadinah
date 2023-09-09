<?php

namespace App\Imports;

use App\Http\Models\MasterCoursesModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\ToModel;

class UploadFileImport implements ToModel
{

    public function __construct()
    {
        $this->master_course    = new MasterCoursesModel();
    }

    /**
     * @param array $row
     *
     * @return Course|null
     */
    public function model(array $row)
    {
        dd($row);
        $data = [
           'name'     => $row[0],
           'email'    => $row[1], 
           'password' => Hash::make($row[2]),
        ];
        dd($data);
        $this->master_course->create($data);
        return $data;
    }
}