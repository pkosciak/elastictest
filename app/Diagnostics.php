<?php

namespace ElasticTest;

class Diagnostics extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */
    public function getHealth(): array
    {
        return $this->client->cluster()->health();
    }
}