<!doctype html>
<html>
    <head>
        <title>Mathemassist</title>
        <link rel="stylesheet" href="http://localhost/mathemassist/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/mathemassist/assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/mathemassist/assets/js/timeme.min.js"></script>
    </head>
    <!-- <body onbeforeunload="return complete()">-->
    <?php $teacher = "T" ?> 
    <script type="text/javascript" src="http://localhost/mathemassist/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/mathemassist/assets/js/bootstrap.min.js"></script>
    

    <nav class="navbar navbar-dark bg-primary">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand mb-0 h1" href="<?php echo base_url(); ?>home">Mathemassist</a>
        </div>

        <ul class="nav navbar-nav navbar-right">       
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="navi"><span class="navbar-toggler-icon"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a id="navi" href="<?php echo base_url(); ?>home">Home</a></li>
              <li><a id="navi" href="<?php echo base_url(); ?>about">About</a></li>
              <?php if(!$this->session->userdata('logged_in')) : ?>
                <li><a id="navi" href="<?php echo base_url(); ?>users/login">Login</a></li>
                <li><a id="navi" href="<?php echo base_url(); ?>users/register">Register</a></li>
              <?php endif; ?>
              <?php if($this->session->userdata('logged_in')) : ?>
                <?php if($this->session->userdata('user_role') == $teacher) : ?>
                  <li><a id="navi" href="<?php echo base_url(); ?>classId">Class Code</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('user_role') != $teacher) : ?>
                  <li><a id="navi" href="<?php echo base_url(); ?>prefs">Preferences</a></li>
                <?php endif; ?>
                <li><a id="navi" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
              <?php endif; ?>
            </ul>
          </li>
        </ul>
        
      </div>
    </nav>

    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('prefs_saved')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('prefs_saved').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('class_code')):?> 
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('class_code').$this->session->userdata('class_id').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('chapter_complete')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('chapter_complete').'</p>'; ?>
      <?php endif; ?>


