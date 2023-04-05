<?php

require_once '../index.php';

$index = new ElasticTest\Index();

$result = $index->singleIndex([
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => ['testfield' => 'abc']
]);

var_dump($result);