<h2><?= $title ?></h2>
<?php $teacher = "T" ?>
<div class="about">
<?php if((!$this->session->userdata('logged_in'))|($this->session->userdata('user_role') != $teacher)) : ?>
	<h3>Pupils</h3>
	<p>To create an account click on the Register link from either the Home screen or the navigation bar.  When registering; enter in your details, then select the checkbox confirming you are a pupil and enter the class code you received from your teacher.</p>
	<img src="http://localhost/mathemassist/assets/images/SignUp_Screen.jpg" alt="Sign Up Screen">
	<p>Once you have create an account, you can now sign in using the email and password you used when registering.  When you sign in, you will be taken to the Overview screen which shows all available chapters for you to undertake.  You may complete chapters in any order by proceeding through each tab of the chapter and reaching the game at the end.  Enjoy the game and when you are finished click the Complete Chapter button to save and take yourself back to the Overview.</p>
	<img src="http://localhost/mathemassist/assets/images/QuizGame_Screen.jpg" alt="Game">
	<p>If you struggle to make out the content of the chapters or it is causing confusion, you can change the appearance to best suit your needs by visiting the Preferences screen.  You can find this in the navigation bar.  Play around with the different combinations and when you find the right one, click Save, and the teaching material in the chapters will appear that way.  If you are still struggling with reading the content you can listen to it instead by choosing a voice and clicking Speak at the top right of every chapter.</p>
	<div class="images">
		<img id="one" src="http://localhost/mathemassist/assets/images/Preferences_Screen.jpg" alt="Preferences Screen">
		<img id="two" src="http://localhost/mathemassist/assets/images/SpeechSynthesizer.jpg" alt="Speech Synthesizer">
	</div>
	<hr>
<?php endif; ?>
<?php if((!$this->session->userdata('logged_in'))|($this->session->userdata('user_role') == $teacher)) : ?>
	<h3>Teachers</h3>
	<p>To create an account click on the Register link from either the Home screen or the navigation bar.  Once you have registered and signed in.  You can issue your class code to your pupils and allow them to join your class.  To find out your code, click Class Code in the navigation bar.</p>
	<img src="http://localhost/mathemassist/assets/images/ClassCode.jpg" alt="Class Code">
	<p>When you are signed in, you will be taken to the Overview screen which shows you all the pupils in your class.  You can then see the performance of an individual pupil but clicking See More next to their profile.  This will allow you to see what chapters each pupil has completed.  The chapters correspond to the chapters in the Scottish Secondary Mathematics R1 textbook.</p>
	<div class="images">
		<img id="one" src="http://localhost/mathemassist/assets/images/TeacherOverview_Screen.jpg" alt="Teacher Overview">
		<img id="two" src="http://localhost/mathemassist/assets/images/PupilPerformance_Screen.jpg" alt="Pupil Performance">
	</div>
<?php endif; ?>
</div>