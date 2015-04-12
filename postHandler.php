<?php

$verz="1.0";
$comPort = "/dev/ttyUSB0"; /*change to correct com port */

$data = $_POST['data'];

$fp = fopen($comPort,"w");

    fwrite($fp, 1); 

fclose($fp);

?>