<?php
    $db = new PDO('mysql:host=localhost;dbname=tuto','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>