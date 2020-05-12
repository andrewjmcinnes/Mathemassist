<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2 class="text-center"><?= $title; ?></h2>
			<div class="form-group">
				<label>Name: (First Name and Initial)</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<label>Are you a pupil?</label>
				<input type="checkbox" class="form-control" id="isPupil" name="isPupil" value="true">
			</div>
			<div class="form-group">
				<label>Class Code:</label>
				<input type="text" class="form-control" id="classCode" name="classCode" placeholder="Class Code" disabled>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>

	<script>
		var checkbox = document.getElementById("isPupil");
		function validator(){
			if(checkbox.checked == false){
				document.getElementById("classCode").disabled = true;
			}else{
				document.getElementById("classCode").disabled = false;
			}
		}

		checkbox.addEventListener('click', validator);
	</script>
<?php echo form_close(); ?>