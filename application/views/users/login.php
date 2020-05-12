<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2 class="text-center"><?php echo $title; ?></h2>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Enter Email" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
	
<?php echo form_close(); ?>