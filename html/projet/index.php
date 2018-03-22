<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Wixarika Translator</title>





<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />



<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">


<!--For Plugins external css-->
<link rel="stylesheet" href="assets/css/plugins.css" />

<!--Theme custom css -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/style2.css">

<!--Theme Responsive css-->
<link rel="stylesheet" href="assets/css/responsive.css" />

<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="200">


    <div class="culmn">

       <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#home">HOME</a></li>
                                                <li><a href="#traductor">Translator</a></li>
                                                <li><a href="#help">Help</a></li>                                                
                                                <li><a href="#contact">CONTACT</a></li>
											</ul>
                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header>

      <!-- intro -->
      <div class="intro">
      <div class="fullpage">
        <div class="ab-wrap">
        <div class="ab-center">
          <div class="wowload fadeInDown">
          <img src="assets/images/logo.png" class="wowload rotateIn">
          <h1 class="title">Wixarika Translator</h1>
          <p>The Huichol language is an indigenous language of Mexico which belongs to the Uto-Aztecan language family.<br> It is spoken by the ethnic group widely known as the Huichol (self-designation Wixaritari).<br>
          </p>
          </div>
        </div>
        </div>
      </div>

      <a href="#traductor" class="anchor scroll wowload fadeInDownBig"><i class="fa fa-angle-down  fa-4x"></i></a>

      </div>
      <!-- intro -->


<!-- portfolio -->
    <div class="portfolio" id="traductor" >
      <div class="spacer">
        <div class="container">
        <h2 class="text-center">Translator</h2>
          
        <main>  
			<div id="lesboutons">
			  	
				<button id="button2" class="btn  button">
					Spanish <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Wixarika
				</button>

				<button id="button1" class="btn button_selected">
				  Wixarika <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Spanish
				</button>		  
			
			</div>
        
        
            
        
			<div class="row">
				<div class="col-md-6">
					<!--Material textarea-->
					<div class="md-form">
						<textarea type="text" id="form7" class="md-textarea form-control" rows="7"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<!--Textarea with icon prefix-->
					<div class="md-form">
						<textarea type="text" id="form10" class="md-textarea form-control" rows="7" disabled></textarea>
					</div>
                </div>
			</div>
		
            <button id="translate" type="button" class="btn btn-primary">Translate</button>
        
            <button id="corriger" type="button" class="btn btn-warning">Correct</button>
        
            <button id="valider" id="valbtn" disabled="true" type="button" class="btn btn-default">Validate the correction</button>
 
      </main>
        </div>
      </div>
    </div>
<!-- portfolio -->

  <div class="spacer" id="help">
<section > 
	<div class="container">
		<h2 class="text-center">Help</h2>
		<div class="row">
			<div class="col-sm-12">
				<div class="main_service_area">
					<div class="main_service_content">			
					
						
						<h3>To use the translator, enter phrases in wixarika,<br> taking care to use the characters ', +, ts and x.</br>
						To prove, we suggest some phrases:<br></br>
						<ul>
						
						<li>neki p+tuxa : mi casa blanca</li><br>
						<li>nets+k+ : mi perro</li><br>
						<li>nexari p+xeta : mi olla es roja</li> 
						
						</ul>
						</h3>
							
						<div class="skillbar" style="visibility:hidden;">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


       <!-- contact -->
       <div class="contact wowload fadeIn" id="contact">

       <div class="container">
       <h2 class="text-center">Contact us</h2>
       <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form>
                <div class="form-group">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name"> 
                </div>
                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" class="form-control" placeholder="Your Message" rows="5"></textarea>
                </div>                  
                <button type="submit" class="btn btn-warning"><i class="fa fa-send-o"></i> Submit</button>
            </form>
         
          </div>
        </div>
       </div>
       </div>
       <!-- contact -->


        <!-- footer -->
        <div class="footer text-center wowload fadeIn">
          <div class="social">
          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
          </div>
        It's a student project from Université Paris 13 thanks to the help of Mager Hois, Jesús Manuel, Ivan Vladimir and Jorge Garcia Flores.
		<br>
		Project based on Jesús Manuel Mager Hois work <a href="http://turing.iimas.unam.mx/wix/">http://turing.iimas.unam.mx/wix/</a> 
        </div>
   </div>     <!-- footer -->


<a href="#home" class="gototop scroll"><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
 
<!-- custom script -->
<script src="assets/script.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


</body>
</html>