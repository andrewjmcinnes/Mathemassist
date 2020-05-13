<h2>Pupil: <?= html_escape($title) ?></h2>
<br>
<div class="user-performance">
	<h5>Completed Chapters: </h5>
	<?php if(empty($performance)){
		echo 'No Chapters Currently Completed';
	} ?>
	<?php foreach($performance as $p) : ?>
		<div class="row">
			<div class="col-md-9">
					<?php echo 'Chapter '.$p['chapterId']; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<br><br>
<a type="button" class="btn btn-secondary" id="backBtn" href="<?php echo base_url(); ?>home">Back to Overview</a>
