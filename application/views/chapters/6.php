<?php if(!$this->session->userdata('logged_in')) :
  redirect('home');
endif; ?>

<h2><?= $title ?></h2>

<?php 
$size = $this->session->userdata('size_pref');
$spacing = $this->session->userdata('spacing_pref');
$font = $this->session->userdata('font_pref');
$fontColour = $this->session->userdata('fcolour_pref');
$bgColour = $this->session->userdata('bgcolour_pref');
?>

<style>
	.teachings p{
    font-size: <?php echo $size.'px'; ?>;
    letter-spacing: <?php echo $spacing.'px'; ?>;
    font-family: <?php echo $font; ?>;
    }
    .teachings{
	color: <?php echo $fontColour; ?>;
	background-color: <?php echo $bgColour; ?>;
    }
</style>

<div>
<a type="button" class="btn btn-secondary" id="backBtn" href="<?php echo base_url(); ?>home">Back to Overview</a>
<form id="speechForm" class="speech-form">
  <div class="form-group">
    <textarea id="text-input" hidden>
      Integers. Use a number line to help calculate with integers.

      Adding and Subtracting. When adding a positive integer, move right along the number line. When subtracting a positive integer, move left along the number line. When adding a negative integer, move left along the number line. When subtracting a negative integer, move right along the number line.

      Inequalities. An arrow pointing to the left means 'is less than'. An arrow pointing to the right means 'is greater than'. These symbols show an inequality.

    </textarea>
  </div>
  <div class="form-group">
        <select id="voice-select" class="form-control"></select>
      </div>
  <button class="btn btn-secondary" id="speakBtn">Speak</button>
</form>
</div>
<hr>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#integers">Integers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#addingandsubtracting">Adding and Subtracting</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inequalities">Inequalities</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="integers">
	<h5>Integers</h5>
	<div class="teachings">
		<p>The set of integer = {..., -3, -2, -1, 0, 1, 2, 3, ...}<br>
		Use a number line to help calculate with integers.</p>
		<img src="http://localhost/mathemassist/assets/images/6/set_of_integers.jpg" alt="The Set of Integers">
	</div>
</div>
<div class="tab-pane" id="addingandsubtracting">
	<h5>Adding and Subtracting</h5>
	<div class="teachings">
		<p>When adding a positive integer, move right along the number line.<br>
		(-6) + 2 = -4</p>
		<img src="http://localhost/mathemassist/assets/images/6/adding_pos.jpg" alt="Adding a Positive Integer" width="400" height="100">
		<p>When subtracting a positive integer, move left along the number line.<br>
		4 - 7 = -3</p>
		<img src="http://localhost/mathemassist/assets/images/6/subtracting_pos.jpg" alt="Subtracting a Positive Integer" width="400" height="100">
		<p>When adding a negative integer, move left along the number line.<br>
		6 + (-2) = 6 - 2 = 4</p>
		<img src="http://localhost/mathemassist/assets/images/6/adding_neg.jpg" alt="Adding a Negative Integer" width="400" height="100">
		<p>When subtracting a negative integer, move right along the number line.<br>
		-3 - (-5) = 3 + 5 = 8</p>
		<img src="http://localhost/mathemassist/assets/images/6/subtracting_neg.jpg" alt="Subtracting a Negative Integer" width="400" height="100">
	</div>
</div>
<div class="tab-pane" id="inequalities">
	<h5>Inequalities</h5>
	<div class="teachings">
		<p>< means 'is less than'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;> means 'is greater than'<br>
		3 < 7 means '3 is less than 7'&emsp;&emsp;&emsp;&emsp;&emsp;10 > 6 means '10 is greater than 6'</p>
		<p>These symbols show an inequality.</p>
	</div>
</div>
<div class="tab-pane" id="game">
	<h5>Quiz Game</h5>
	<a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
	<embed src="http://localhost/mathemassist/assets/Game6/index.html" height="700" width="1000"></embed>
</div>
</div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>