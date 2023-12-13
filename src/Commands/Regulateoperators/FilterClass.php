<?php

namespace commands\Regulateoperators;

use Lenovo\Assignment\Filereder\Commandreader;

class FilterClass
{

    public array $parametrs;
    public $parametr;
    public array$filtered;
    public array$books;
//    public array$filterd_books;


    public function __construct(array$parametrs, $parametr, $filtered)
    {

        foreach ($parametrs as $key=> $val){

            $parametr = $key;
            foreach ($val as $value){
                array_push($filtered,$value);
            }
        }
    }

    public static function filtering():void
    {

        for ($i = 0; count($this->books) <= $i; $i++){}

    }

}