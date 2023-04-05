<?php

namespace ElasticTest;

use Elasticsearch\ClientBuilder;

class Connection
{

    protected object $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->setHosts(['elasticsearch'])->build();
    }
}