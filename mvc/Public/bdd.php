<?php

$mysqli = new mysqli("localhost", "webstart_bar", "webstar_bar", "webstart_bar");

if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";