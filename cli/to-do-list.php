<?php

$taskList = ["Fisrt task", "Second task"];


function showTask($inputTasks) {
    foreach($inputTasks as $task);

}

// $name = readline("ievadi savu vardu:\n");
// echo "your name is $name";


// 1.Uzdevums 
// Uztasit do while cilku, ko lietotajs
// var apstadinat ievadot 'N'

// 2. Uzdevums 
// izveidot 

do {
    echo "uzdevumu parvaldnieks 1\n";
    echo "Apskatit uzdevumu => 2\n";
    echo "Ievadit jaunu uzdevumu => 3\n";


    $choice = readline("izvelies darbibiu:");

  } while ($choice != "N");

  switch ($choice) {
  case '1':
    echo 'To be implemented ';
    break;
  case '2':
    echo 'Your favorite color is blue!';
    break;
  case '3':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Invalid option! \n';

    function addTask($inputTasks){
        echo "to be implemented"
    }
    
}
