<?php

$taskList = [
    "izpildit majasdarbu",
     "aiziet laicigi gulet"
];

//1 . while cilks
//2. izvēle
//3. switch case nosacijumi
//4. izveidojam testa datus

$continue = 'y';
do {
    echo "uzdevumu parvaldnieks \n";
    echo "Izvadit visu uzdevumu sarakstu => 1\n";
    echo "Ievadit jaunu uzdevumu => 2\n";
    echo "Iziet => 3 \n";

    $choice = readline("izvelies darbibu: ");

    switch ($choice) {
        case 1:
            echo "\n";
            
            for($i = 0; $i <  count($taskList); $i++){
                $id = $i + 1;
                echo "$id" . ", $taskList[$i] \n"
            }
            echo "\n\n";
            break;
            
        case 2:
            echo "to be implemented";
            break;

        case 3:
            echo "to be implemented";
            break;
            
        case 4:
            $continue = null;
            echo "to be implemented";
            break; 
        default;
        echo 'bye';
        break;           
            
    }

    while ($continue == 'y');
}
