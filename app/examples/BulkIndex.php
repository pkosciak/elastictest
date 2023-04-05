<?php

namespace ElasticTest\examples;

use ElasticTest\Connection;

class BulkIndex extends Connection
{

    public function __construct()
    {
        parent::__construct();
        for ($i = 0;
             $i < 100;
             $i++)
        {
            $paramsBulk['body'][] = ['index' => ['_index' => 'my_index2',]];
            $paramsBulk['body'][] = ['my_field' => 'my_value',
                'second_field' => 'some more values'];
        }

        $this->client->bulk($paramsBulk);
    }

}