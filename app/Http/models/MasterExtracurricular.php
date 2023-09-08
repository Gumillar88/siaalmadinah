<?php 

namespace App\Http\Models;

use DB;

class MasterExtracurricular
{
    public function __construct()
    {
        $this->school_token = session('school_token');
    }
    /**
     * Create Master Role data
     */
    public function create($data)
    {   
        return DB::table('extracurricular')->insertGetid($data);
    }

    /**
     * Get one Master Role data
     */
    public function getOne($id)
    {
        return DB::table('extracurricular')->where(['school_token'=>$this->school_token,'id'=>$id,'is_active'=>'1'])->first();
    }

    /**
     * Get All By Master Role data
     */
    public function getAll()
    {
        $data = DB::table('extracurricular')->where(['school_token'=>$this->school_token,'is_active'=>'1'])->get();
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
        DB::table('extracurricular')
            ->where(['school_token'=>$this->school_token,'id'=>$id])
            ->update($data);
    }

    /**
     * Remove Master Role data
     */
    public function remove($id)
    {
        DB::table('extracurricular')
            ->where(['school_token'=>$this->school_token,'id'=>$id])
            ->delete();
    }
}