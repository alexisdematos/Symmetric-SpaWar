<?php
	if (!empty($_POST))
	{
		
		 if(isset($_POST['a_recup'])){
			 //affiche la ligne (-1)
			 // echo $_POST['a_recup'].'<br>';
			$ligne=$_POST['a_recup'];
			// 1 : ouverture des fichier
			$monfichier = fopen('../fichier.txt', 'a+');
			$monfichier2 = fopen('../fichier2.txt', 'a+');
			$monfichierC = fopen('../corpus.wixes', 'a+');
			
			//trouver la ligne a ajouter dans corpus.txt et donc a supprimer de fichier.txt et fichier2.txt
			$i=-1;
			while($i != $ligne){
			$ligne1 = fgets($monfichier);
			$ligne2 = explode("=", $ligne1);
			$i++;
				}
			//echo pour voir si on a bien la  bonne ligne 
			// echo $ligne1.'<br>';
			
			//mettre fichier corpus a la ligne
			fputs($monfichierC,"\n");
			//rajouter la ligne dans corpus.txt
			fputs($monfichierC, $ligne2[0].'='.$ligne2[1]);
			
			//supprimer tout dans fichier.txt
			ftruncate($monfichier,0);
			
				// 2 : calcul du nombre de ligne dans fichier2.txt 
				$contenu_fichier = file_get_contents('../fichier2.txt');
				$nb_ligne_fichier = substr_count($contenu_fichier, "\n");
				//echo pour test si on a bien le bon nombre de ligne dans fichier2 (-1)
				//echo $nb_ligne_fichier;
				
				//echo de la ligne choisis pour etre sur
				//echo $ligne;
				//on va parcourir de j=0 a j= nb de ligne dans fichier2 pour mettre tout les ligne de fichier2 dans fichier sauf la ligne qu'on a mis dans corpus
				$j=0;
				 while($j<=$nb_ligne_fichier){
					//echo "<br>".$j."<br>";
					//echo "<br>".$ligne."<br>";
					if($j != $ligne){
						$ligne3 = fgets($monfichier2);
						//echo "<br>".$ligne3."<br>";
						$ligne4 = explode("=", $ligne3);
						if(isset($ligne4[1])){
						fputs($monfichier,$ligne4[0].'='.$ligne4[1]);
						}
					}
					else{
						$ligne3 = fgets($monfichier2);
					}
					$j++; 
					
				 }
			fclose($monfichier);
			$monfichier = fopen('../fichier.txt', 'a+');
			ftruncate($monfichier2,0);
					// 2 : calcul du nombre de ligne dans fichier.txt 
				$contenu_fichier = file_get_contents('fichier.txt');
				$nb_ligne_fichier = substr_count($contenu_fichier, "\n");
				//echo pour test si on a bien le bon nombre de ligne dans fichier (-1)
				//echo $nb_ligne_fichier;
				
				//echo de la ligne choisis pour etre sur
				//echo $ligne;
				//on va parcourir de j=0 a j= nb de ligne dans fichier pour mettre tout les ligne de fichier dans fichier2 sauf la ligne qu'on a mis dans corpus
				$j=0;
				 while($j<=$nb_ligne_fichier){
					// echo "<br>".$j."<br>";
					// echo "<br>".$ligne."<br>";
						
						$ligne3 = fgets($monfichier);
						// echo "<br>".$ligne3."<br>";
						$ligne4 = explode("=", $ligne3);
						if(isset($ligne4[1])){
						fputs($monfichier2,$ligne4[0].'='.$ligne4[1]);
						}
					$j++; 
					
				 }
				

			 
			 //c'est fini on ferme les fichiers
			 fclose($monfichierC);
			 fclose($monfichier);
			 fclose($monfichier2);
		//SUPPRESSION 	 
		}elseif(isset($_POST['a_recup2'])) {
			$ligne = $_POST['a_recup2'];
			$monfichier = fopen('../fichier.txt', 'a+');
			$monfichier2 = fopen('../fichier2.txt', 'a+');
		
			//supprimer tout dans fichier.txt
			ftruncate($monfichier,0);
			
				// 2 : calcul du nombre de ligne dans fichier2.txt 
				$contenu_fichier = file_get_contents('../fichier2.txt');
				$nb_ligne_fichier = substr_count($contenu_fichier, "\n");
				//echo pour test si on a bien le bon nombre de ligne dans fichier2 (-1)
				//echo $nb_ligne_fichier;
				
				//echo de la ligne choisis pour etre sur
				//echo $ligne;
				//on va parcourir de j=0 a j= nb de ligne dans fichier2 pour mettre tout les ligne de fichier2 dans fichier sauf la ligne qu'on a mis dans corpus
				$j=0;
				 while($j<=$nb_ligne_fichier){
					//echo "<br>".$j."<br>";
					//echo "<br>".$ligne."<br>";
					if($j==$nb_ligne_fichier && $j==$ligne){
						
					}					
					if($j != $ligne){
						$ligne3 = fgets($monfichier2);
						//echo "<br>".$ligne3."<br>";
						$ligne4 = explode("=", $ligne3);
						if(isset($ligne4[1])){
						fputs($monfichier,$ligne4[0].'='.$ligne4[1]);
						}
					}
					else{
						$ligne3 = fgets($monfichier2);
					}
					$j++; 
					
				 }
			fclose($monfichier);
			$monfichier = fopen('../fichier.txt', 'a+');
			ftruncate($monfichier2,0);
					// 2 : calcul du nombre de ligne dans fichier.txt 
				$contenu_fichier = file_get_contents('../fichier.txt');
				$nb_ligne_fichier = substr_count($contenu_fichier, "\n");
				//echo pour test si on a bien le bon nombre de ligne dans fichier (-1)
				//echo $nb_ligne_fichier;
				
				//echo de la ligne choisis pour etre sur
				//echo $ligne;
				//on va parcourir de j=0 a j= nb de ligne dans fichier pour mettre tout les ligne de fichier dans fichier2 sauf la ligne qu'on a mis dans corpus
				$j=0;
				 while($j<=$nb_ligne_fichier){
					// echo "<br>".$j."<br>";
					// echo "<br>".$ligne."<br>";
						
						$ligne3 = fgets($monfichier);
						// echo "<br>".$ligne3."<br>";
						$ligne4 = explode("=", $ligne3);
						if(isset($ligne4[1])){
						fputs($monfichier2,$ligne4[0].'='.$ligne4[1]);
						}
					$j++; 
					
				 }
				

			 
			 //c'est fini on ferme les fichiers
			 fclose($monfichier);
			 fclose($monfichier2);
		
		
		
		}
		else{
			$safe_username = htmlspecialchars(Addslashes($_POST["username"]));
		$safe_password = htmlspecialchars(Addslashes($_POST["password"]));
			if(sha1(sha1("supersalt")+sha1($safe_password)) != sha1(sha1("supersalt")+sha1("wixarikaparis13")) 
			or 
			sha1(sha1("supersalt")+sha1($safe_username)) != sha1(sha1("supersalt")+sha1("adminhuichol"))
		){
			header('Location: index.php?error=true#admin');
		}
		}
	}
	else{
		header('Location: index.php?error=true#admin');
	}
	
	
		
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Traductor Wixarika</title>





<!-- animate.css -->
<link rel="stylesheet" href="../assets/animate/animate.css" />



<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/magnific-popup.css">


<!--For Plugins external css-->
<link rel="stylesheet" href="../assets/css/plugins.css" />

<!--Theme custom css -->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/style2.css">

<!--Theme Responsive css-->
<link rel="stylesheet" href="../assets/css/responsive.css" />

<script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<!-- favicon -->
<link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
<link rel="icon" href="../assets/images/logo.png" type="image/x-icon">


<link rel="stylesheet" href="../assets/style.css">

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
                                                <li><a href="#home">INICIO</a></li>
                                                <li><a href="#validation">SECCION DE VALIDACION</a></li>                                                
												<li><a href="index.php">DESCONEXION</a></li>
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
          <img src="../assets/images/logo.png" class="wowload rotateIn">
          <h1 class="title">Traductor Wixarika</h1>
          <p>Sala de administración<br>Gracias por compartir tu conocimiento.<br>
          </p>
          </div>
        </div>
        </div>
      </div>

      <a href="#traductor" class="anchor scroll wowload fadeInDownBig"><i class="fa fa-angle-down  fa-4x"></i></a>

      </div>
      <!-- intro -->


<!-- Validation section -->
    <div class="portfolio" id="validation" >
      <div class="spacer">
        <div class="container">
        <h2 class="text-center">Seccion de validacion</h2>
          
        <main>  
			 <table class="table table-hover ">
    <thead>
      <tr>
        <th>Wixarika</th>
        <th>Español</th>
        <th class="text-right">Validacion</th>
      </tr>
    </thead>
    <tbody>
      
	  <?php

// 1 : ouverture du fichier
$monfichier = fopen('fichier.txt', 'a+');

// 2 : calcul du nombre de ligne - 1
$contenu_fichier = file_get_contents('fichier.txt');
$nb_ligne_fichier = substr_count($contenu_fichier, "\n")."<br>";


// 3 : on fera ici nos opérations sur le fichier...
$i=0;
while($i <= $nb_ligne_fichier){?>
	 <form id="test<?php echo $i;?>" action="admin.php" method="post">
				<input type="hidden" name="a_recup" value="<?php echo $i;?>" style="height:0;"/>
			</form>
			<form id="test2<?php echo $i;?>" action="admin.php" method="post">
				<input type="hidden" name="a_recup2" value="<?php echo $i;?>" style="height:0;"/>
			</form>
			<?php 
	echo "<tr id=".$i.">";
	$ligne = fgets($monfichier);
	$ligne1 = explode("=", $ligne);
	if(isset($ligne1[1])){
echo '<td id="middle">'.$ligne1[0].'</td>'; // piece1
echo '<td id="middle">'.$ligne1[1].'</td>'; // piece2
	?>
			<td id="middle" class="text-right"><div class="btn-group">
			<button type="button" 
			class="btn-actiona btn btn-primary dropdown-toggle" data-toggle="dropdown">
			Acción <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" id="backgroundwhite" role="menu">
			
			
				<li><a href="#" onclick="document.getElementById('test<?php echo $i;?>').submit();">Añadir</a></li>
				<li class="divider"></li>
				<li><a href="#" onclick="document.getElementById('test2<?php echo $i;?>').submit();">Borrar</a></li>
			<?php echo'</ul>
</div>
	  </td>';
	}
	  $i++;
	echo "</tr >";
}
/*
$monfichierC = fopen('corpus.wixes', 'a+');

//rajoute le bail
 fputs($monfichierC, "\n"); 
 fputs($monfichierC, 'blabla');
 fclose($monfichierC);
*/



// 4 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);



?>
        
        
      
      
    </tbody>
  </table>

      </main>
        </div>
      </div>
    
<!-- validation section -->

<div class="skillbar" style="visibility:hidden;"></div>




        <!-- footer -->
        <div class="footer text-center wowload fadeIn">
          <div class="social">
          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
          </div>
Es un proyecto de estudiante de la Université Paris 13 gracias a la ayuda de Mager Hois, Jesús Manuel, Ivan Vladimir y Jorge García Flores.
		<br>
		Proyecto basado en el trabajo de Jesús Manuel Mager Hois <a href="http://turing.iimas.unam.mx/wix/">http://turing.iimas.unam.mx/wix/</a>
        </div>
   </div>     <!-- footer -->


<a href="#home" class="gototop scroll"><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- jquery -->
<script src="../assets/jquery.js"></script>

<!-- wow script -->
<script src="../assets/wow/wow.min.js"></script>

<!-- boostrap -->
<script src="../assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="../assets/mobile/touchSwipe.min.js"></script>
<script src="../assets/respond/respond.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>
 
<!-- custom script -->
<script src="../assets/script.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>


</body>
</html>