<h2><?= $title ?></h2>
<?php $teacher = "T" ?>
<?php if(!$this->session->userdata('logged_in')) : ?>
	<h5>Welcome to Mathemassist.</h5>
	<p>Mathemassist is a web application designed to teach pupils, entering their first year of secondary school, Mathematics.  To get a better understanding of the functionality and usefulness of this application, visit the About page.<br><br></p>
	<p>Please register or log in to continue.</p>
	<button><a href="<?php echo base_url(); ?>users/login">Login</a></button>
	<button><a href="<?php echo base_url(); ?>users/register">Register</a></button>
	
<?php endif;
if($this->session->userdata('logged_in')) :
	if($this->session->userdata('user_role') == $teacher) :
		redirect('users/overview');
	endif;
	redirect('overview');
endif; ?>
