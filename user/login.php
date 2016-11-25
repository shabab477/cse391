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

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.pink-red.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  <link rel="stylesheet" href="../css/right_drawer.css" />
  <link rel="stylesheet" href="../css/login.css" />

</head>
<body>

	<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Login</span>

      <!--spacer to bring the rest elements after it to the right -->
      <div class="mdl-layout-spacer"></div>

      <div class="material-icons" id="notif">&#xE853;</div>
      <!--TODO: Sign up and sign in -->
     <!--  <nav class="mdl-navigation">
         <a class="mdl-navigation__link" href="" style="color:gray">Home</a>
         <a class="mdl-navigation__link" href="" style="color:gray">About</a>      
      </nav> -->
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
          <a class='mdl-nav_right_link' href="../index.php" >Home</a>
          
          <a class='mdl-nav_right_link' href="#" >Login</a>
          <a class='mdl-nav_right_link'  href="register.php" >Register</a>
          <a class='mdl-nav_right_link' href="" >Contact Us</a>
          <a class='mdl-nav_right_link' href="" >Developer Info</a>
        </nav>

  </div>


  <main class="mdl-layout__content">

  <div class="page-content">
    <div class="container-fluid">
    
    <div class="row">
      
      <div class="col-sm-12">
        <p class="text-center title-header">Credentials</p>
        
      </div>

    </div>

    <div class="row">
      
      <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center title-content">Hello! This is where you provide us with your email and password to login. If you haven't made an account with us then no worries. Simply click on this <a href="#">link</a> and register yourself to start your journey with us!</p>
        
      </div>

    </div>


    <form action="#">
      <div class="row">
        <div class="form-group">
        

          <div class="col-sm-4 col-sm-offset-4">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="email">
            <label class="mdl-textfield__label" for="email">Email</label>
            </div>
            <span class="mdl-textfield__error">Input is not an email!</span>        
          </div>

        </div>
        
        
      </div>
      
      <div class="row">
        <div class="form-group">
        

          

          <div class="col-sm-4 col-sm-offset-4">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="password" id="password">
              <label class="mdl-textfield__label" for="password">Password</label>
              
            </div>        
          </div>




        </div>
        
        
      </div>


      <div class="row">
        <div class="form-group">
        

          

          <div class="col-sm-4 col-sm-offset-4">
            
            <button type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Login
            </button>

          </div>




        </div>
        
        
      </div>

    </form>
    <!-- Numeric Textfield with Floating Label -->
    <form action="#">
      
    </form>
    
    </div>

  </div>

  </main>
    
  <div class="mdl-layout__obfuscator-right"></div>
</div>

<script type="text/javascript" src="../js/right_drawer.js"></script>

</body>
</html>