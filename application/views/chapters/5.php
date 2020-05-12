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
      Naming Angles. An angle is formed where two arms meet at a vertex. In the following diagram: The red angle is called &#8736;ABC, or &#8736;CBA.  The blue angle is called &#8736;CBD, or &#8736;DBC. The green angle is called A B D, or DBA.

      Types of Angles. One right angle is 90&#176;. Any two lines which form a right angle are said to be perpendicular. Four right angles fitted together make a complete turn which is 360&#176;. An angle between 0&#176; and 90&#176; is called an acute angle.  An angle between 90&#176; and 180&#176; is called an obtuse angle. Two right angles fitted together make a straight angle which is 180&#176;.  An angle between 180&#176; and 360&#176; is called a reflex angle.

      Angle Facts. Complementary angles add together to give 90&#176;. Supplementary angles add together to give 180&#176;. The sum of the angles of a triangle is 180&#176;. Vertically opposite angles are equal. Corresponding angles are equal. Alternate angles are equal.

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
    <a class="nav-link" data-toggle="tab" href="#namingangles">Naming Angles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#typesofangles">Types of Angles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#anglefacts">Angle Facts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="namingangles">
	<h5>Naming Angles</h5>
	<div class="teachings">
		<p>An angle is formed where two <b>arms</b> meet at a <b>vertex</b>.</p>
		<img src="http://localhost/mathemassist/assets/images/5/angle_diagram.jpg" alt="Diagram of an Angle">
		<p>In the following diagram: The red angle is called &#8736;ABC or &#8736;CBA.  The blue angle is called &#8736;CBD or &#8736;DBC.  The green angle is called &#8736;ABD or &#8736;DBA.</p>
		<img src="http://localhost/mathemassist/assets/images/5/naming_angles.jpg" alt="Naming Angles">
	</div>
</div>
<div class="tab-pane" id="typesofangles">
	<h5>Types of Angles</h5>
	<div class="teachings">
		<p>One <b>right angle</b> is 90&#176;.  Any two lines which form a right angle are said to be <b>perpendicular</b>.  Four right angles fitted together make a <b>complete turn</b> which is 360&#176;.</p>
		<img src="http://localhost/mathemassist/assets/images/5/perpendicular.jpg" alt="Perpendicular Lines">
		<p>An angle between 0&#176; and 90&#176; is called an <b>acute angle</b>.  An angle between 90&#176; and 180&#176; is called an <b>obtuse angle</b>.  Two right angles fitted together make a <b>straight angle</b> which is 180&#176;.  An angle between 180&#176; and 360&#176; is called a <b>reflex angle</b>.</p>
		<img src="http://localhost/mathemassist/assets/images/5/angle_types.jpg" alt="Different Types of Angles">
	</div>
</div>
<div class="tab-pane" id="anglefacts">
	<h5>Angle Facts</h5>
	<div class="teachings">
	  	<p>Complementary angles add together to give 90&#176;.</p>
		<img src="http://localhost/mathemassist/assets/images/5/complementary_angles.jpg" alt="Complementary Angles" width="125" height="125">
		<p>Supplementary angles add together to give 180&#176;.</p>
		<img src="http://localhost/mathemassist/assets/images/5/supplementary_angles.jpg" alt="Supplementary Angles" width="125" height="125">
		<p>The sum of the angles of a triangle is 180&#176;.</p>
		<img src="http://localhost/mathemassist/assets/images/5/triangle_angles.jpg" alt="Angles of a Triangle">
		<p>Vertically opposite angles are equal.</p>
		<img src="http://localhost/mathemassist/assets/images/5/opposite_angles.jpg" alt="Opposite Angles">
		<p>Corresponding angles are equal.  &#8736;ACG = &#8736;CDF.</p>
		<img src="http://localhost/mathemassist/assets/images/5/corresponding_angles.jpg" alt="Corresponding Angles">
		<p>Alternate angles are equal.  &#8736;EDC = &#8736;DCG.</p>
		<img src="http://localhost/mathemassist/assets/images/5/alternate_angles.jpg" alt="Alternate Angles">
		<p>Angles in a polygon.</p>
		<img src="http://localhost/mathemassist/assets/images/5/polygon_angles.jpg" alt="Polygon Angles">
	</div>
</div>
<div class="tab-pane" id="game">
	<h5>Drag and Drop Game</h5>
	<a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
	<p class="teachings">Look at the following diagram and assign the statements below into the correct boxes.</p>
	<img src="http://localhost/mathemassist/assets/images/5/game_image.jpg" alt="Game Image">
	<br>
	<embed src="http://localhost/mathemassist/assets/Game5/index.html" height="800" width="800"></embed>
	
</div>
</div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>