<?php session_start()?>
<!DOCTYPE html>
 <?php
 require_once 'database.php';
 require_once 'function.php';
    
    $article = getArticle($db, 1, $_GET['id']);
    var_dump($article);
?>


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
    <h1><?= $article->name ?></h1>
    <h5><?= $article->content ?></h5>
    <div class="row">
        <div class="col offset-s5 s4">Par <em><?= $article-> author?></em></div>
    </div>
<?php if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>
    
    <div class="row">
        <a href="delet_article.php?id<?= $article-> id?>"><div class="action"><h5>Supprimer cette partie</h5></div></a>
        <a href="modify_article.php?id<?= $article-> id?>"><div class="action"><h5>Modifier cet article</h5></div></a>
        <a href="admin/"><div class="action"><h5>Espace admin</h5></div></a>
    </div>
    <?php endif ?>
</div>