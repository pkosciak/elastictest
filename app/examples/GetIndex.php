<?php

namespace ElasticTest\examples;

use ElasticTest\Connection;

class GetIndex extends Connection
{

    private array $result;
    public function __construct()
    {
        parent::__construct();
        $params = [
            'index' => 'my_index',
            'id'    => 'my_id'
        ];

        $this->result = $this->client->get($params);

    }

    public function get(): array
    {
        return $this->result;
    }

}