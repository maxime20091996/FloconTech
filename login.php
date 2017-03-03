<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Immobilier</h1>
  <div class="tm-right-inner-container">
<?php
			
			try
			{
				$bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","");
			}
			catch(Exception $e)
			{
				die("erreur de connexion");
			}
			if(isset($_POST['submit']))
			{
				$mail = $_POST['mail'];
				$pass = sha1($_POST['pass']);

				$requete = $bdd->query("SELECT * FROM tiers WHERE mail = '".$mail."' AND pass = '".$pass."'");
			if($reponse = $requete->fetch())
				{
					$_SESSION['connecte'] = true;
					$_SESSION['id'] = $reponse['numtiers'];
					header("Location:index.php");
					}else{
					?> <br><br><br><br><br><br><br> <?php echo "identifiants faux";
				}
		}
?>
      
<div class="row">
  <div class="col-sm-12 ">
  <div id="registration">
  <h2><center>Se Connecter</center></h2>
  <form id="RegisterUserForm" action="" method="post" >
  <fieldset>
  <center><label for="mail">Email :</label> <input style="color: #000;" type="text" class="form-control" name="mail" require=""/><br></center><br>
  <center><label for="pass">Mot de passe :</label> <input style="color: #000;" type="password" class="form-control" name="pass" required=""/><br></center><br>
      <br><center><input style="color: #000;margin-right: 30px;"type="submit" class="form-control" name="submit" /><a href="index.php?p=register.php">
      <br><input type="button" name="Répondre " class="form-control" value="Inscription"/></a></center></fieldset>
  </form></div>
</div>
</div>
