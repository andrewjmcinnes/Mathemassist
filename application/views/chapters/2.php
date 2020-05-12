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
			Sequence. A sequence is a list of numbers which are in a particular order.  The numbers in a sequence are called terms.  Each term is connected to the next using the same rule. An example of this would be the following sequence. Starting from the first term being 0, you have to add 5 to each time to get to the next term. 0, 5, 10, 15, 20, 25, etc.

			Multiples and Factors. The multiples of 8 are 8, 16, 24, 32, 40, 48, and so on. The multiples of 6 are 6, 12, 18, 24, 30, 36, and so on. The lowest number common to both lists is 24, so it is the lowest common multiple of 8 and 6. The factors of 45 are 1, 3, 5, 9, 15, 45. The factors of 30 are 1, 2, 3, 5, 6, 10, 15, 30. The biggest number common to both lists is 15, so it is the highest common factor of 45 and 30.

			Prime Numbers and Factors. A prime number has exactly two factors.  A prime factor is a factor which is also a prime number. The prime factors of 30 are 2, 3 and 5. The prime factors of 48 are 2 and 3.

			Square and Cubic Numbers. To square a number, multiply it by itself. The square numbers are 1, 4, 9, 16, 25, 36, 49, and so on. To cube a number, multiply it by itself and then by itself again. The cubic numbers are 1, 8, 27, 64, 125, and so on.
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
    <a class="nav-link" data-toggle="tab" href="#sequence">Sequence</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#multiplesandfactors">Multiples and Factors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#primenumbersfactors">Prime Numbers and Factors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#squarecubicnumbers">Square and Cubic Numbers</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="sequence">
	<h5>Sequence</h5>
	<div class="teachings">
		<p>A sequence is a list of numbers which are in a particular order.  The numbers in a sequence are called terms.  Each term is connected to the next using the same rule.</p>
		<p>An example of this would be the following sequence. Starting from the first term being 0, you have to add 5 to each time to get to the next term.<br>
		0, 5, 10, 15, 20, 25, ...</p>
	</div>
</div>
<div class="tab-pane" id="multiplesandfactors">
	<h5>Multiples and Factors</h5>
	<div class="teachings">
		<p>The multiples of 8 are 8, 16, 24, 32, 40, 48, ...<br>
		The multiples of 6 are 6, 12, 18, 24, 30, 36, ...<br>
		The lowest number common to both lists is 24<br>
		Therefore 24 is the <b>lowest common multiple</b> of 8 and 6
		</p>
		<p>The factors of 45 are 1, 3, 5, 9, 15, 45<br>
		The factors of 30 are 1, 2, 3, 5, 6, 10, 15, 30<br>
		The biggest number common to both lists is 15<br>
		Therefore 15 is the <b>highest common factor</b> of 45 and 30
		</p>
	</div>
</div>
<div class="tab-pane" id="primenumbersfactors">
	<h5>Prime Numbers and Factors</h5>
	<div class="teachings">
		<p>A prime number has exactly two factors.  A prime factor is a factor which is also a prime number.</p>
		<p>To find the prime factors of 30:</p>
		<img src="http://localhost/mathemassist/assets/images/2/factors_30.jpg" alt="The Prime Factors of 30">
		<p>The prime factors of 30 are 2, 3 and 5</p>
		<p>To find the prime factors of 48:</p>
		<img src="http://localhost/mathemassist/assets/images/2/factors_48.jpg" alt="The Prime Factors of 48">
		<p>The prime factors of 48 are 2 and 3</p>
	</div>
</div>
<div class="tab-pane" id="squarecubicnumbers">
	<h5>Square and Cubic Numbers</h5>
	<div class="teachings">
		<p>To square a number, multiply it by itself.<br>
		8&#178; = 8 &#215; 8 = 64<br>
		64 is called a square number<br>
		The square numbers are 1, 4, 9, 16, 25, 36, 49, ...</p>
		<p>To cube a number, multiply it by itself and then by itself again.<br>
		2&#179; = 2 &#215; 2 &#215; 2 = 8<br>
		8 is called a cubic number<br>
		The cubic numbers are 1, 8, 27, 64, 125, ...</p>
	</div>
</div>
<div class="tab-pane" id="game">
	<h5>Drag and Drop Game</h5>
	<a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
	<p class="teachings">Look at the following numbers and assign them into the appropriate boxes.</p>
	<embed src="http://localhost/mathemassist/assets/Game2/index.html" height="800" width="800"></embed>
	
</div>
</div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>