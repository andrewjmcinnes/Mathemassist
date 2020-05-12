<?php
class Chapter_model extends CI_Model{
	//query database to get chapters
	public function get_chapters($chapter_id = FALSE){
        if($chapter_id === FALSE){
        	$query = $this->db->get('chapter');
        	return $query->result_array();
        }

        $query = $this->db->get_where('chapter', array('chapterId' => $chapter_id));
        return $query->row_array();

    }

}