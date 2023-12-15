<?php

namespace Lenovo\Assignment\Filereder;

class BookCsvreader
{
    public $file_path ;
    public $csv_books;
    private $vaiadation=['ISBN', 'bookTitle', 'authorName', 'pagesCount', 'publishDate'];

    public function __construct($file_path)
    {
        $csv = fopen($file_path,'r');
        fgetcsv($csv);  // Remove First Row
        while( $row = fgetcsv($csv) ){
            $this->csv_books[] = $row;
        }
        foreach ($this->csv_books as $book){

            $book = array_combine($this->vaiadation,$book);

        }

    }
}