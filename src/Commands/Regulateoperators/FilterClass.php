<?php

namespace commands\Regulateoperators;

use Lenovo\Assignment\Filereder\Commandreader;

class FilterClass
{

    public array $command_name;
    private array $command_parametrs;
    public array $filtered_books;
    public array $books;
    public array $command_filters;

    public function __construct(array $command_name, $books)
    {
        foreach ($command_name as $key => $val) {
            $this->command_parametr[] = $key;
            $this->command_filters[$key] = $val;
        }
        $this->filtering($books, $this->command_parametrs, $this->command_filters);

    }

    private function filtering(array $books, $parametr, array $filter_list)
    {
        $filtered_books = [];
        foreach ($filter_list as $param => $value) {
            foreach ($books as $book) {
                if (in_array($book[$param], $value)) {
                    $filtered_books[] = $book;
                } else {
                    continue;
                }
            }
        }
        $this->filtered_books = $filtered_books;
    }
}

