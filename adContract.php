

<?php

//if (isset($_SESSION['represantants'])AND !empty($_SESSION['represantants'])){
    if(isset($_POST['submit'])){
       // if(isset($_SESSION['represantants']))
       // {
        extract($_POST);    
            $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","");
            $req = $bdd->query('SELECT * FROM contratsgestionlocation WHERE numcontrat ='.$_POST['numcontrat']);
            //$numcontrats = $req->fetch();
            
      //  if($numcontrats){
            $req = $bdd->prepare("INSERT INTO contratsgestionlocation(NUMCONTRAT,NUMAPPARTEMENT,NUMTIERS,DATEDEBUT,DATEFIN) VALUES(:numcontrat, :numappartement, :numtiers, :datedebut, :datefin)");
        $req -> bindValue(':numcontrat',$numcontrat,PDO::PARAM_INT);
        $req -> bindValue(':numappartement',$numappartement,PDO::PARAM_INT);
        $req -> bindValue(':numtiers',$numtiers,PDO::PARAM_INT);
        $req -> bindValue(':datedebut',$datedebut,PDO::PARAM_STR);
        $req -> bindValue(':datefin',$datefin,PDO::PARAM_STR);
        
        $req -> execute();
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
     <li><a href="index.php?p=adContract.php"><i class="fa fa-shopping-cart fa-medium"></i>Ajouter un contrat</a></li>
                    <li><a href="index.php?p=contract.php"><i class="fa fa-shopping-cart fa-medium"></i>Voir les contrats</a></li>
    <div class="row">
  <div class="col-sm-12 ">
  <div id="registration">
  <h2><center>Inscription</center></h2>
  <form id="RegisterUserForm" action="" method="post">
  <fieldset>
  <center><label for="numcontrat">Numéro de contrat :</label> <input style="color: #000"; type="text" class="form-control" name="numcontrat" require=""/><br></center><br>
  <center><label for="numappartement">Numéro d'appartement :</label> <input style="color: #000"; type="text" class="form-control" name="numappartement" require=""/><br></center><br>
  <center><label for="numtiers">Numéro de tiers :</label> <input style="color: #000"; type="text" class="form-control" name="numtiers" required=""/><br></center><br>
  <center><label for="datedebut">Date de début :</label> <input style="color: #000"; type="date" class="form-control" name="datedebut" required=""/><br></center><br>
  <center><label for="datefin">Date de fin :</label> <input style="color: #000"; type="date" class="form-control" name="datefin" required=""/><br></center><br>
  <center><input style="color: #000;margin-right: 30px"; type="submit" class="form-control" name="submit"/><a href="index.php?p=login.php" style="margin-right:30px"><br>
        <input type="button" class="form-control" name="Répondre" value="Page Connexion"/></a></center></fieldset>
  </form></div>
</div>
</div>
<!--INSERT INTO contratsgestionlocation(NUMCONTRAT,NUMAPPARTEMENT,NUMTIERS,PRIXGESTTRIMESTRE,TARIFTRIMESTRE,DATEDEBUT,DATEFIN) VALUES ( 5 , 265, 5, 5000, 6522, '2016-03-05', '2016-05-07')-->