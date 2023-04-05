<?php

namespace ElasticTest;

class Diagnostics extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getHealth()
    {
        return $this->client->cluster()->health();
    }
}