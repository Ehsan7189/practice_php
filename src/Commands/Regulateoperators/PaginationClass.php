<?php

namespace Lenovo\Assignment\Commands\Regulateoperators;

class PaginationClass
{

    public array $pagination_books;
    public $books;
    public $per_page = 4;
    public $page_show;

    public function __construct($books)
    {
        $this->pagination_books = array_chunk($books, $this->per_page);
    }

    public function pageShow($page_number)
    {

        $this->page_show = $this->pagination_books[$page_number];

    }

}