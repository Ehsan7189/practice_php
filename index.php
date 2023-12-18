<?php

require_once '.\vendor\autoload.php';

use Lenovo\Assignment\FileReder\Commander;
use Lenovo\Assignment\Validation\ParameterValidation;
use Lenovo\Assignment\FileReder\BookCsvReaderClass;
use Lenovo\Assignment\FileReder\BookJsonReaderClass;
use Lenovo\Assignment\Validation\CommandValidation;
use Lenovo\Assignment\commands\RegulationClass;


//validation
$command = new Commander('C:\xampp\htdocs\assignment\commands.json');
$command_name = $command->command;//
$parameters = $command->parameters;
$validation = new ParameterValidation   // change name to IndexValidation
(
    $parameters["ISBN"],
    $parameters["pagesCount"],
    $parameters["authorName"],
    $parameters["bookTitle"]
);

//switch ($command_name){
//    case 'index':
//        break;
//    case 'show':
//        break;
//}
//print_r($parameters["ISBN"]);
$command_validation = new CommandValidation($command_name);



//merge books

$csv_books = new BookCsvReaderClass('C:\xampp\htdocs\assignment\books.csv', ['ISBN', 'bookTitle', 'authorName', 'pagesCount', 'publishDate']);
$json_books = new BookJsonReaderClass('C:\xampp\htdocs\assignment\books.json');
$books = array_merge($csv_books->books, $json_books->books);

$task1 = new RegulationClass();
$task1->command_parameters=$parameters;
$finalBooks = $task1->regulation($books,$parameters);
foreach ($finalBooks as $book){
    print '<pre>';
    var_dump($book);
    print '</pre>';
}

//$task1->view();





