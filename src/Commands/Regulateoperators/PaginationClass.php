<?php

namespace Lenovo\Assignment\Commands\Regulateoperators;

class PaginationClass
{


    public array $pagination_books;
    public $books;
    public $page_show;


    public function __construct($books, public int $page_number=1, public $per_page = 4)
    {
        $this->pagination_books = array_chunk($books, $this->per_page);
        return $this->pagination_books[$this->page_number];

    }



}