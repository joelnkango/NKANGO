<?php
$connect = new mysqli('localhost', 'root', 'root', 'isig');
if ($connect) {
} else {
    echo 'Connexion echouee';
    exit();
}
?>
