<?php

namespace commands\Regulateoperators;

use Lenovo\Assignment\Filereder\Commandreader;

class FilterClass
{

    public array $parametrs;
    public $parametr;
    public array$filtered;
    public array$books;
    public array$filterd_books;


    public function __construct(array$parametrs, $parametr, $filtered, $books, $filterd_books)
    {

        foreach ($parametrs as $key=> $val){

            $parametr = $key;
            foreach ($val as $value){
                array_push($filtered,$value);
            }
        }
        $filterd_books = FilterClass::filtering($books, $parametr, $filtered);
    }

    public static function filtering(array$books, $parametr, $filter_list){

        for ($i = 0; count($books) <= $i; $i++)
        {

            if ($books[$i][$parametr] === $filter_list[$i])
            {

                continue;

            }
            else
            {

                unset($books[$i]);

            }

        }
        return$books;
    }

}