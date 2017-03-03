<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<head>
    
	<title>Flocon Immobilier</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<link href="js/zoombox/zoombox.css" rel="stylesheet" >
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
    
	<div class="templatemo-logo visible-xs-block">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg logo-left-container">
			<h1 class="logo-left">Black</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg logo-right-container">
			<h1 class="logo-right">White</h1>
		</div>
	</div>
	<div class="templatemo-container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg left-container">
            <?php echo '<img src="C:\Users\benjamin\Downloads\esteban.jpg" style="width:100px;"/>'; ?>

			
                    
       
      
      
   
				 
			</div>
			</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Immobilier</h1>
  <div class="tm-right-inner-container">

<div class="">
    <!-- show table contrat-->
</div>
<div>
<?php

//if (isset($_SESSION['represantants'])AND !empty($_SESSION['represantants'])){
    if(isset($_POST['submit'])){
       // if(isset($_SESSION['represantants']))
       // {
            $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","");
            $req = $bdd->query('SELECT * FROM contratsgestionlocation WHERE numcontrat ='.$_POST['numcontrat']);
            //$numcontrats = $req->fetch();
            
      //  if($numcontrats){
            $req = $bdd->query('DELETE  FROM contratsgestionlocation WHERE numcontrat ='.$_POST['numcontrat']);
            header('location:contract.php');
                    }
      //  else{
     //       header('location:index.php');
        //    }
     //   }
  //  }
//}
    else{
// header('location:index.php');
}
                 
?>
      <div class="row">
        <div class="col-sm-12 ">
            <div id="registration">
            <h2><center>Supprimer un contrat</center></h2>
                <form id="RegisterUserForm" action="" method="post" >
                <fieldset>
                <center><label for="numcontrat">Numéro du contrat :</label> <input style="color: #000;" type="text" class="form-control" name="numcontrat" require=""/><br></center><br>
  
                <br><center><input style="color: #000;margin-right: 30px;"type="submit" class="form-control" name="submit" a href="index.php?p=delContact.php"/>
                <br></center></fieldset>
                </form></div>
             <li><a href="index.php?p=adContract.php"><i class="fa fa-shopping-cart fa-medium"></i>Ajouter un contrat</a></li>
                    <li><a href="index.php?p=contract.php"><i class="fa fa-shopping-cart fa-medium"></i>Voir les contrats</a></li>
          </div>
    </div>
</div>