<?php 

namespace App\Http\Models;

use DB;

class MasterSchoolModel
{
    /**
     * Create Master School data
     */
    public function create($data)
    {   
        return DB::table('mst_school')->insertGetid($data);
    }

    /**
     * Get one Master School data
     */
    public function getOne($id)
    {
        return DB::table('mst_school')->where('id', $id)->first();
    }

    /**
     * Get All By Master School data
     */
    public function getAll()
    {
        $data = DB::table('mst_school')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master School data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('mst_school')
                ->where('school_level_id', $id)
                ->first();
    }

    /**
     * Update mst_school data
     */
    public function update($id, $data)
    {
        DB::table('mst_school')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master School data
     */
    public function remove($id)
    {
        DB::table('mst_school')
            ->where('id', $id)
            ->delete();
    }
}