<?php

namespace Sihades\Marvel\CatalogBundle\Request;

use GuzzleHttp\Client;

/**
 * Class AbstractRequest.
 */
abstract class AbstractRequest
{
    /**
     * @string
     */
    private $privateKey;

    /**
     * @string
     */
    private $publicKey;

    /**
     * @GuzzleHttp\Client
     */
    private $client;

    /**
     * @string
     */
    private $endpoint;

    /**
     * @string $action
     * @int $offset
     * @pint $limit
     *
     * @return GuzzleHttp\Psr7\Response
     */
    protected function request($action, $offset, $limit)
    {
        $timestamp = time();
        $hash = md5($timestamp.$this->privateKey.$this->publicKey);

        return $this->client->get($this->endpoint.$action.
            '?offset='.$offset.
            '&limit='.$limit.
            '&ts='.$timestamp.
            '&apikey='.$this->publicKey.
            '&hash='.$hash
        );
    }

    /**
     * @param $privateKey
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @param $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    abstract public function send($action);
}
