<?php

namespace commands\Regulateoperators;

class SortClass
{
    public $books;

    public function __construct($books)
    {
        $array = $books;
        usort($array, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
        $books  = $array;

    }
}