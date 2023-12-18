<?php

namespace Lenovo\Assignment\commands\Regulateoperators;


class FilterClass
{

    public array $parameters;
    public array $filter_names;
    public array $filtered_books = [];
    public array $filter_list;

    public function filterList($parameters): void
    {
        foreach ($parameters as $key => $value) {

            $this->filter_names[] = $key;
            $this->filter_list = $parameters;
        }
    }

    public function filterApply(array $books): void
    {
        foreach ($this->filter_names as $filter_name) {
            foreach ($this->filter_list[$filter_name] as $filter) {
                foreach ($books as $book) {
                    if ($filter === $book[$filter_name]) {
                        if (!in_array($this->filtered_books, $books)) {
                            $this->filtered_books[] = $book;
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

}

