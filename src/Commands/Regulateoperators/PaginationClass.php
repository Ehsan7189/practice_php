<?php

namespace Lenovo\Assignment\Commands\Regulateoperators;

class PaginationClass
{


    public array $pagination_books;
    public mixed $books;

    public int $per_page = 4;
    public int $page_number = 1;

    public function __construct($books)
    {

        $this->paginate($books);

    }

    private function paginate(array$books): void
    {

        $this->pagination_books = array_chunk($books,$this->per_page);

    }



}