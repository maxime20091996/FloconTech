<?php
	include('accueil.php');
	
?>

<h3>Changer votre image de profile</h3>
<?php

	if(isset($_POST['submit']))
	{
		$avatar=$_FILES['avatar']['name'];
		$avatar_tmp=$_FILES['avatar']['tmp_name'];
		if(!empty($avatar))
		{
			$image_ext=strtolower(end(explode('.',$avatar)));

			if(in_array($image_ext,array('jpg','jpeg','png','gif')))
			{
				modifier_image_profile($avatar_tmp,$avatar);
				header("Location:index.php?p=accueil.php");
			}else{
				echo"<div class='error'>Veuillez saisir une image valide</div>";
			}
		}
	}

	foreach($infos as $info)
	{
		?>
			<img src="avatar/<?php echo $info['avatar']; ?>" height='100' widht='100' alt='avatar'>
		<?php
	}
?>
