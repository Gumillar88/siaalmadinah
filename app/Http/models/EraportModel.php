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

    public function getDataByTypeId($type_id)
    {
        return DB::table('mst_type')
                ->where('id', $type_id)
                ->first();
    }

    public function getDataByMapelId($mapel_id)
    {
        return DB::table('course')
                ->where('id', $mapel_id)
                ->first();
    }

    public function getDataByClassId($class_id)
    {
        return DB::table('class')
                ->where('id', $class_id)
                ->first();
    }

    public function getDataCourses($type_id, $course_id, $class_id)
    {
        $data = DB::table('course_detail')
                ->where('class_id', $class_id)
                ->where('course_id', $course_id)
                ->where('type', $type_id)
                ->get();

        return $data;
    }

    public function getCourseClassStudentData($school_token, $course_id)
    {
        $query = DB::select("SELECT 
                `users`.`id` AS student_id,
                `users`.`name`,
                `course_scores`.`scores`
                FROM `course_class_user`
                LEFT JOIN `users` ON `users`.`id` = `course_class_user`.`student_id`
                LEFT JOIN `course_detail` ON `course_detail`.`id` = `course_class_user`.`course_id`
                -- left join `course_scores` on `course_scores`.`course_id` = `course_class_user`.`course_id`
                LEFT JOIN `course_scores` ON `course_scores`.`student_id` = `course_class_user`.`student_id`
                WHERE `course_class_user`.`school_token` = '".$school_token."'
                AND `course_class_user`.`course_id` = '".$course_id."'
                AND `users`.`role_id` = '2'");
        
        $data = $query;
        return $data;
    }
}