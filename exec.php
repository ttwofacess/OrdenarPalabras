<?php
session_start();

$MiArray = array('ortodoncia', 'elefante', 'helicoptero', 'artificial', 'logica', 'titere');

for ($i=0; $i < count($MiArray); $i++) 
{ 
    if($_REQUEST["word".$i] == $MiArray[$i])
    {
        $_SESSION["R".($i+1)] = 'Correcto';
        $_SESSION["palabra".$i] = $_REQUEST["word".$i];  //array que guarda las palabras ingresadas
        //echo "Correcto!.<br />";
    }
    else
    {
        $_SESSION["R".($i+1)] = 'Incorrecto';
        $_SESSION["palabra".$i] = $_REQUEST["word".$i];
        //echo "Incorrecto!.<br />";
    }
}

/* echo $_SESSION['R1'] . "<br />";
echo $_SESSION['R2'] . "<br />";
echo $_SESSION['R3'] . "<br />";
echo $_SESSION['R4'] . "<br />";
echo $_SESSION['R5'] . "<br />";
echo $_SESSION['R6'] . "<br />"; */

header('Location: ordenaPalabras.php');

?>