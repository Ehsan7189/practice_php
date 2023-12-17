<?php

namespace Lenovo\Assignment\commands\Regulateoperators;

class SortClass
{
    public $books;

    public function __construct($books)
    {
        $array = $books;
        usort($array, function ($a, $b) {return strtotime($a['publishDate']) - strtotime($b['publishDate']);});


        $books  = $array;

    }
}