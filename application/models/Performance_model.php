<?php
class Performance_model extends CI_Model{
    //insert performance data
	public function set($chapter_id, $user_id){
        
        $data = array(
            'chapterId' => $chapter_id,
            'userId' => $user_id
            //'timeTaken' => $performance
            );

       	$this->db->replace('performance', $data);

       	return;
       	
    }

    //get performance data
    public function get_performance($user_id = FALSE){
        if($user_id === FALSE){
            show_404();
        }

        $query = $this->db->get_where('performance', array('userId' => $user_id));
        return $query->result_array();
    }
}