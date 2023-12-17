<?php

namespace Lenovo\Assignment\commands\Regulateoperators;

use Lenovo\Assignment\Filereder\Commandreader;

class FilterClass
{

    public array $command_name;
    public array $command_parametrs;
    public array $filtered_books;
    public array $books;
    public array $command_filters;

    public function __construct(array $command_name, $books)
    {
        foreach ($command_name as $key => $val) {
            $this->command_parametrs[] = $key;
            $this->command_filters[$key] = $val;
        }
        $this->filtering($books, $this->command_parametrs, $this->command_filters);

    }
    private function filtering(array $books, $parametrs, array $filter_list)
    {$filtered_books = [];
        foreach ($filter_list as $filters) {
            foreach ($filters as $filter) {
                foreach ($parametrs as $parametr) {
                    foreach ($books as $book) {
                        if ($book[$parametr] === $filter) {
                            if (!in_array($book[$parametr], $filtered_books)) {
                                $filtered_books[] = $books;
                            } else {
                                continue;
                            }
                        } else {
                            continue;
                        }
                    }
                }
            }
        }
        $this->books= $filtered_books;
    }
}

