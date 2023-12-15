<?php

namespace Lenovo\Assignment\Validation;

use mysql_xdevapi\Exception;

class ParametrValidation
{
    public array $main_file;
    public $valid = [];
    public $isbn;
    public $page;
    public $author;
    public $book_name;

    public function __construct(
        $isbn,
        $page,
        $author,
        $book_name,

    )
    {

        $this->isbnValidation($this->isbn);
        $this->authorValidation($this->author);
        $this->titleValidation($this->book_name);
        $this->pageValidation($this->page);
        foreach ($this->valid as $validabl) {
            if ($validabl === true) {
                continue;
            } else {

                throw new Exception('One of the attributes related to the book has been entered incorrectly');

            }

        }
    }


    private function isbnValidation($isbn)
    {

        if (!is_null($isbn)) {

            if (strlen($isbn) === 14) {
                $Isbn = str_replace('-', '', $isbn);
                if (is_numeric($Isbn)) {
                    $this->valid[] = true;
                } else {
                    $this->valid[] = false;

                }
            } else {
                $this->valid[] = false;

            }
        }
    }

    private function authorValidation($author)
    {

        if (!is_null($author)) {

            if (is_string($author)) {

                $this->valid[] = true;

            } else {
                $this->valid[] = false;

            }
        }
    }

    private function titleValidation($name)
    {
        if (!is_null($name)) {


            if (is_string($name)) {

                $this->valid[] = true;

            } else {
                $this->valid[] = false;

            }
        }
    }

    private function pageValidation($page)
    {
        if (!is_null($page)) {
            if (is_numeric($page)) {
                $this->valid[] = true;
            } else {
                $this->valid[] = false;

            }
        }
    }

}