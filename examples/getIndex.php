<?php

use Elasticsearch\Common\Exceptions\Missing404Exception;

require_once '../index.php';

$index = new ElasticTest\Index();

$result = $index->singleIndex([
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => ['testfield' => 'abc']
]);

try {
    $result = $index->getIndex(
        [
            'index' => 'my_index',
            'id'    => 'my_id'
        ]
    );
    var_dump($result);
} catch (Missing404Exception $e){
    printf("Document not found %s\n", $e->getMessage());
}