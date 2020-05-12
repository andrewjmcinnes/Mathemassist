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

<script type="text/javascript">
TimeMe.initialize({
    currentPageName: "chapter1pm", // page name
    idleTimeoutInSeconds: 30 // time before user considered idle
});
</script>
<div>
<a type="button" class="btn btn-secondary" id="backBtn" href="<?php echo base_url(); ?>home">Back to Overview</a>
<form id="speechForm" class="speech-form">
	<div class="form-group">
		<textarea id="text-input" hidden>
			Rounding. When using large numbers it is often useful to round them to give an approximation. What would you get if you rounded 2462 to the nearest ten? The answer would be 2460. What about rounding to the nearest hundred? For this one the answer would be 2500. Numbers which include decimals can be rounded using a similar method.

			Multiplying by Multiples of 10. To multiply a number by 10, move every digit one place to the left. To multiply a number by 100, move every digit two places to the left. You can use this to multiply by multiples of 10 and 100. For example to multiply by 200, you first multiply by 2, then by 100.

			Dividing by Multiples of 10. To divide a number by 10, move every digit one place to the right. To divide a number by 100, move every digit two places to the right. You can use this to divide by multiples of 10 and 100. For example to divide by 500, divide by 5, then by 100.

			Order of Operations. In Mathematics, the order in which you carry out a calculation is important. The order is shown here. Brackets Of, Divide, Multiple, Add, Subtract.
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
    <a class="nav-link" data-toggle="tab" href="#rounding">Rounding</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#multiplying">Multiplying by Multiples of 10</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dividing">Dividing by Multiples of 10</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#orderofoperations">Order of Operations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game1">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="rounding">
	<h5>Rounding</h5>
	<div class="teachings">
		<p>When using large numbers it is often useful to round them to give an approximation.</p>
		<p>What would you get if you rounded 2462 to the nearest ten?<br>
		=>2462 rounded to the nearest ten is 2460, as 2462 is closer to 2460 then 2470</p>
		<img src="http://localhost/mathemassist/assets/images/1/round_to_ten.jpg" alt="Rounding to the Nearest Ten">
		<p>What about rounding to the nearest hundred?<br>
		=>2462 rounded to the nearest hundred is 2500, as 2462 is closer to 2500 than 2400</p>
		<img src="http://localhost/mathemassist/assets/images/1/round_to_hundred.jpg" alt="Rounding to the Nearest Hundred">

		<p>Numbers which include decimals can be rounded using a similar method.</p>
		<p>How about rounding 42.625 to the nearest whole number?<br>
		Or the nearest decimal place?<br>
		Or even to the nearest 2 decimal places?<br>
		=> 42.625 is closer to 43 than to 42<br>
		=> 42.625 is closer to 42.6 than to 42.7<br>
		=> 42.625 is half way between 42.62 and 42.63 so the convention is to round up to 42.63</p>
		<img src="http://localhost/mathemassist/assets/images/1/round_decimals.jpg" alt="Rounding Decimal Numbers">
	</div>
</div>
<div class="tab-pane" id="multiplying">
	<h5>Multiplying by Multiples of 10</h5>
	<div class="teachings">
		<p>To multiply a number by 10, move every digit one place to the left. To multiply a number by 100, move every digit two places to the left.</p>
		<p>You can use this to multiply by multiples of 10 and 100</p>
		<p>To multiply by 200, multiply by 2 then by 100<br>
		43 &#215; 200<br>
		= 43 &#215; 2 &#215; 100<br>
		= 86 &#215; 100<br>
		= 8600</p>
	</div>
</div>
<div class="tab-pane" id="dividing">
	<h5>Dividing by Multiples of 10</h5>
	<div class="teachings">
		<p>To divide a number by 10, move every digit one place to the right. To divide a number by 100, move every digit two places to the right.</p>
		<p>You can use this to divide by multiples of 10 and 100</p>
		<p>To divide by 500, divide by 5 then by 100<br>
		25 ÷ 500<br>
		= 25 ÷ 5 ÷ 100<br>
		= 5 ÷ 100<br>
		= 0.05</p>
	</div>
</div>
<div class="tab-pane" id="orderofoperations">
	<h5>Order of Operations</h5>
	<div class="teachings">	
		<p>In Mathematics, the order in which you carry out a calculation is important. The order is shown here:<br>Brackets Of Divide Multiple Add Subtract</p>
		<p><br>By inserting brackets we can make the following calculations correct:</p>
		<p>5 + 4 &#215; 8 = 72<br>
		=> (5 + 4) &#215; 8 = 72</p>
		<p>24 ÷ 4 + 2 &#215; 7 = 28<br>
		=> 24 ÷ (4 + 2) &#215; 7 = 28</p>
	</div>
</div>
<div class="tab-pane" id="game1">
	<h5>Quiz Game</h5>
	<a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
	<embed src="http://localhost/mathemassist/assets/Game1/index.html" height="700" width="1000"></embed>
	
</div></div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>
<!-- <script type="text/javascript">
	function complete(){
		var time = TimeMe.getTimeOnCurrentPageInSeconds();

		var d = new Date();
	 	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	  	var expires = "expires="+d.toUTCString();

		document.cookie = "time="+ time+";" +expires+"; path=/;";

		alert('hi');
	}
</script> -->