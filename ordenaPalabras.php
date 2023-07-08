<?php
session_start();

$MiArray = array('ortodoncia', 'elefante', 'helicoptero', 'artificial', 'logica', 'titere');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Ordenar las letras</h1></header>
    <main>
        <div id="preguntas">
        <?php
            $form = "<form method='POST' action='exec.php'>";
            for($i=0; $i < count($MiArray); $i++)
            {
                // $form .= "La palabra " . ($i + 1) . " es: " . str_shuffle($MiArray[$i]) . "<br />" . "Tu respuesta: " . "<input type='text' name='word".$i."'><br />";

                $form .= "La palabra " . ($i + 1) . " es: " . str_shuffle($MiArray[$i]) . "<br />" . "Tu respuesta: " . "<input type='text' value='".($_SESSION['palabra'.$i])."' name='word".$i."'><br />";
            }

            $button = "<button type='submit'>Enviar</button>";
            $formCierre = "</form>";
            echo $form.$button.$formCierre;
        ?>
        <br />
        </div>
        <div id="respuestas">
        <?php
            for($j = 0; $j < 6; $j++)
            {
                //$answer .= "Respuesta ".($j+1)."<br/>" . "<input class='res' type='text' name='r" .$j. "'><br />";
                $answer .= "Respuesta ".($j+1)."<br/>" . "<input class='res' type='text' name='r" .$j. "' value='" .$_SESSION['R'. ($j+1)] . "'><br />"; 
            }    

            echo $answer;
        ?>    
        </div>
        <br />
        <!-- <dialog>
            <p>Probando la etiqueta dialog</p>
            <button onclick="this.parentNode.close()">Cerrar</button>
        </dialog> 
        <button onclick="document.querySelector('dialog').show()">Mostrar dialog</button> -->
    </main>
</body>
</html>