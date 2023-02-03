<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="giardino";

// Create connection
$conn = mysqli_connect($servername, $username, $password);


if ( !$conn ) {
    die("Connessione alla base dati fallita: " . mysqli_connect_error());
} else {
    $db_selected = mysqli_select_db($conn, $database);
}
if (!$db_selected) {
    die ('Errore di selezione della base dati: ' . mysqli_error($conn));
}
