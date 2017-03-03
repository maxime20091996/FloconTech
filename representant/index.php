<?php session_start()?> 
<!DOCTYPE html>
<?php
 require_once 'database.php';
?>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
<body>
<div class="header">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Lien 1</a></li>
        <li><a href="badges.html">Lien 2</a></li>
        <li><a href="collapsible.html">Lien 3</a></li>
      </ul>
    </div>
  </nav>
</div>
</body>
<div class="container">
    <?php
    $req = $db->query('SELECT * FROM article');
    $articles = $req -> fetchAll();
    
    foreach($articles as $article): ?>
    <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="http://placehold.it/500x300">
              <span class="card-title"><?= $article['name']?></span>
            </div>
            <div class="card-content">
              <p><?= $article['content']?><br/>Par <?= $article['author']?></p>
            </div>
            <div class="card-action">
              <a href="single_article.php?id=<?= $article['id']?>">Voir l'article en entier</a>
            </div>
          </div>
        </div>
      </div>
        
    
    
    
    
    <?php endforeach ?>
</div>