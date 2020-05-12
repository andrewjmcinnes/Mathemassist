<?php 

//set flash message for class code, with the database query for the value being on the other side of redirect
$this->session->set_flashdata('class_code', 'Your class code is: ');

//echo $this->session->userdata('class_id');
redirect('users/overview');
