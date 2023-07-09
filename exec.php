<?php
session_start();

$MiArray = array('ortodoncia', 'elefante', 'helicoptero', 'artificial', 'logica', 'titere');

for ($i=0; $i < count($MiArray); $i++) 
{ 
    if($_REQUEST["word".$i] == $MiArray[$i])
    {
        $_SESSION["R".($i+1)] = 'Correcto';
        $_SESSION["palabra".$i] = $_REQUEST["word".$i];  //array que guarda las palabras ingresadas
    }
    else
    {
        $_SESSION["R".($i+1)] = 'Incorrecto';
        $_SESSION["palabra".$i] = $_REQUEST["word".$i];
    }
}

header('Location: ordenaPalabras.php');

?>