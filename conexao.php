<?php

try {
    $dbh = new PDO('pgsql:host=localhost;port=5433;dbname=copaifera_multijuga', 'postgres', 'lehninger');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}