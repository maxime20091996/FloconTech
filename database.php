<?php
    $db = new PDO('mysql:host=localhost;dbname=mlr1','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>