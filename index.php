<?php

require_once '.\vendor\autoload.php';

use Lenovo\Assignment\Filereder\Commandreader;
use Lenovo\Assignment\Validation\ParametrValidation;

$command_json  = new Commandreader('commands.json');
$commands = $command_json->command;
$parametrs = $command_json->parametrs;

$isbn=$parametrs['ISBN'];
$book_title=$parametrs['bookTitle'];
$author_name=$parametrs['authorName'];
$pages_count=$parametrs['pagesCount'];
$vlidation_obj = new ParametrValidation($isbn, $book_title, $author_name, $pages_count);




//syntax_namespace_fix
