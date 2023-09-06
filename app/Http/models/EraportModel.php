<?php 

namespace App\Http\Models;

use DB;

class EraportModel
{
    
    /**
     * Get one Master Courses data
     */
    public function getBySchoolToken($school_token)
    {
        $query = DB::select('SELECT 
                            `course`.`school_token` AS `school_token`,
                            `course`.`id` AS mapel_id,
                            `course`.`name` AS mapel_name,
                            `class`.`id` AS class_id,
                            `class`.`name` AS class_name
                            FROM `course`
                            LEFT JOIN `class` ON `class`.`school_token` = `course`.`school_token`
                            WHERE `course`.`school_token` = "'.$school_token.'"');
        
        $data = $query;
        return $data;
    }

    public function getTypeMapel($school_token)
    {
        return DB::table('mst_type')
                ->where('school_token', $school_token)
                ->get();
    }

}