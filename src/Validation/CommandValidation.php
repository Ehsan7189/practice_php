<?php

namespace Lenovo\Assignment\Validation;

use mysql_xdevapi\Exception;

class CommandValidation
{
    private $commands = ['regulation'];
    public function __construct(public $inserted_command)
    {

        if (!in_array($this->inserted_command, $this->commands))
        {
            throw new Exception('This command in unknown command');
        }

    }
}