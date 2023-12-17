<?php

namespace Lenovo\Assignment\Commands;

use Lenovo\Assignment\Commands\Regulateoperators\SortClass;
use Lenovo\Assignment\Commands\Regulateoperators\FilterClass;
use Lenovo\Assignment\Commands\Regulateoperators\PaginationClass;


class RgulationClass
{

    public function __construct(public array $books,
                                public $command_parametrs,
                                public ?int$per_page = null,
                                public ?int $page_number = null)
    {

        if (is_null($this->per_page))
        {

            $this->per_page = 4;

        }
        if (is_null($this->page_number))
        {

            $this->page_number = 1;

        }




        RgulationClass::sorting($this->books);
        RgulationClass::filtering($this->command_parametrs, $this->books);
        RgulationClass::pagination($this->books, $this->per_page, $this->page_number);


    }

    private static function sorting($books)
    {
        $book=new SortClass($books);
        $books=$book;
    }

    private static function filtering($commands, $books)
    {

        $filter_obj = new FilterClass($commands, $books);


    }

    private static function pagination($book, $per_page = 4, int $page_number = 1)
    {

        $paginate_obj = new PaginationClass($book, $page_number, $per_page);
        return $paginate_obj->pagination_books;

    }


}