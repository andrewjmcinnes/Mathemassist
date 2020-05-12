<?php if(!$this->session->userdata('logged_in')) :
  redirect('home');
endif; ?>
<?php echo validation_errors(); ?>
<?php echo form_open('prefs/set'); ?>
  <h2><?= $title ?></h2>
  <h5>Please select the display options which best suit your needs</h5>

  <!--<pre>Font Size:        Font Spacing:</pre>-->
  <div class="form-group">
    <label>Font Size</label>
    <input type="range" class="form-control" id="size" name="size" value="18" min="12" max="24">
  </div>
  <div class="form-group">
    <label>Font Spacing</label>
    <input type="range" class="form-control" id="spacing" name="spacing" value="1" step="0.1" min="0.1" max="3">
  </div>
  <div class="form-group">
    <select class="form-control" id="fontFamily" name="fontFamily">
      <option value="arial" selected="selected">Arial</option>
      <option value="ms gothic">MS Gothic</option>
      <option value="calibri">Calibri</option>
      <option value="dubai light">Dubai Light</option>
      <option value="tw cen mt">Tw Cen MT</option>
      <option value="yu gothic light">Yu Gothic Light</option>
    </select>
    <div class="form-group">
      <label>Font Colour</label>
      <input type="color" id="fontColour" name="fontColour" value="#000000">
    </div>
    <div class="form-group">
      <label>Background Colour</label>
      <input type="color" id="bgColour" name="bgColour" value="#ffffff">
    </div>
  </div>


  <!--//show values of the preferences
  <p id="demo"></p>
  <p id="sp"></p>
  <p id="ff"></p>-->
  <div class="testText" id="testText" >This is some test text which you can use to find the configuration that best suits you. Have a play about with the sliders and the different options, then click “Apply to Test Text” to see what that combination looks like. Once you have found the one you like the most, click “Save Preferences” and the text of your teaching chapters will change according to your choices.</div>
  <div class="prefBtns">
    <button type="button" onclick="editText()" class="btn btn-primary">Apply to Test Text</button>
    <button type="submit" class="btn btn-primary">Save Preferences</button>
  </div>
  

  <script>
  //update the example text's styling
  function editText() {
    var size = document.getElementById("size").value;
    var spacing = document.getElementById("spacing").value;
    var font = String(document.getElementById("fontFamily").value);
    var fColour = document.getElementById("fontColour").value;
    var bColour = document.getElementById("bgColour").value;

    //document.getElementById("demo").innerHTML = x;
    //document.getElementById("sp").innerHTML = y;
    //document.getElementById("ff").innerHTML = z;
    document.getElementById("testText").style.fontSize = size + "px";
    document.getElementById("testText").style.letterSpacing = spacing + "px";
    document.getElementById("testText").style.fontFamily = font;
    document.getElementById("testText").style.color = fColour;
    document.getElementById("testText").style.backgroundColor = bColour;
  }
  </script>
  
<?php echo form_close(); ?>

