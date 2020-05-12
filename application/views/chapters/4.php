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
      Equivalent Factions and Simplest Form. The numerator of a fraction is on the top and the denominator of a fraction is on the bottom.  Multiplying the numerator and denominator of a fraction by the same number gives an equivalent fraction. To simplify a fraction divide the numerator and denominator by the same number. To express a fraction in simplest form divide more than once if necessary.

      Multiplying Fractions. To multiply fractions, you must first simplify the fractions (if they are not already) into their simplest forms.  After that you multiply the numerators of the fractions to get the new numerator. Next you multiply the denominators of the fractions to get the new denominator. Finally you need to simplify the resulting fraction, if possible.

      Dividing Fractions. To divide any number by a fraction, you must multiply the number by the reciprocal of the fraction (which is the fraction turned upside down). Next, simplify the resulting fraction if possible. You can check your answer by multiplying the result you got by the divisor and be sure it equals the original dividend.

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
    <a class="nav-link" data-toggle="tab" href="#equivalentfractions">Equivalent Factions and Simplest Form</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#mulitplyingfractions">Multiplying Fractions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dividingfractions">Dividing Fractions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#game">Game</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active show" id="equivalentfractions">
  <h5>Equivalent Factions and Simplest Form</h5>
  <div class="teachings">
    <p>The <b>numerator</b> of a fraction is on the top and the <b>denominator</b> of a fraction is on the bottom.  Multiplying the numerator and denominator of a fraction by the same number gives an <b>equivalent fraction</b>.</p>
    <img src="http://localhost/mathemassist/assets/images/4/equivalent_x3.jpg" alt="Equivalent Fraction Multiplying by 3">
    <img src="http://localhost/mathemassist/assets/images/4/equivalent_x5.jpg" alt="Equivalent Fraction Multiplying by 5">
    <p>To simplify a fraction divide the numerator and denominator by the same number.</p>
    <img src="http://localhost/mathemassist/assets/images/4/simple_form.jpg" alt="Simpliying Form Dividing by 7">
    <p>To express a fraction in <b>simplest form</b> divide more than once if necessary.</p>
    <img src="http://localhost/mathemassist/assets/images/4/simplest_form.jpg" alt="Simplest Form">
  </div>
</div>
<div class="tab-pane" id="mulitplyingfractions">
  <h5>Multiplying Fractions</h5>
  <div class="teachings">
    <p>To multiply fractions, you must first simplify the fractions (if they are not already) into their simplest forms.  After that you multiply the numerators of the fractions to get the new numerator.  Next you multiply the denominators of the fractions to get the new denominator.  Finally you need to simplify the resulting fraction, if possible.</p>
  </div>
</div>
<div class="tab-pane" id="dividingfractions">
  <h5>Dividing Fractions</h5>
  <div class="teachings">
    <p>To divide any number by a fraction, you must multiply the number by the reciprocal of the fraction (which is the fraction turned upside down).  Next, simplify the resulting fraction if possible.  You can check your answer by mulitplying the result you got by the divisor and be sure it equals the original dividend.</p>
  </div>
</div>
<div class="tab-pane" id="game">
  <h5>Picture Game</h5>
  <embed src="http://localhost/mathemassist/assets/Game4/index.html" width="650px" height="850px"></embed>
  <a type="button" class="btn btn-primary" id="completeBtn" href="<?php echo base_url(); ?>Chapters/complete">Complete Chapter</a>
</div>
</div>

<script src="http://localhost/mathemassist/assets/js/speech.js"></script>