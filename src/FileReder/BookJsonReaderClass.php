<?php

namespace Lenovo\Assignment\FileReder;

class BookJsonReaderClass
{

    public mixed $books;


    public function __construct($file_path)
    {

        $json = file_get_contents($file_path,true);
        $data = json_decode($json,true);
        $this->books = $data['books'];

    }
}