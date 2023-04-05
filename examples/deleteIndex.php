<?php

require_once '../index.php';

$index = new ElasticTest\Index();

$params = [
    'index' => 'my_index',
    'id'    => 'my_id'
];

$paramsSet = array_merge($params,['body'  => ['testfield' => 'abc']]);

$index->singleIndex($paramsSet);

$result = $index->deleteIndex($params);

var_dump($result);
