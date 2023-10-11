<?php

$serverName = "localhost";
$connectionOptions = array(
    "Database" => "Proyect2023",
    "Uid" => "user01",
    "PWD" => "123"
);

// Establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Conexión exitosa a la base de datos.";

// Tu código SQL y operaciones aquí

// Cerrar la conexión
sqlsrv_close($conn);

?>
