<?php
function test() {
    $foo = "variable local";

    echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "\n";
    echo '$foo en el ámbito simple: ' . $foo . "\n";
}
session_start();
$foo = "Contenido de ejemplo";
test();
$user=$_SESSION["user"];
echo $user;
?>