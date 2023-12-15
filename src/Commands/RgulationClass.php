<?php

namespace commands;

use commands\Regulateoperators\SortClass;
use commands\Regulateoperators\FilterClass;
use Lenovo\Assignment\Commands\Regulateoperators\PaginationClass;


class RgulationClass
{

    public function __construct(public array $books,
                                public bool $asdid = true,
                                public $command_parametrs,
                                public int $per_page =4,
                                public int $page_number = 1)
    {

        RgulationClass::sorting($this->books);
        RgulationClass::filtering($this->command_parametrs,$this->books);
        RgulationClass::pagination($this->books,$this->per_page,$this->page_number);


    }

    private static function sorting($books)
    {
        return new SortClass($books);
    }

    private static function filtering($commands, $books)
    {

        $filter_obj = new FilterClass($commands, $books);
        return $filter_obj->filtered_books;

    }

    private static function pagination($book, $per_page = 4, int $page_number = 1)
    {

        $paginate_obj = new PaginationClass($book, $page_number, $per_page);
        return $paginate_obj->pagination_books;

    }


}