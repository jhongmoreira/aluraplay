<?php
    $dbPath = __DIR__.'/banco.sqlite';
    $pdo = new PDO("sqlite:$dbPath");
    $pdo->exec("CREATE table videos (id INTEGER PRIMARY KEY, url TEXT, title TEXT);");
?>