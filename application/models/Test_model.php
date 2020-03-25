<?php
class Test_model extends CI_Model {

  function test_easy(){
    $this->db->select('id, modeId, time, lessonDesc');
    $this->db->from('lessonmode');
    $this->db->where('modeId', '1');
    $this->db->order_by('RAND()');
    $query = $this->db->get();
    return $query->row();
  }

  function test_high(){
    $this->db->select('id, modeId, time, lessonDesc');
    $this->db->from('lessonmode');
    $this->db->where('modeId', '3');
    $this->db->order_by('RAND()');
    $query = $this->db->get();
    return $query->row();
  }
  function test_medium(){
    $this->db->select('id, modeId, time, lessonDesc');
    $this->db->from('lessonmode');
    $this->db->where('modeId', '2');
    $this->db->order_by('RAND()');
    $query = $this->db->get();
    return $query->row();
  }

  function test_lesson($id, $mode){
    $this->db->select('id, modeId, time, lessonDesc');
    $this->db->from('lessonmode');
    $this->db->where('lessonId', $id);
    $this->db->where('modeId', $mode);
    $query = $this->db->get();
    return $query->row();
  }

  function testByCourse($courseId,$moeId){

    $this->db->select('lessonmode.id, lessonmode.modeId, lessonmode.time, lessonmode.lessonDesc');
    $this->db->from('lessonmode');
    $this->db->join('lesson', 'lessonmode.lessonId = lesson.id', 'inner');
    $this->db->where('lesson.courseId', $courseId);
    $this->db->where('lesson.type', 'english');
    $this->db->where('lessonmode.modeId',$moeId); 
    // $this->db->order_by('RAND()');
    $query = $this->db->get();
    return $query->row();
  }

  function testByCoursePara($courseId,$moeId){

    $this->db->select('lessonmode.id, lessonmode.modeId, lessonmode.time, lessonmode.lessonDesc');
    $this->db->from('lessonmode');
    $this->db->join('lesson', 'lessonmode.lessonId = lesson.id', 'inner');
    $this->db->where('lesson.courseId', $courseId);
    $this->db->where('lesson.type', 'english');
    $this->db->where('lessonmode.modeId',$moeId); 

    $query = $this->db->get();
    return $query->result();
  }

  // function paraByCourse($courseId,$paraId){

  //   $this->db->select('lessonmode.id, lessonmode.modeId, lessonmode.time, lessonmode.lessonDesc');
  //   $this->db->from('lessonmode');
  //   $this->db->join('lesson', 'lessonmode.lessonId = lesson.id', 'inner');
  //   $this->db->where('lesson.courseId', $courseId);
  //   $this->db->where('lesson.type', 'english');
  //   $this->db->where('lessonmode.id', $paraId);
  //   $query = $this->db->get();
  //   return $query->row();
  // }

  function testByCourseHindi($courseId,$modeId){

    $this->db->select('lessonmode.id, lessonmode.modeId, lessonmode.time, lessonmode.lessonDesc');
    $this->db->from('lessonmode');
    $this->db->join('lesson', 'lessonmode.lessonId = lesson.id', 'inner');
    $this->db->where('lesson.courseId', $courseId);
    $this->db->where('lesson.type', 'hindi');
    $this->db->where('lessonmode.modeId', $modeId);
    
    // $this->db->order_by('RAND()');
    $query = $this->db->get();
    return $query->row();
  }
  function testByCourseParaHindi($courseId,$modeId){
    $this->db->select('lessonmode.id, lessonmode.modeId, lessonmode.time, lessonmode.lessonDesc');
    $this->db->from('lessonmode');
    $this->db->join('lesson', 'lessonmode.lessonId = lesson.id', 'inner');
    $this->db->where('lesson.courseId', $courseId);
    $this->db->where('lesson.type', 'hindi');
    $this->db->where('lessonmode.modeId', $modeId);
    $query = $this->db->get();
    return $query->result();
  }

}



// SELECT lessonmode.`id`, lessonmode.`modeId`, lessonmode.`time`, lessonmode.`lessonDesc` FROM lessonmode INNER JOIN lesson ON lessonmode.`lessonId` = lesson.`id` WHERE lesson.`courseId` = 'junior_assistant';