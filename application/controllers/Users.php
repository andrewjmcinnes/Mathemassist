<?php
	class Users extends CI_Controller{
		//register user
		public function register(){
			$data['title'] = 'Sign Up';
			
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');
			$this->form_validation->set_rules('classCode', 'Class Code', 'callback_check_class_exists');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else{
				// encrypt password
				$enc_password = md5($this->input->post('password'));

				//set user role value
				if($this->input->post('isPupil') == "true"){
					$userRole = "P";
					$classId = $this->input->post('classCode');
				} else {
					$userRole = "T";
					$classId = $this->user_model->create_class();
				}

				$this->user_model->register($enc_password, $userRole, $classId);

				//set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				
				redirect('overview');
			}
		}

		//log in user
		public function login(){
			$data['title'] = 'Sign In';
			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{
				//get email
				$email = $this->input->post('email');
				//get and encrypt password
				$password = md5($this->input->post('password'));
				//log in user
				$user_id = $this->user_model->login($email, $password);

				if($user_id){
					// create session
					$query = $this->db->get_where('users', array('userId' => $user_id));
					$user_role = $query->row(0)->role;
					$class_id = $query->row(0)->classId;
					$query2 = $this->db->get_where('preferences', array('userId' => $user_id));
					$sizePref = $query2->row(0)->sizePref;
					$spacingPref = $query2->row(0)->spacingPref;
					$fontPref = $query2->row(0)->fontPref;
					$fontColour = $query2->row(0)->fcolourPref;
					$bgColour = $query2->row(0)->bgcolourPref;

					$user_data = array('user_id' => $user_id, 'email' => $email, 'user_role' => $user_role, 'class_id' => $class_id, 'size_pref' => $sizePref, 'spacing_pref' => $spacingPref, 'font_pref' => $fontPref, 'fcolour_pref' => $fontColour, 'bgcolour_pref' => $bgColour, 'logged_in' => true);
					$this->session->set_userdata($user_data);

					//set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					
					redirect('home');
				} else{
					//set message
					$this->session->set_flashdata('login_failed', 'Login Invalid');

					redirect('users/login');
				}
			}
		}

		//log user out
		function logout(){
			//unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('user_role');

			//set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('home');
		}

		//check if email exists
		function check_email_exists($email){
		    $this->form_validation->set_message('check_email_exists', 'That email has already been used to create an account. Please use another one.');
		    if($this->user_model->check_email_exists($email)){
		        return true;
		    }else{
		        return false;
		    }
		}

		//check if class exists
		function check_class_exists($class){
		    $this->form_validation->set_message('check_class_exists', 'That class does not exist. Please eneter a valid code from your teacher.');
		    if($this->user_model->check_class_exists($class)){
		        return true;
		    }else{
		        return false;
		    }
		}

		//display users in class for overview
		function overview(){
			$data['title'] = 'Overview';
			
			//fetch users from database
			$data['users'] = $this->user_model->get_users();
			//print_r($data['users']);

			$this->load->view('templates/header');
			$this->load->view('pages/overview', $data);
			$this->load->view('templates/footer');
		}

		//display performance information of selected user
		public function view($user_id = NULL){
			$data['user'] = $this->user_model->get_users($user_id);
			$data['performance'] = $this->performance_model->get_performance($user_id);

			if(empty($data['user'])){
				show_404();
			}

			$data['title'] = $data['user']['userName'];

			$this->load->view('templates/header');
			$this->load->view('users/view', $data);
			$this->load->view('templates/footer');
		}
	}