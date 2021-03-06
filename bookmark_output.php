<?php
require_once("sessions.php");
include("bookmark_functions.php");
function do_html_home()
{
  // print an HTML header
 $sess = new SessionManager();
 session_start();  
?>
<!DOCTYPE html>
<meta content="text/html;charset=UTF-8" http-equiv="content-type" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<title>Doczine | Bookmark List</title>
<meta name="Doczine.com" content="Doczine.com"/>
<meta name="keywords" content="documents, books, magazines, research paper, file conversion"/>
<!--META KEYWORDS-->
<meta name="author" content="Doczine.com"/>
<!--CSS FILES STARTS-->
<link rel="stylesheet" id="skins-switcher" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/pinterest.css">
<link rel="stylesheet" href="css/animation.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="footer/footer.css" type="text/css" media="screen" /><!-- Footer Stylings -->
<!-- The following code targets IE6 only and enables mouse hover on non-anchor tags -->
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="footer/htc/ie6.css" />
<![endif]-->
<link rel="Stylesheet" type="text/css" href="header/stickyheader.css" />
<script type="text/javascript" src="js/custom_jquery4.js"></script> <!-- Infinite scroll script -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
</head>
<body>
<?php
do_html_header_sticky();
?> 
	<div id="largeImage" class="largeContainer"></div>
<?php
}
function do_html_lower_home()
{
do_html_infinite_scroll();
?>
</div>
<?php
}
function do_html_footer_sticky() {
?>
<div id="footer"><!-- BEGIN FOOTER CONTAINER -->
    <ul id="footer_menu"><!-- Begin Footer Menu -->
        <li class="imgmenu"><a href=""></a></li><!-- This Item is an Image -->
        <li><a href="">Home Page</a><!-- Begin Second Menu Item -->
        </li><!-- End Second Menu Item -->    
        <li><a href="http://doczine.com/file_list.php?user=asdf">Your File List</a><!-- Begin Third Menu Item -->
            <ul class="dropup"><!-- Default Drop Up List -->
            </ul><!-- End Drop Up List -->
        </li><!-- End Third Menu Item -->
        <li><a href="http://upload.doczine.com/upload_form.php">Upload File</a></li>
        <li><a href="http://doczine.com/tag.php">Browse</a></li>
        <li><a href="http://doczine.com/user_form.php">Sign Up</a></li>
        <li><a href="http://doczine.com/filter.php">Most Viewed</a></li>
        <li class="right"><a href="http://doczine.com/login_form.php" class="drop">Log In</a></li>
    </ul><!-- End Footer Menu -->
    <p><a href="http://doczine.com">Doczine.com  </a> &copy; 2013</p>
    <ul id="social"><!-- Social Icons -->
    	<!-- The span is the text appearing on hover, use the tooltip class in the link -->
    </ul><!-- End Social Icons -->
</div><!-- END FOOTER CONTAINER -->
<?php
}
function do_html_header_sticky() {
?>
<div id="header" class="black"> <!-- BEGIN STICKY HEADER CONTAINER -->
    <ul id="menu"> <!-- BEGIN MENU -->
	    <li><a href="http://doczine.com/home.php"><img src='http://doczine.com/images/doczine.png' alt="" width="140" height="38"/></a></li>					
						<li><a href="http://upload.doczine.com/upload_form.php">Upload</a></li>
						<li><a href="http://doczine.com/tag.php">Browse</a></li>
						<li><a href="http://doczine.com/user_form.php">Sign Up</a></li>
        <li class="right"><a class="drop" href="">Sign in</a> <!-- SIGN IN MENU ALIGNED RIGHT -->
            <div class="column3container dropcontent align_right">
                <div class="column3">
    	               <form class="signin" id="sign-up-form" name="form" action="http://doczine.com/login.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                        	<p><label>Username</label><br />
                            <input id="username" type="text" size="28" name="username" /></p>
                            <p><label>Password</label><br />
                            <input id="password1" type="password" size="28" name="password" />
                            </p>
                            <button type="submit" name="submit" value="Submit">Sign in</button>
                        </fieldset>		
                    </form>
                </div>
            </div>
        </li>
        <li class="right separator"></li>
        <li class="search"> 
			<form accept-charset="utf-8" method="get" action="search.php">
			<input id="q" name="q" size="50" maxlength="255" style="height: 30px; width: 250px; font-size: 12px;" value="" type="text">
			<input name="searchsubmit" value="SEARCH" type="submit" style="height: 35px; width: 80px">
			</form>                
        </li>  
				<li><a hfre="#"></a></li>
				<li><a href="http://doczine.com/contact/theninjas.html">The Ninjas</a></li>
				<!-- END CONTAINER
				<li><a hfre="#">&</a></li>
				<li><a href="http://doczine.com/contact/EJ_Cajayon_Resume.html">EJ</a></li>
				-->
        </ul> <!-- END MENU -->        
</div> <!-- END CONTAINER -->
<?php
}
?>
