<?php

namespace ElasticTest\examples;

use ElasticTest\Connection;

class SingleIndex extends Connection
{

    public function __construct()
    {
        parent::__construct();
        $params = [
            'index' => 'my_index',
            'id'    => 'my_id',
            'body'  => ['testfield' => 'abc']
        ];

        $this->client->index($params);
    }

}