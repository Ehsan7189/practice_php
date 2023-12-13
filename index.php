<?php

require_once '.\vendor\autoload.php';

use Lenovo\Assignment\Filereder\Commandreader;

$command_json  = new Commandreader('commands.json');
$commands = $command_json->command;
$parametrs = $command_json->parametrs;





//syntax_namespace_fix
