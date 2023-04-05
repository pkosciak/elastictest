<?php

require_once '../index.php';

$index = new ElasticTest\Index();

$index->singleIndex([
    'index' => 'my_index',
    'id' => 'my_id',
    'body' => ['testfield' => 'abc']
]);

$params = [
    'index' => 'my_index',
    'id'    => 'my_id'
];

$before = $index->getIndex($params);


$result = $index->updateIndex([
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => [
        'doc'   => [
            'new_field' => 'abc'
        ]
    ]
]);

var_dump($result);

echo '<h1>Before update</h1>';

var_dump($before);

echo '<h1>After update</h1>';

$after = $index->getIndex($params);
var_dump($after);