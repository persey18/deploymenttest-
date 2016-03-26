<?php
session_start();
if(!isset($_SESSION['myusername'])){ // Check if session is not registered, redirect back to main page. 
header("location:home3.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Richies Buns</title>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css"> <!-- this my css file . I put it here too override the bootstrap style sheets  -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js">  </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--was having problems making the website responsive on my mobile
    added this to make it work  -->

  

</head>

<body>
      <div id="logo"> <!-- this my my logo   -->
        <div class="row-fluid">
      	
    <a href="home3.html">       <!--  link back to homepage -->  
           <img class="img-responsive" src="images/logo7.png" alt="header"  /><!--  make logo responsive  -->

       </a>
   </div>
       </div>

        <nav id="myNavbar" class="navbar navbar-default" role="navigation"> <!-- Dafault Navbar from bootstrap -->
        <div class="container-fluid" id:"fullNav">  <!--i used container fluid to make the page fuller , i took inspiration from another site called http://www.blanco-nino.com/#about-1 which looks great on all screens  -->
        <div class="navbar-header">
        <button class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse" type="button"> <!--Data is an HTML5 data attribute that automatically hooks up the element to the type of widget it is.-->


        <span class="sr-only">Toggle navigation</span> <!-- The <span> tag provides a way to add a hook to a part of a text or a part of a document. -->
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        </button>
        
        
    </div>
    
    <div id="navbarCollapse" class="collapse navbar-collapse"> <!-- Navbar collapse makes the navbar close on smaller screens  -->
    <ul class=" nav navbar-nav navbar-left"> <!-- moves the navbar to the left  -->
    <li>
         
<li>
    <a target="" href="recipes.html">Hello <?php 

    if($_SESSION['myusername']) echo $_SESSION['myusername'];

    else echo "Username not set";?>   </a>
</li>

         <li class="dropdown">                 <!--Dropdown with an unorder list to arrange my navbar better and not clutter it up  -->
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Shop<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="buns.html">Buns</a></li> <!-- a href is the hyperlink tag , allows me to link all the pages -->
                <li><a href="Cakes.html">Cakes</a></li>
                <li><a href="BakedGoods.html">Baked Goods </a></li>
              
            </ul>
        </li>

<li>
</a>
</li>
<li>
    <a target="" href="recipes.html">Recipes</a>
</li>
 <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<b class="caret"></b></a>
            <ul class="dropdown-menu"> <!--Dropdown with an unorder list to arrange my navbar better and not clutter it up  -->
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
              
            </ul>
        </li>
</ul>
    <div class="bs-example pull-right">
    	 <!-- pulls the button to the right of the navbar  -->	 
    	 </div>
  
  <div class="bs-example pull-right">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#loginModal" class="btn btn-lg btn-custom" data-toggle="modal">Logout</a> <!-- gave it a class of btn-custom to change the colour -->
    
     <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Logout</h1>
      </div>
      <div class="modal-body">
          <form name="form1" method="post" action="php/logout.php">  <!--the form data is sent for processing to a PHP file named "checklogin.php". The form data is sent with the HTTP POST method. -->
          <form class="form col-md-12 center-block"> <!-- make form grid size 12 columns within the modal  -->
         
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Click here to logout</button>
            </form>
          </form>
      </div>
      <div class="modal-footer"> 
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> <!-- close the modal -->
          </div>    
      </div>
  </div>
  </div>
</div>
    </div>
            </div>    
            </div>
        
    </nav>  <!-- END OF NAV BAR -->
        
        <div class="container-fluid" id= "introCarousel"> <!--Make the Carousel nice and big -->
  <div class="row">
            <div class="col-xs-12 col-md-12"> <!-- 12 column on a small screen , 12 on a mdium and large screen  . want to make the carousel stand out  -->
<div id="carousel-example-generic" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators"> <!-- ordered list , choose which slide to move too-->
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
    
    <!-- resized the images to 1600x600 so they wouldnt look overstretched , i played around with placehold.it to look at the dimensions  -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"> <!-- makes this the first image -->
      <img src="images/rsz_cake12selection.jpg">
      <div class="carousel-caption">
       
      </div>
    </div>
        <div class="item">
      <img src="images/rsz_1bunchofbuns.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/rsz_1bun9.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
  </div>
 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">  <!-- left and right buttons -->
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
   </div>
   </div>
</div>
   
</div>

<div id="WelcomeHeading" class="title-desc-inner">
<h1> Welcome to Richie's Buns </h1>
</div>
  
    <div class="container-fluid" id="openParagraph">
  <div class="row">
            <div class="col-xs-12 col-md-12">
                <h2>We Deliver </h2>
                <p>Mei cu partiendo intellegat. At pericula incorrupte persequeris ius. Sale eripuit utroque eos eu, sea ei consul molestiae constituam, mei at wisi suavitate incorrupte. Paulo mentitum eam ei, mei ei populo recusabo. Id vel epicuri nostrum, omnium intellegam ne sea, ex velit inermis petentium mel. Sed et dicta nobis, mea ei facer populo.</p>
                    
                    <div id="overview">
                        <h3>Overview</h3>
                        <p>Ad sit tation viderer persequeris. Verear habemus ius ex, vim admodum evertitur prodesset eu, an vidit scripta nec. Cu idque putant pri, sint temporibus ei vim. Ei quis cotidieque sea, sale illum debet qui no. Everti mnesarchum ea sed, eu paulo graeco mea, graece delenit repudiandae et per.
Sea an semper impedit disputationi. Ad per summo ludus semper, duo sint nominavi et. Erat impetus gubergren cu eos. Elitr honestatis ut vel. In vim malis altera, bonorum apeirian volutpat ad per. Cu pri solum novum.
Dicta oportere no has, munere apeirian an pri. Ne his voluptua recusabo aliquando, omnis error no vix, sint esse reformidans ad vis. Eum ne quidam ancillae. Quod tation altera mei id, sit animal pericula ea, an vide aliquando vis. Nonumy accumsan appellantur usu an.
Te aeque discere fierent nam, pri in legimus utroque qualisque, prima error ne nam. Vis harum expetendis an, fugit propriae euripidis ex cum. Duo eius dissentias eu, sea ne probo velit tibique. Id simul saepe everti mea, mundi minimum patrioque ei ius.
Per ei saperet perfecto oportere, postea expetendis vituperata et eos. Possit mollis phaedrum eam in, ..</p>
                        
                    </div>
                    
            </div>
          
    </div>
    <div class="container-fluid" id="bottomSection"> <!-- some id i havent applied any css too , i did this so could easily change the design my website if needed at a later date -->
<div class="row">
            <div class="col-md-4"> <!-- makes the grid size 4 columns wide on a medium screen , these will stack on top of each other on a smaller screens  -->
                <h2>Buns</h2>
                <p>d sit tation viderer persequeris. Verear habemus ius ex, vim admodum evertitur prodesset eu, an vidit scripta nec. Cu idque putant pri, sint temporibus ei vim. Ei quis cotidieque sea, sale illum debet qui no. Everti mnesarchum ea sed,.</p>
                <p><a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank" class="btn btn-success">Check it out  &raquo;</a></p>
            </div>
           <div class="col-md-4">
                <h2>Cakes</h2>
                <p> d sit tation viderer persequeris. Verear habemus ius ex, vim admodum evertitur prodesset eu, an vidit scripta nec. Cu idque putant pri, sint temporibus ei vim. Ei quis cotidieque sea, sale illum debet qui no. Everti mnesarchum ea sed,</p>
                <p><a href="" target="_blank" class="btn btn-success">Yum &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Biscuits</h2>
                <p>d sit tation viderer persequeris. Verear habemus ius ex, vim admodum evertitur prodesset eu, an vidit scripta nec. Cu idque putant pri, sint temporibus ei vim. Ei quis cotidieque sea, sale illum debet qui no. Everti mnesarchum ea sed,.</p>
                <p><a href="" target="_blank" class="btn btn-success">Take a look &raquo;</a></p>
            </div>
        </div>
</div>
</body>
</html>
    