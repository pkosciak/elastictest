<?php

require_once '../index.php';

$index = new ElasticTest\Index();

$paramsBulk = [];
for ($i = 0;
     $i < 5;
     $i++)
{
    $paramsBulk['body'][] = ['index' => ['_index' => 'my_index2',]];
    $paramsBulk['body'][] = ['my_field' => 'my_value',
        'second_field' => 'some more values'];
}

$result = $index->bulkIndex($paramsBulk);

var_dump($result);