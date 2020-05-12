<h2><?= $title ?></h2>
<?php $teacher = "T" ?>
<?php if(!$this->session->userdata('logged_in')) : 
	redirect(home);
endif; ?>
<?php if($this->session->userdata('user_role') == $teacher) : ?>
	<h3>Teacher</h3>
	<?php foreach($users as $user) : ?>
		<h5><?php echo $user['userName']; ?> </h5>
		<div class="row" >
			<div class="col-md-3">
				<img src="http://localhost/mathemassist/assets/images/user.jpeg" alt="User" width="50" height="50">
			</div>
			<div class="col-md-9" >
				<small><?php echo $user['role']; ?></small>&nbsp;&nbsp;
				<?php echo $user['email']; ?>
				<p><a class="btn btn-default" href="<?php echo site_url('/users/view/'.$user['userId']); ?>">User's Performance</a></p>
			</div>
		</div>
	<?php endforeach; ?>

<?php endif; ?>
<?php if($this->session->userdata('user_role') !== $teacher) : ?>
	<h3>Pupil</h3>
	<?php foreach($chapters as $chapter) : ?>
		<h5><?php echo $chapter['chapterId']; ?> </h5>
		<div class="row">
			<div class="col-md-3">
				<img src="http://localhost/mathemassist/assets/images/book.jpeg" alt="Chapter" width="50" height="50">
			</div>
			<div class="col-md-9">
				<?php echo $chapter['chapterName']; ?>
				<p><a class="btn btn-default" href="<?php echo site_url('/chapters/'.$chapter['chapterId']); ?>">Begin</a></p>
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

<!--<p><?php echo $this->session->userdata('user_role')?></p>-->

	