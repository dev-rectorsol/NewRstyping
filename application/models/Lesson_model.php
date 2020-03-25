<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Lesson_model extends CI_Model {



	//-- insert function

    public function insert($data,$table){

        $this->db->insert($table,$data);

        return true;

    }

    // Get  Information of Lesson for listing.

    function lessonList(){

    	$this->db->select('lesson.id as lessonId,lesson.lessonName,lesson.type,lesson.createdDate, courses.courseName');
    	$this->db->from('lesson');
    	$this->db->join('courses', 'lesson.courseId = courses.courseId');
        $this->db->order_by('lesson.id', 'desc');
    	$rec = $this->db->get();
    	return $rec->result_array();

    }

    // function lessonDelete($lessonId,$table){
    //     $this->db->delete($table,'lessonmode');
    //     $this->db->join('lessonmode', 'lesson.id = lessonmode.lessonId', 'left');
    //     print_r($this->db->last_query()); exit();
    // }
    function lessonDelete($id)
    {
        
        $sql = "delete lesson, lessonmode from lesson INNER JOIN lessonmode WHERE lesson.id = $id AND lessonmode.lessonId = lesson.id";
        $this->db->query($sql);
        return true;

        // $tables = array('lesson', 'lessonmode');
        // $this->db->where('lessonmode.lessonId', $id);
        // $this->db->where('lesson.id', $id);
        // $this->db->delete($tables);

        // print_r($this->db->last_query()); exit();



        // $this->db->from("lesson");
        // $this->db->join("lessonmode", "lesson.id = lessonmode.lessonId");
        // $this->db->where("lesson.id", $id);
        // $this->db->delete(array('lesson','lessonmode'));
        // print_r($this->db->last_query()); exit();

        // public function editLessonData($id){
    //     $this->db->select('*');
    //     $this->db->from('lesson');
    //     $this->db->join('lessonmode', 'lesson.id = lessonmode.lessonId', 'INNER');
    // }
    }

    public function LessonModeData($id,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('lessonId', $id);
        $rec = $this->db->get();
        return $rec->result_array();
    }


    

}



/* End of file Lesson_model.php */

/* Location: ./application/models/Lesson_model.php */ ?>

