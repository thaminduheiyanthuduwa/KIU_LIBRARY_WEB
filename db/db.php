<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=library', 'root', '');
} catch (PDOException $error) {
    echo $error->getmessage();
}


