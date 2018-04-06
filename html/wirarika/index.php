<!DOCTYPE html>
<?php if(isset($_POST['textarea1']) && isset($_POST['textarea2']) && isset($_POST['langue']) && $_POST['textarea2']!= null && $_POST['textarea1']!= null){
		$text1=trim(htmlspecialchars(Addslashes($_POST['textarea1'])));
		$text2=trim(htmlspecialchars(Addslashes($_POST['textarea2'])));
		$langue=htmlspecialchars(Addslashes($_POST['langue']));
		
		if(preg_match('/=/', $text1) or preg_match('/=/', $text2)){
		/*echo "egale trouvée".$text1;*/
		$errore = 1;
		}
		else{
		//echo "mal joué".$text1;
		
		$monfichier = fopen('fichier.txt', 'a+');
		$monfichier2 = fopen('fichier2.txt', 'a+');
		fputs($monfichier,"\n");
		fputs($monfichier2,"\n");
		if($langue=="wixspa"){
			fputs($monfichier,$text1.' = '.$text2);
			fputs($monfichier2,$text1.' = '.$text2);
		}
		if($langue=="spawix"){
			fputs($monfichier,$text2.' = '.$text1);
			fputs($monfichier2,$text2.' = '.$text1);
		}
		fclose($monfichier);
		fclose($monfichier2);
		}
		
}
?>	
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Wixarika Translator</title>


<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />


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
                                                <li><a href="#traductor">TRANSLATOR</a></li>
                                                <li><a href="#help">HELP</a></li>                                                
                                                <li><a href="#about">ABOUT</a></li>
												<li><a href="#admin">ADMINISTRATION</a></li>
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
        <h2 class="text-center"><strong>Translator</strong></h2>
          
        <main>  
			<div id="lesboutons">
				<button id="button1" class="btn button_selected">
				  Wixarika <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Spanish
				</button>
				<button id="button2" class="btn  button">
					Spanish <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Wixarika
				</button>
			  
			
			</div>
        
        
            
        						<form id="texta" action="index.php#traductor" method="post"></form>

			<div class="row">
				<div class="col-md-6">
					<!--Material textarea-->
					<div class="md-form">
						<textarea type="text" form="texta" name="textarea1" id="form7" class="md-textarea form-control" rows="7"></textarea>
						
					</div>
				</div>
				<div class="col-md-6">
					<!--Textarea with icon prefix-->
					<div class="md-form">
						<textarea type="text" form="texta" name="textarea2" id="form10" class="md-textarea form-control" rows="7" disabled></textarea>
					</div>
                </div>
			</div>
			<div class="row">
			<div class="col-md-6">
            <button id="translate" type="button" class="btn btn-primary">Translate</button>
			</div>
			<div class="col-md-6">
			<button id="corriger" type="button" class="btn btn-warning">Correct</button>
            <button id="valbtn"  type="button" class="btn btn-default" onclick="document.getElementById('texta').submit();" disabled>Validate the correction</button>            
			</div>
			</div>
 				<input type="text" name="langue" id="langue" value="wixspa" form="texta" style="visibility:hidden;"></input>

      </main>
        </div>
      </div>
    </div>
<!-- portfolio -->


	   
	   	<!--==========================
     help Section
    ============================-->
    <section id="help">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-2 order-1 text-center">
            <h2 class="title ">HELP</h2>
            <p>
To use the translator, enter phrases in wixarika,<br> taking care to use the characters ', +, ts and x.</br>
						To prove, we suggest some phrases:<br></br>
						<ul>
						
						<li>neki p+tuxa : mi casa blanca</li><br>
						<li>nets+k+ : mi perro</li><br>
						<li>nexari p+xeta : mi olla es roja</li> 
						
						</ul>
						           </p>

<div class="skillbar" style="visibility:hidden;"></div>

          </div>
				         		 <div class="col-lg-6 background order-lg-1 order-2 wow fadeInRight"></div>
								 						


        </div>

      </div>
    </section><!-- #help -->

	   
	<!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
 <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About The Huichol</h2>
            <p>
              The Huichol or Wixáritari (Huichol pronunciation: /wiˈraɾitaɾi/) are an indigenous people of Mexico living in the Sierra Madre Occidental range in the states of Nayarit, Jalisco, Zacatecas, and Durango. They are best known to the larger world as the Huichol, however, they refer to themselves as Wixáritari ("the people") in their native Huichol language. The adjectival form of Wixáritari and name for their own language is Wixárika.
            </p>


          </div>

         
        </div>

      </div>
    </section><!-- #about -->

<!-- admin -->


<div class="admin wowload fadeIn" id="admin">
<div class="row">
<div class="container">
    
    <div class="main">
            
        <div class="row">
        <div class="col-lg-6 content order-lg-1 order-2">
                    
            <h1><strong>Administration</strong></h1>
            <h2>Check the modification</h2>
			<?php 
				 if(isset($_GET['error']))
					 echo '	<div class="alert alert-warning">
The username and password you entered do not match those in our files.<br> Please check and try again.
							</div>';
			?>
            <form action="admin.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <div class="form-group">
                <div class="col-md-8"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername" required/></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword" required/></div>
                </div> 
                
                <div class="form-group">
					<div class="col-md-offset-0 col-md-8">
						<input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/>
					</div>
				</div>
            
            </form>
        </div>
		<div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight img-dessin"></div>
        </div>
        
    </div>
</div>
</div>
</div>

  <!-- admin -->







<div class="row">
<div class="col-xs-12">
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
   </div>   
</div>
</div>
   <!-- footer -->


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
		
