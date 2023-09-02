<?php 

namespace App\Http\Models;

use DB;

class MasterSchoolLevelModel
{
    /**
     * Create Master School Level data
     */
    public function create($data)
    {   
        return DB::table('mst_school_level')->insertGetId($data);
    }

    /**
     * Get one Master School Level data
     */
    public function getOne($id)
    {
        return DB::table('mst_school_level')->where('id', $id)->first();
    }

    /**
     * Get All By Master School Level data
     */
    public function getAll()
    {
        $data = DB::table('mst_school_level')->get();
        return $data;
    }
    
    /**
     * Get By id Master School Level data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('mst_school_level')
                ->where('id', $id)
                ->first();
    }

    /**
     * Update mst_school_level data
     */
    public function update($id, $data)
    {
        DB::table('mst_school_level')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master School Level data
     */
    public function remove($id)
    {
        DB::table('mst_school_level')
            ->where('id', $id)
            ->delete();
    }
}