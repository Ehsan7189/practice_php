<?php

require_once '.\vendor\autoload.php';

use Lenovo\Assignment\Filereder\Commandreader;
use Lenovo\Assignment\Validation\ParametrValidation;
use Lenovo\Assignment\Filereder\BookCsvReaderClass;
use Lenovo\Assignment\Filereder\BookJsonReaderClass;
use Lenovo\Assignment\Validation\CommandValidation;
use Lenovo\Assignment\commands\RgulationClass;



//validation
$command = new Commandreader('C:\xampp\htdocs\assignment\commands.json');
$command_name = $command->command;//
$parametrs = $command->parametrs;
$validation = new ParametrValidation
(
    $parametrs["ISBN"],
    $parametrs["pagesCount"],
    $parametrs["authorName"],
    $parametrs["bookTitle"]
);
//print_r($parametrs["ISBN"]);
$command_validation=new CommandValidation($command_name);


//merge books

$csv_books=new BookCsvReaderClass('C:\xampp\htdocs\assignment\books.csv',['ISBN', 'bookTitle', 'authorName', 'pagesCount', 'publishDate']);
$json_books=new BookJsonReaderClass('C:\xampp\htdocs\assignment\books.json');
$books = array_merge($csv_books->books , $json_books->books);
//print_r($books);


$regulate = new RgulationClass($books,$parametrs);

//print_r($books);



