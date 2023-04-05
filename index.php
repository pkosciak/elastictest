<?php

use Elasticsearch\Common\Exceptions\Missing404Exception;

require_once('vendor/autoload.php');

$diagnostics = new ElasticTest\Diagnostics();
//var_dump($diagnostics->getHealth());

$index = new ElasticTest\Index();

$index->singleIndex([
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => ['testfield' => 'abc']
]);

$paramsBulk = [];
for ($i = 0;
     $i < 100;
     $i++)
{
    $paramsBulk['body'][] = ['index' => ['_index' => 'my_index2',]];
    $paramsBulk['body'][] = ['my_field' => 'my_value',
        'second_field' => 'some more values'];
}

$index->bulkIndex($paramsBulk);

try {
    $result = $index->getIndex(
        [
            'index' => 'my_index',
            'id'    => 'my_id'
        ]
    );
//    var_dump($result);
} catch (Missing404Exception $e){
    printf("Document not found %s\n", $e->getMessage());
}

$result = $index->updateIndex([
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => [
        'doc'   => [
            'new_field' => 'abc'
        ]
    ]
]);

//var_dump($result);