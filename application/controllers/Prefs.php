<?php
	class Prefs extends CI_Controller{
		//set preferences
		public function set(){
			$data['title'] = 'Preferences';

			$this->form_validation->set_rules('size', 'Font Size', 'required');
			$this->form_validation->set_rules('spacing', 'Font Spacing', 'required');
			$this->form_validation->set_rules('fontFamily', 'Font Family', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('prefs/set', $data);
				$this->load->view('templates/footer');
			} else{
				//cast values of elements to variables
				$id = $this->session->userdata('user_id');
				$size = $this->input->post('size');
				$spacing = $this->input->post('spacing');
				$font = $this->input->post('fontFamily');
				$fontColour = $this->input->post('fontColour');
				$bgColour = $this->input->post('bgColour');
				$this->prefs_model->set($id, $size, $spacing, $font, $fontColour, $bgColour);

				//set session data
				$pref_data = array('size_pref' => $size, 'spacing_pref' => $spacing, 'font_pref' => $font, 'fcolour_pref' => $fontColour, 'bgcolour_pref' => $bgColour);
				$this->session->set_userdata($pref_data);

				//set message
				$this->session->set_flashdata('prefs_saved', 'Your preferences have now been saved');
			
				redirect('overview');
			}
			

			
			
		}
	}