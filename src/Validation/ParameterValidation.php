<?php

namespace Lenovo\Assignment\Validation;

use mysql_xdevapi\Exception;

class ParameterValidation
{
    public array $main_file;
    public array $valid = [];
    public function __construct
    (
        public ?array$isbn=null,
        public ?array$page=null,
        public ?array$author=null,
        public ?array$book_name=null
    )
    {

        $this->isbnValidation($this->isbn);
        $this->authorValidation($this->author);
        $this->titleValidation($this->book_name);
        $this->pageValidation($this->page);
        foreach ($this->valid as $validate) {
            if ($validate === true) {
                continue;
            } else {

                throw new Exception('One of the attributes related to the book has been entered incorrectly');

            }

        }
    }


    private function isbnValidation($isbn): void
    {

        if (!is_null($isbn)) {

            foreach ($isbn as $i) {
                if (strlen($i) === 14) {
                    $Isbn = str_replace('-', '', $i);
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
    }
    private function authorValidation($author): void
    {
            foreach ($author as $a){
                if (!is_null($a)) {

                    if (is_string($a)) {

                        $this->valid[] = true;

                    } else {
                        $this->valid[] = false;

                    }
                }
            }

    }

    private function titleValidation($name): void
    {
        foreach ($name as $n){
            if (!is_null($n)) {


                if (is_string($n)) {

                    $this->valid[] = true;

                } else {
                    $this->valid[] = false;

                }
            }
        }

    }

    private function pageValidation($page): void
    {
        foreach ($page as $p){

            if (!is_null($p)) {
                if (is_numeric($p)) {
                    $this->valid[] = true;
                } else {
                    $this->valid[] = false;

                }
            }
        }

    }

}