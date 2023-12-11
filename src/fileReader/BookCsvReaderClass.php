<?php

class BookCsvReaderClass
{
    public $file_path ;
    public $csv_books;

    public function __construct($file_path)
    {

        $csv = fopen($file_path);
        fgetcsv($csv);  // Remove First Row
        while( $row = fgetcsv($csv) ){
            $data[] = $row;
        }



    }


}