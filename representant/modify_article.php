<?php session_start()?>
<!DOCTYPE html>
 <?php
 require_once 'database.php';
 require_once 'function.php';
    
    $article = getArticle($db, 1, $_GET['id']);
    if(!isset($_GET['id'])){
        header('location:index.php');
    }
    if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
        header('location:index.php');
    }

    if(isset($_POST) AND !empty($_POST)){
        if(isset($_POST['name']) AND !empty($_POST['content'])AND !empty($_POST['author'])){
            $req = $db ->prepare('UPDATE article SET name = :name, content = :content, author = :author WHERE id = :id');
            $req->$execute([
                'name' => $_POST['name'],
                'content' => $_POST['content'],
                'authorid' => $_POST['authorid'],
                'id' => $_GET['id'],
            ]);
            $_SESSION['flash']['success'] = 'Article modifié !';
        }else{
             $_SESSION['flash']['error'] = 'Champs manquant !';
        }
    }
?>

<
<body>
   
        
<div class="header">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</div>
</body>
<div class="container">
    <h3>Modifier l'article"<?= $article->name?>"</h3>
    <h4>Laissez vide si aucun changement</h4>
    <?php
    if(isset($_SESSION['flash']['success'])){
        echo "<div class= 'success'>".$_SESSION['flash']['success'].'</div>';
    }elseif(isset($_SESSION['flash']['error'])){
        echo "<div class= 'error'>".$_SESSION['flash']['error'].'</div>';
    }
    
    ?>
    <form method="POST">
        <h4>Le nom</h4>
        <input type="text" name="name" value="<?= $article->name?>" />
        <h4>L'auteur</h4>
        <input type="text" name="author" value="<?= $article->author?>"/>
        <h4>Le contenu</h4>
        <textarea name="content"><?= $article->content ?></textarea>
        <button>Modifier</button>
    </form>  
</div>