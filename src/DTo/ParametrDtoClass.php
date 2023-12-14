<?php

namespace Lenovo\Assignment\DTo;

class ParametrDtoClass
{

    public function __construct(
        public readonly array|string $isbn,
        public readonly array|string $author,
        public readonly array|string $book_name,
        public readonly array|string $page_cont,
    )
    {
    }

}