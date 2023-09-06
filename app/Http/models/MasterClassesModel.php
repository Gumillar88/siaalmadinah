<?php 

namespace App\Http\Models;

use DB;

class MasterClassesModel
{
    /**
     * Create Master Classes data
     */
    public function create($data)
    {   
        return DB::table('class')->insertGetid($data);
    }

    /**
     * Get one Master Classes data
     */
    public function getOne($id)
    {
        return DB::table('class')->where('id', $id)->first();
    }

    /**
     * Get All By Master Classes data
     */
    public function getAll()
    {
        $data = DB::table('class')->get();
        return $data;
    }
    
    /**
     * Get By school_level_id Master Classes data
     */
    public function getBySchoolLevelid($id, $name)
    {
        return DB::table('class')
                ->where('school_level_id', $id)
                ->first();
    }

    public function getBySchoolToken($school_token)
    {
        return DB::table('class')
                ->where('school_token', $school_token)
                ->get();
    }

    /**
     * Update class data
     */
    public function update($id, $data)
    {
        DB::table('class')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove Master Classes data
     */
    public function remove($id)
    {
        DB::table('class')
            ->where('id', $id)
            ->delete();
    }
}