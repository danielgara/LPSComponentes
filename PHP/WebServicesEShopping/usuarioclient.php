<?php
require_once "./nusoap/nusoap.php";
$client = new nusoap_client("http://localhost/WebServicesEShopping/services/admincategorias/AdminCategoriasWS.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$res=$client->call("modificar",array("5","ss","fffff"));

if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "muy bien".$res;
    }
}