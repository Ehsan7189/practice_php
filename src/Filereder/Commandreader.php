<?php

namespace Lenovo\Assignment\Filereder;
class Commandreader
{

    public $file_path;
    public $command;
    public $parametrs;


    public function __construct($file_path)
    {

        $json = file_get_contents($file_path, true);
        $data = json_decode($json);
        $this->command = $data['command_name'];
        $this->parametrs = $data['parameters'];

    }

}