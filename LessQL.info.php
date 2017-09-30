<?php

namespace ProcessWire;

/**
 * Info file for LessQL module
 *
 * @copyright Copyright (c) 2017, Alex Andre' Guintu
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 */
$info = array(
    "title" => "LessQL",
    "version" => "1.0.0",
    "author" => "Alex Guintu",
    "summary" => "Light-weight loader for LessQL",
    "requires" => "ProcessWire>=2.5.5",
    "autoload" => function() {
        $config = wire('modules')->getModuleConfigData("LessQL");
        return (bool) $config['autoload'];
    },
    "singular" => true
);
