<?php
class Web_model extends CI_Model {

	public function insert($data,$table){
        $this->db->insert($table,$data);
        return true;
    }

	public function allCourses($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
        $query = $query->result_array();
        return $query;
	}
	// Get all lesson by Course idate

	function lessonByCourseAndType($courseId,$type){
		$this->db->select('*');
		$this->db->from('lesson');
		$this->db->where('courseId', $courseId);
		$this->db->where('type', $type);
		$query = $this->db->get();
        $query = $query->result_array();
        return $query;
	}
	function lessonByCourse($courseId){
		$this->db->select('*');
		$this->db->from('lesson');
		$this->db->where('courseId', $courseId);
		$query = $this->db->get();
        $query = $query->result_array();
        return $query;
	}
}
