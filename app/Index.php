<?php

namespace ElasticTest;

class Index extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $params
     * @return array|callable
     */
    public function singleIndex($params){
        return $this->client->index($params);
    }

    /**
     * @param $params
     * @return array|callable
     */
    public function bulkIndex($params){
        return $this->client->bulk($params);
    }

    /**
     * @param $params
     * @return array
     */
    public function getIndex($params): array
    {
        return $this->client->get($params);
    }

    /**
     * @param $params
     * @return array
     */
    public function updateIndex($params): array
    {
        return $this->client->update($params);
    }
}