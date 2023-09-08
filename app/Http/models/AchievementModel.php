<?php 

namespace App\Http\Models;

use DB;
use Session;

class AchievementModel
{
    public function __construct()
    {
        $this->school_token = session()->get('school_token');;
    }
    /**
     * Create Master Role data
     */
    public function create($data)
    {   
        return DB::table('student_achievement')->insertGetid($data);
    }

    /**
     * Get one Master Role data
     */
    public function getOne($id)
    {
        return DB::table('student_achievement')->where(['school_token'=>$this->school_token,'id'=>$id])->first();
    }

    /**
     * Get All By Master Role data
     */
    public function getAll()
    {
        // echo DB::table('student_achievement')->where(['school_token'=>$this->school_token])->toSql();
        // echo session()->get('school_token');
        // exit;
        $data = DB::table('student_achievement')->where(['school_token'=>$this->school_token])->get();
        // $output = [];
        // foreach ($data as $key => $value) {
        //     if ($key == 'pic') {
        //         $teacher = DB::table('teacher')->where(['id'=>$value,'is_active'=>'1'])->first();
        //         if (!empty($teacher)) {
        //             $output['pic_name'] = $teacher->name;
        //         }
        //         $output[$key] = $value;
        //     }else{
        //         $output[$key] = $value;
        //     }
        // }
        // return (object)$output;
        return $data;
    }

    /**
     * Update mst_Role data
     */
    public function update($id, $data)
    {
        DB::table('student_achievement')
        ->where(['school_token'=>$this->school_token,'id'=>$id])
        ->update($data);
    }

    /**
     * Remove Master Role data
     */
    public function remove($id)
    {
        DB::table('student_achievement')
        ->where(['school_token'=>$this->school_token,'id'=>$id])
        ->delete();
    }
}