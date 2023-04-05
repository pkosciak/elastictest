<?php

require_once '../index.php';

$diagnostics = new ElasticTest\Diagnostics();

var_dump($diagnostics->getHealth());