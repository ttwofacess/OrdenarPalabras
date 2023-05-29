<?php
session_start();

/* if ($_REQUEST['zzz'])
{
    echo 'Go!';
}
else
{
    echo 'No Go!';
} */

$MiArray = array('ortodoncia', 'elefante', 'helicoptero', 'artificial', 'logica', 'titere');

for ($i=0; $i < count($MiArray); $i++) 
{ 
    if($_REQUEST["word".$i] == $MiArray[$i])
    {
        $_SESSION["R".($i+1)] = 'Correcto';
        //echo "Correcto!.<br />";
    }
    else
    {
        $_SESSION["R".($i+1)] = 'Incorrecto';
        //echo "Incorrecto!.<br />";
    }
}

echo $_SESSION['R1'] . "<br />";
echo $_SESSION['R2'] . "<br />";
echo $_SESSION['R3'] . "<br />";
echo $_SESSION['R4'] . "<br />";
echo $_SESSION['R5'] . "<br />";
echo $_SESSION['R6'] . "<br />";

?>