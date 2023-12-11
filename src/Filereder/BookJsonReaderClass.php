<?php

namespace Lenovo\Assignment\Filereder;

class BookJsonReaderClass
{

    public $file_path;
    public $books;


    public function __construct($file_path)
    {

        $json = file_get_contents($file_path,true);
        $data = json_decode($json);
        $this->books = $data['books'];

    }
}