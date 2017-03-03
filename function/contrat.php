<?php
	function getContrat($username,$password)
	{
		
		global $bdd;
		$requete = $bdd-> prepare("SELECT * FROM articles WHERE id_a=:id");
		$requete ->bindValue(":id",$id,PDO::PARAM_INT);
		$requete -> execute();
		return $requete->fetch(); 
		
	}

	function setContrat($username,$password)
	{
		global $bdd;
		$requete = $bdd-> prepare("SELECT * FROM articles WHERE id_a=:id");
		$requete ->bindValue(":id",$id,PDO::PARAM_INT);
		$requete -> execute();
		return $requete->fetch(); 
	}
    function delContrat($username,$password)
	{
		global $bdd;
		$requete = $bdd-> prepare("SELECT * FROM articles WHERE id_a=:id");
		$requete ->bindValue(":id",$id,PDO::PARAM_INT);
		$requete -> execute();
		return $requete->fetch(); 
	}
?>