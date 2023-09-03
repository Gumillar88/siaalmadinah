<?php 

namespace App\Http\Models;

use DB;

class MasterEmployeeModel
{
    /**
     * Create Master Employee data
     */
    public function create($data)
    {   
        return DB::table('users')->insertGetid($data);
    }

    /**
     * Get one Master Employee data
     */
    public function getOne($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }

    /**
     * Get All By Master Employee data
     */
    public function getAll()
    {
        $data = DB::table('users')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Employee data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('users')
                ->where('school_level_id', $id)
                ->first();
    }

    /**
     * Update class data
     */
    public function update($id, $data)
    {
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Employee data
     */
    public function remove($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
    }
}