<?php

namespace ElasticTest;

use Elasticsearch\ClientBuilder;

class Connection
{
    /**
     * @var object|\Elasticsearch\Client
     */
    protected object $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->setHosts(['elasticsearch'])->build();
    }
}