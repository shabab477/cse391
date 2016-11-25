<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.pink-red.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  <link rel="stylesheet" href="css/right_drawer.css" />
  <link rel="stylesheet" href="css/boot_card.css" />
	<style>

	.spaces
	{
		margin-left: 10%;
	}

  
	</style>

  <style>


</style>

</head>
<body>

	<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Welcome</span>

      <!--spacer to bring the rest elements after it to the right -->
      <div class="mdl-layout-spacer"></div>

      <div class="material-icons" id="notif">&#xE853;</div>
      <!--TODO: Sign up and sign in -->
     <!--  <nav class="mdl-navigation">
         <a class="mdl-navigation__link" href="" style="color:gray">Home</a>
         <a class="mdl-navigation__link" href="" style="color:gray">About</a>      
      </nav> -->
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Men's Accessories</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">Women's Accessories</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Children's Accessories</a>
    </div>
  </header>


  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>

	 <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE854;</i><span class='spaces'>My Cart</span></a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE87D;</i><span class='spaces'>Archives</span></a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE916;</i><span class='spaces'>Delivery Report</span></a>
      
    </nav>

  </div>

  <div class="mdl-layout__drawer-right">
        <span class="mdl-layout-title"><i id='right_drawer_close' class="material-icons">close</i></span>
        
        <nav>
          <a class='mdl-nav_right_link' href="#" >Home</a>
          <a class='mdl-nav_right_link' href="user/login.php" >Login</a>
          <a class='mdl-nav_right_link'  href="user/register.php" >Register</a>
          <a class='mdl-nav_right_link' href="" >Contact Us</a>
          <a class='mdl-nav_right_link' href="" >Developer Info</a>
        </nav>

  </div>

  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content">
      <!-- Your content goes here -->
      
      <div class="container"  id='men_acc'>
          
      </div>

      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content">
      <!-- Your content goes here -->
      <div class="container"  id='women_acc'>
          
      </div>  

      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content">
      <!-- Your content goes here -->
      <div class="container"  id='children_acc'>
          
      </div>
      </div>
    </section>
  </main>

  <div class="mdl-layout__obfuscator-right"></div>
</div>

<script type="text/javascript" src="js/right_drawer.js"></script>
<script type="text/javascript" src="js/adder.js"></script>
</body>
</html>