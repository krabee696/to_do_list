<?php
 require 'configdb.php';
 $id = $_GET['id'];
 $sql = 'DELETE FROM `tasks` WHERE `is` =  ?';
 $query = $pdo->prepare($sql);
 $query->execute([$id]);
 header('Location: /');
?>