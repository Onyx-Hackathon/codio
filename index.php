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
 nav {display:none;}

 div.fixed {
    position: fixed;
    top: 20;
    right: 80;
    
    border: 0px solid #73AD21;
    padding:5px;
}
</style>
<br>
<div class="fixed">
            <div class="dropdown" style="float:left; margin-right:10px;">
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">&nbsp;<span class="glyphicon glyphicon-th-large" ></span>&nbsp;</a>
              <ul class="dropdown-menu">
                <li><a href="code.php?op=viewall">View</a></li>
                <li><a href="submit-code.php">Submit</a></li>
                <li><a href="run.php">Run</a></li>
              </ul>
            </div>  
             <?php if (isset($_SESSION["name"]))
            {echo "<div class='dropdown' style='float:right;'>";
             echo "<a  class='btn btn-primary' href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>";
              echo $_SESSION["name"];
              echo "<span class='caret'></span></a>";
              echo "<ul class='dropdown-menu'>";
              echo "<li><a href='user.php?op=profile'>Profile</a></li>";
              echo "<li><a href='user.php?op=submissions'>My Submissions</a></li>";
              //echo "<li><a href='#'>My Favorites</a></li>";
              echo "<li role='separator' class='divider'></li>";
              echo "<li class='dropdown-header'>Current Session</li>";
              echo "<li><a href='user.php?op=logout'>Logout</a></li>";
              echo "</ul>";
              echo "</div>";
            }
            else
            {
              echo '<div style="float:right;"><form role="form" class="form" action="user.php" method="get">';
              echo '<input type="hidden" name="op" value="login">
                    <div class="input-group">';
              echo '<input type="submit" value="Login" class="btn btn-primary">';
              echo '</div></form></div>';
            }
            ?>
</div>
<div class="page-header" style="border:none;">
  
  <center><img src="base/pics/codio.png" width=40%></center>
</div>

<div class="col-md-12" style="padding-bottom:80px;">
<div class="col-md-8" style="margin:0 auto; float:none;">

<form role="form" class="form" action="code.php" method="get" style="width:100%;">
  <input type="hidden" name="op" value="search">
  
   <div class="input-group input-group-lg">
      <input type="text" class="form-control" placeholder="Search code..." name="q">
      <span class="input-group-btn">
        <input type="submit" value="Search" class="btn btn-primary">
      </span>
    </div><!-- /input-group -->
</form>
</div>

</div>

<?php include_once("base/footer.php");?>