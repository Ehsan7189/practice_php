<?php

namespace Lenovo\Assignment\Filereder;

class BookCsvReaderClass
{
    
    public array $csv_books;
    private $validation;
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