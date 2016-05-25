<?php

namespace Sihades\Marvel\CatalogBundle\Request;

use Sihades\Marvel\CatalogBundle\Handler\CacheRequestHandler;

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
     * @Sihades\Marvel\CatalogBundle\Handler\CacheRequestHandler
     */
    private $handler;

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

        return $this->handler->getClient()->get($this->endpoint.$action.
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
     * @param CacheRequestHandler $handler
     */
    public function setHandler(CacheRequestHandler $handler)
    {
        $this->handler = $handler;
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
