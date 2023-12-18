<?php

namespace Lenovo\Assignment\Commands;

use Lenovo\Assignment\Commands\Regulateoperators\SortClass;
use Lenovo\Assignment\Commands\Regulateoperators\FilterClass;
use Lenovo\Assignment\Commands\Regulateoperators\PaginationClass;


class RegulationClass
{
    public int $per_page = 4;
    public int $page_number = 1;

    public array $books = [];
    public array $command_parameters;

    public function regulation($books, $parameters): array
    {
        $this->filter($books);
        $this->sort($this->books);
        $this->paginate($this->books, $this->per_page, $this->page_number);
        return $this->books;
    }

    private function sort($books): void
    {
        $book = new SortClass($books);

        $this->books = $book->books;
    }

    private function filter($books): void
    {
        $filter_obj = new FilterClass();
        $filter_obj->filterList($this->command_parameters);
        $filter_obj->filterApply($books);
        $this->books = $filter_obj->filtered_books;

    }

    private function paginate($book, ?int $per_page = 4, $page_number = 1): void
    {
        $paginate_obj = new PaginationClass($book, $page_number, $per_page);
        $this->books = $paginate_obj->pagination_books;
    }
//
//    public function view(): void
//    {
//
//        var_dump($this->books;
//
//    }

}