<?php
class Chapters extends CI_Controller{

	//display all chapters in overview
	function overview(){
		$data['title'] = 'Overview';
		
		//fetch all chapters from database
		$data['chapters'] = $this->chapter_model->get_chapters();

		$this->load->view('templates/header');
		$this->load->view('pages/overview', $data);
		$this->load->view('templates/footer');
	}

	//view selected chapter
	public function view($chapter_id = NULL){
		//fetch selected chapter information
		$data['chapter'] = $this->chapter_model->get_chapters($chapter_id);

		if(empty($data['chapter'])){
			show_404();
		}
		$data['title'] = $data['chapter']['chapterId'].": ".$data['chapter']['chapterName'];
		//print_r($data['title']);

		//create cookie for storing chapter id
		$cookieData = array(
			'name' => 'chapter',
			'value' => $chapter_id,
			'expire' => '1800' 
		);
		set_cookie($cookieData);

		$this->load->view('templates/header');
		$this->load->view('chapters/'.$chapter_id, $data);
		$this->load->view('templates/footer');
	}

	//complete chapter
	public function complete(){
			//fetch cookie data for pupil's performance
			$chapter_id = get_cookie('chapter');
			$performance = get_cookie('time');
			$user_id = $this->session->userdata('user_id');

			$cookieData = array(
			'name' => 'performance',
			'value' => $performance,
			'expire' => '1800' 
			);
			set_cookie($cookieData);
			//print_r($performance);

			//send performance data to model
			$this->performance_model->set($chapter_id, $user_id);

			//set message
			$this->session->set_flashdata('chapter_complete', 'Congratulations, you have completed this chapter');

			//redirect user back to overview
			redirect('home');
			
		}
}