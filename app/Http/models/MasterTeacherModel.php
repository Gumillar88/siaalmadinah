<?php 

namespace App\Http\Models;

use DB;

class MasterTeacherModel
{
    /**
     * Create Master Teacher data
     */
    public function create($data)
    {   
        return DB::table('teacher')->insertGetid($data);
    }

    /**
     * Get one Master Teacher data
     */
    public function getOne($id)
    {
        return DB::table('teacher')->where('id', $id)->first();
    }

    /**
     * Get All By Master Teacher data
     */
    public function getAll()
    {
        $data = DB::table('teacher')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Teacher data
     */
    public function getByCurrentYear()
    {
        $current_year = '1';
        return DB::table('teacher')
                ->where('current_year', $current_year)
                ->first();
    }

    /**
     * Update mst_Teacher data
     */
    public function update($id, $data)
    {
        DB::table('teacher')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Teacher data
     */
    public function remove($id)
    {
        DB::table('teacher')
            ->where('id', $id)
            ->delete();
    }
}