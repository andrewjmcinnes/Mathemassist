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
      Axes of Symmetry. The dotted line cuts this shape in half so that one half will fold exactly onto the other.  This is called a line of symmetry or axis of symmetry. Some shapes have more than one line of symmetry.

      Reflection. If you place a mirror on an axis of symmetry you can see the full shape.  This is called reflection. Reflection may be used to complete the missing half of a symmetrical shape. These shapes are said to have bilateral symmetry. The reflection of a point or a shape is called its image. The image of a point A under reflection in a line of symmetry is denoted by A dash. So P dash, Q dash and R dash are the images of P, Q, R.

      Rotational Symmetry. A shape which can be rotated about its central point to fit its own outline has rotational symmetry. A rectangle, given a half-turn about its centre, fits its own outline.  This is called half-turn symmetry. A rectangle can fit its own outline in 2 different positions, therefore it has rotational symmetry of order 2. A shape with quarter-turn symmetry has rotational symmetry of order 4.

      Rotation. A shape may be rotated about a fixed point.  An example of this is rotating each of the following shapes 180&#176; about two different fixed points.
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
    <a class="nav-link" data-toggle="tab" href="#axesofsymmetry">Axes of Symmetry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#reflection">Reflection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#rotationalsymmetry">Rotational Symmetry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#rotation">Rotation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="axesofsymmetry">
  <h5>Axes of Symmetry</h5>
  <div class="teachings">
    <p>The dotted line cuts this shape in half so that one half will fold exactly onto the other.  This is called a <b>line of symmetry</b> or <b>axis of symmetry.</b></p>
    <img src="http://localhost/mathemassist/assets/images/3/line_of_symmetry.jpg" alt="Line of Symmetry">
    <p>Some shapes have more than one line of symmetry.</p>
    <img src="http://localhost/mathemassist/assets/images/3/multiple_lines_of_symmetry.jpg" alt="Multiple Lines of Symmetry">
  </div>
</div>
<div class="tab-pane" id="reflection">
  <h5>Reflection</h5>
  <div class="teachings">
    <p>If you place a mirror on an axis of symmetry you can see the full shape.  This is called <b>reflection</b>.</p>
    <img src="http://localhost/mathemassist/assets/images/3/reflection.jpg" alt="Mirror Reflection">
    <p>Reflection may be used to complete the missing half of a symmetrical
    shape.
    These shapes are said to have <b>bilateral symmetry</b>.</p>
    <img src="http://localhost/mathemassist/assets/images/3/bilateral_symmetry.jpg" alt="Bilateral Symmetry">
    <p>The reflection of a point or a shape is called its <b>image</b>.  The image of a point A under reflection in a line of symmetry is denoted by A'.  So P', Q' and R' are the images of P, Q, R.</p>
    <img src="http://localhost/mathemassist/assets/images/3/shape_image.jpg" alt="The Image of a Shape">
  </div>
</div>
<div class="tab-pane" id="rotationalsymmetry">
  <h5>Rotational Symmetry</h5>
  <div class="teachings">
    <p>A shape which can be rotated about its central point to fit its own outline has <b>rotational symmetry</b>.</p>
    <img src="http://localhost/mathemassist/assets/images/3/rotational_symmetry.jpg" alt="Rotational Symmetry">
    <p>A rectangle, given a half-turn about its centre, fits its own outline.  This is called <b>half-turn symmetry</b>. A rectangle can fit its own outline in 2 different positions, therefore it has rotational symmetry of order 2. A shape with quarter-turn symmetry has rotational symmetry of order 4.</p>
    <img src="http://localhost/mathemassist/assets/images/3/shape_order.jpg" alt="Different Shape's Orders">
  </div>
</div>
<div class="tab-pane" id="rotation">
  <h5>Rotation</h5>
  <div class="teachings">
    <p>A shape may be rotated
    about a fixed point.  An example of this is rotating each of the following shapes 180&#176; about two different fixed points.</p>
    <img src="http://localhost/mathemassist/assets/images/3/rotation_a.jpg" alt="Rotation A">
    <img src="http://localhost/mathemassist/assets/images/3/rotation_b.jpg" alt="Rotation B">
  </div>
</div>
<div class="tab-pane" id="game">
  <h5>Picture Game</h5>
  <embed src="http://localhost/mathemassist/assets/Game3/index.html" width="650px" height="850px"></embed>
  <a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
</div>
</div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>