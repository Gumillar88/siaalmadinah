<?php 

namespace App\Http\Models;

use DB;

class MasterCoursesModel
{
    /**
     * Create Master Courses data
     */
    public function create($data)
    {   
        return DB::table('course')->insertGetid($data);
    }

    /**
     * Get one Master Courses data
     */
    public function getOne($id)
    {
        return DB::table('course')->where('id', $id)->first();
    }

    /**
     * Get All By Master Courses data
     */
    public function getAll()
    {
        $data = DB::table('course')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Courses data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('course')
                ->where('school_level_id', $id)
                ->first();
    }

    /**
     * Update class data
     */
    public function update($id, $data)
    {
        DB::table('course')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Courses data
     */
    public function remove($id)
    {
        DB::table('course')
            ->where('id', $id)
            ->delete();
    }
}