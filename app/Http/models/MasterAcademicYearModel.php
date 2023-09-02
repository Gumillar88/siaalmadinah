<?php 

namespace App\Http\Models;

use DB;

class MasterAcademicYearModel
{
    /**
     * Create Master Academic Year data
     */
    public function create($data)
    {   
        return DB::table('mst_academic_year')->insertGetid($data);
    }

    /**
     * Get one Master Academic Year data
     */
    public function getOne($id)
    {
        return DB::table('mst_academic_year')->where('id', $id)->first();
    }

    /**
     * Get All By Master Academic Year data
     */
    public function getAll()
    {
        $data = DB::table('mst_academic_year')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Academic Year data
     */
    public function getByCurrentYear()
    {
        $current_year = '1';
        return DB::table('mst_academic_year')
                ->where('current_year', $current_year)
                ->first();
    }

    /**
     * Update mst_Academic Year data
     */
    public function update($id, $data)
    {
        DB::table('mst_academic_year')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Academic Year data
     */
    public function remove($id)
    {
        DB::table('mst_academic_year')
            ->where('id', $id)
            ->delete();
    }
}