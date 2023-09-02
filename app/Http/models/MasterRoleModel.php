<?php 

namespace App\Http\Models;

use DB;

class MasterRoleModel
{
    /**
     * Create Master Role data
     */
    public function create($data)
    {   
        return DB::table('mst_role')->insertGetid($data);
    }

    /**
     * Get one Master Role data
     */
    public function getOne($id)
    {
        return DB::table('mst_role')->where('id', $id)->first();
    }

    /**
     * Get All By Master Role data
     */
    public function getAll()
    {
        $data = DB::table('mst_role')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Role data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('mst_role')
                ->where('school_level_id', $id)
                ->first();
    }

    /**
     * Update mst_Role data
     */
    public function update($id, $data)
    {
        DB::table('mst_role')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Role data
     */
    public function remove($id)
    {
        DB::table('mst_role')
            ->where('id', $id)
            ->delete();
    }
}