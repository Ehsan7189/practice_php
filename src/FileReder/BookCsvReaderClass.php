<?php

namespace Lenovo\Assignment\FileReder;

class BookCsvReaderClass
{
    
    public array $csv_books;
    public array $books;

    public function __construct($file_path,$validation)
    {
        $csv = fopen($file_path,'r');
        fgetcsv($csv);  // Remove First Row
        while( $row = fgetcsv($csv) ){
            $this->csv_books[] = $row;
        }
        foreach ($this->csv_books as $book){

            $this->books[]= array_combine($validation,$book);

        }

    }
}