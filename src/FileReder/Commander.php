<?php

namespace Lenovo\Assignment\FileReder;
class Commander
{

    public mixed $command;
    public mixed $parameters;


    public function __construct($file_path)
    {

        $json = file_get_contents($file_path, true);
        $data = json_decode($json,true);
        $this->command = $data['command_name'];
        $this->parameters = $data['parameters'];

    }

}