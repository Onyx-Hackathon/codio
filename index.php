<?php include_once("base/header.php");?>

<style>
body{background:<?php echo getSetting("index_bg");?>; color:white;}
.panel{color:black; border:none;}
.alert-info{background:<?php echo getSetting("index_footer_bg");?>; color:white; border:0; padding:20px; margin-top:50px;}
.alert-info  a {color:white; text-decoration: none;} 

 .panel-index .panel-heading{color:#fff; background-color:<?php echo getSetting("index_panel_heading");?>!important;}
 .panel-index .panel-heading .badge{color:#3d174d;background-color:#fff}

 .btn-primary{color:#fff;background-color:<?php echo getSetting("index_button");?>;border:none;}
 .btn-primary.focus,.btn-primary:focus{color:#fff;background-color:<?php echo getSetting("index_button_hover");?>;}
 .btn-primary:hover{color:#fff;background-color:<?php echo getSetting("index_button_hover");?>;}
 .btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:<?php echo getSetting("index_button_active");?>;}

 .btn-primary .badge{color:#337ab7;background-color:#fff}
</style>
<br><br>
<div class="page-header" style="border:none;">
  <h1 style="text-align:center;"><small>Hello <?php echo $_SERVER['REMOTE_ADDR']; ?><br/> </small>Welcome to Codio.in</h1><br/>
</div>

<div class="col-md-12" style="padding-bottom:60px;"><div class="col-md-8" style="margin:0 auto; float:none; padding-bottom:50px;">
<img src="base/pics/mac.gif" style="width:100%;" >
</div>
<div style="text-align: center;">
<a href="submit-code.php" class="btn btn-success btn-lg">Submit Code </a>
<a href="code.php?op=viewall" class="btn btn-primary btn-lg">View Code </a>
</div>
</div>


<div class="page-header" style="border:none;">
  <h1 style="text-align:center;">FAQ</h1><br/>
</div>



<div class="col-md-4">
<div class="panel panel-index effect8">
  <div class="panel-heading"><h3 class="panel-title">What can you do here?</h3></div>
    <img src="base/pics/code.jpg" style="width:100%;">
  <div class="panel-body">

    <p>
			We have made this platform for the developers and the curious people to submit and search the codes.
			The developers can make an awesome algorithm and program and share it online. The code can be in any
			Language, when there is so much awesome code in a place, then people can make amazing applications with it.<br><br>
	</p>
  </div>
</div>
</div>


<div class="col-md-4">
<div class="panel panel-index effect8">
  <div class="panel-heading"><h3 class="panel-title">So Just that?</h3></div>
  <img src="base/pics/future.png" style="width:100%;">
  <div class="panel-body">
    
    <p>
		We are also planning on expanding our platform for the developers and users to be able to create accounts and
		log into our platform, for a more personalised experience. We will Also allow developers to submit full applications
		which will also have discussion section and screenshots and rating system and much more.
	</p>
	<a href="#contact" class="btn btn-lg btn-primary" style="width:100%;">Contact Us</a>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-index effect8">
  <div class="panel-heading"><h3 class="panel-title">We want people to Build Apps</h3></div>
  <div class="panel-body">
    <img src="base/pics/apps.png" style="width:100%;">
    <br><br>
    <p>
		We actually want the world to make great applications, but the complexity of making an application starting from
		scratch is what bothers most! We will make it easier to search for the right code, quickly so the developers can
		spend more time in developing and less in searching.
	</p>
  </div>
</div>
</div>

<div class="col-md-12">
<div class="panel panel-index effect8">
  <div class="panel-heading"><h3 class="panel-title">You can Submit or View any Language you like!</h3></div>
  <div class="panel-body">
    <p>
		You might be expert in java but your friend likes c++ more, no worries, we support many programming languages and 
			you and your friend can both submit or view the codes they want in the languages they want.<br><br>
			<a href="code.php?op=filter&amp;fvar=lang&amp;fval=java" class="btn btn-default">Java</a>
			<a href="code.php?op=filter&amp;fvar=lang&amp;fval=c++" class="btn btn-default">C++</a>
			<a href="code.php?op=filter&amp;fvar=lang&amp;fval=c" class="btn btn-default">C</a>
			<a href="code.php?op=filter&amp;fvar=lang&amp;fval=php" class="btn btn-default">PHP</a>
	</p>
  </div>
</div>
</div>



<?php include_once("base/footer.php");?>