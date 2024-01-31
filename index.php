
<?php

    //require_once("./Alunno.php");

    spl_autoload_register(function($class){

        if(file_exists("./includes/$class.php"))
            require_once ("./includes/$class.php");
    });

    $a1 = new Alunno("mario", "rossi", 18);
    $a2 = new Alunno("piero", "rossi", 13);
    $a3 = new Alunno("luca", "verdi", 24);

    $listaAlunni = array($a1, $a2, $a3);

    foreach ($listaAlunni as $a) {
        $a->toString();
    }
    
?>