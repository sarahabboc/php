<?php

$n = isset($_GET['n']) ? (int)$_GET['n'] : 1;


echo "<h1>Times Table for $n</h1>";
for ($i = 1; $i <= 15; $i++) {
    $result = $i * $n;
    echo "$i x $n = $result<br>";
}
?>
