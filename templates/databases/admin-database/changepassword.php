<?php
session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($Self->storage('user_id'))){
	$Self->redirect("/login"); 
	/*Redirect Browser*/
}


$Mysqli = new Apps\MysqliDb;
$user = $Self->storage('user_id');
$Mysqli->where("user_id",$user);
$row  = $Mysqli->getOne('members');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Putting customers' needs as a top priority and earning a spot as one of the world's best online gold platforms">
	<meta name="keywords" content="gold, Titan, resources">

    <title>Titan Gold Resources | Welcome</title>

	<!-- css files -->
	<link rel="stylesheet" href="<?= $assets ?>css/database.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?= $assets ?>css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

</head>
<body data-spy="scroll" data-target=".navbar-collapse">


<!-- top header with logo only -->
<header>
	<div class="database_top">
		<div class="database_logo">
			<a href="/admin_database/database" ><img src="<?= $assets ?>images/sgr_logo.png" alt="Titan Gold Resources" /></a>
		</div>
		<div class="menu">
			<a href="javascript:void(0);" onclick="toggle_visibility('myToggle');">MENU</a>
		</div>
	</div>
</header>

<!-- other sections -->
<section>
	<div class="database_container">
		<div class="database_sidebar" id="myToggle">
			<nav class="nav_database">
				<ul>
					<li><a href="/admin_database/database">MY PERSONAL ACCOUNT</a></li>
					<li><a href="/database/viewprofile" class="current">VIEW MY PROFILE</a></li>
					<li><a href="/database/goldassets">MY GOLD ASSETS</a></li>
					<li><a href="/database/merge">MERGE WITH PARTNER</a></li>
					<li><a href="/database/tandc">TERMS & CONDITIONS</a></li>
					<li><a href="/database/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</div>
		
		<div class="database_content">
			<div id="top_content_first">
				<p>Please, kindly edit the fields you want to change. Any field that is not to be changed should be left as it is. Thanks.</p>
				<hr>
			</div>
			
			<div id="top_content_third">				
				<div class="profile_form">
					<form action="/forms/admin_database/changepassword" method="POST" name="RegisterForm" id="RegisterForm" enctype="multipart/form-data">
						<label>OLD PASSWORD:</label>
						<input name="old_password" type="text" id="old_password" value="<?php echo $row["password"]; ?>" required />
						<label>NEW PASSWORD:</label>
						<input name="new_password" type="text" id="new_password" required />
						<br>
						<br>
						<input type="submit" name="submit" class="buttonsneh" value="CHANGE PASSWORD" />
					</form>
				</div>
				
				<div class="edit_kong">
					<a href="/admin_database/database"><div id="transactBar">GO BACK</div></a>
				</div>
			</div>
			
			<!-- divider section -->			
			<div class="under_gee">
				<div style="height:10px;"></div>
				<hr>
			</div>	
			
			<!-- copyright section -->
			<div class="footer_glow">
				<p>Copyright &copy 2021 Titan Gold Resources</p>
			</div>
		</div>
	</div>
</section>


<!-- javascript js -->	
<script src="<?= $assets ?>js/jquery.js"></script>
<script src="<?= $assets ?>js/bootstrap.min.js"></script>	
<script src="<?= $assets ?>js/nivo-lightbox.min.js"></script>
<script src="<?= $assets ?>js/smoothscroll.js"></script>
<script src="<?= $assets ?>js/jquery.menu.js"></script>
<script src="<?= $assets ?>js/jquery.nav.js"></script>
<script src="<?= $assets ?>js/isotope.js"></script>
<script src="<?= $assets ?>js/imagesloaded.min.js"></script>
<script src="<?= $assets ?>js/custom.js"></script>

</body>
</html>