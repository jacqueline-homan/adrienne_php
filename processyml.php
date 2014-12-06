<?php

// Making a variable to hold the parsed yaml file
//$yaml = yaml_parse_file('backup.yml');

// To ensure yml file is readable
//var_dump($yaml);

//Require Composer's php autoloader
require './vendor/autoload.php';

// Next, install Composer in terminal

// Use is a keyword that includes namespaces from the composer autoloader
use Symfony\Component\Yaml\Parser;

//Invoke or instantiate the Parser class into a new object
$yaml = new Parser();

//Pass the backup.yml file to the parse method of the yaml object
$value = $yaml->parse(file_get_contents('./backup.yml'));

var_dump($value);





