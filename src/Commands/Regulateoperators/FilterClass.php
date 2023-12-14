<?php

namespace commands\Regulateoperators;

use Lenovo\Assignment\Filereder\Commandreader;

class FilterClass
{

    public array $parametrs;
    public array$command_parametr;
    public array$filtered;
    public array$books;
    public array$filterd_books;

    public function __construct(array$parametrs, $command_parametr, $filtered, $books, $filterd_books)
    {
        foreach ($parametrs as $key=> $val){
            $command_parametr[] = $key;
            $filtered[$key]=$val;
        }
    }
    public  function filtering(array$books, $parametr, array$filter_list)
    {
        $filtered_books=[];
        foreach ($filter_list as $param => $value)
        {
            foreach ($books as $book)
            {
                if (in_array($book[$param], $value))
                {
                    $filtered_books[] = $book;
                }
                else
                {continue;}
            }
        }
        $this->filtered = $filtered_books;
    }
}

