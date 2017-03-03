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
				$email = $_POST['email'];
				$id = $_POST['id'];

				$requete = $bdd->query("SELECT * FROM represantants WHERE email = '".$email."' AND id = '".$id."'");
			if($reponse = $requete->fetch())
				{
					$_SESSION['connecte'] = true;
					$_SESSION['id'] = $reponse['id_u'];
					header("Location:index.php?p=contract.php");
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
  <center><label for="email">Email :</label> <input style="color: #000;" type="text" class="form-control" name="email" require=""/><br></center><br>
  <center><label for="id">Identifiant :</label> <input style="color: #000;" type="id" class="form-control" name="id" required=""/><br></center><br>
      <br><center><input style="color: #000;margin-right: 30px;"type="submit" class="form-control" name="submit" /><a href="index.php?p=register.php">
     </center></fieldset>
  </form></div>
</div>
</div>

