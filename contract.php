<!DOCTYPE html>


    
    


				
			


    <h1 class="logo-right hidden-xs margin-bottom-60">Immobilier</h1>
    <div class="tm-right-inner-container"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <li><a href="index.php?p=adContract.php"><i class="fa fa-shopping-cart fa-medium"></i>Ajouter un contrat</a></li>
    <li><a href="index.php?p=delContract.php"><i class="fa fa-shopping-cart fa-medium"></i>Supprimer un contrat</a></li>
    <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th  style=" text-align : center ">Numéro de contrat</th>
                                        <th  style=" text-align : center ">Numéro appartement</th>
                                        <th  style=" text-align : center ">Tiers</th>
                                        <th  style="text-align : center ">Date de début de location</th>
                                        <th  style=" text-align : center ">Date de fin de location</th>
                                    </tr>
                                    </thead>
    </table>
    <?php



    $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","");
    $req = $bdd->query('SELECT numcontrat, numappartement, numtiers, datedebut, datefin FROM contratsgestionlocation');
    $contratsgestionlocation = $req -> fetchAll();
    
    foreach($contratsgestionlocation as $contrats ): ?>
      

         
    
    
    <table class="table table-striped table-hover">
                                    <tbody >
                                            <tr>
                                                <td style=" text-align : center " width=20% ><?= $contrats['numcontrat']?></td>
                                                <td style=" text-align : center" width=20%><?= $contrats['numappartement']?></td>
                                                <td style=" text-align : center" width=10%><?= $contrats['numtiers']?></td>
                                                <td style=" text-align : center" width=25%><?= $contrats['datedebut']?></td>
                                                <td style=" text-align : center" width=25% ><?= $contrats['datefin']?></td>
                                            </tr>
                                             
                                    </tbody>
                                </table>
     
      
      <?php endforeach ?>