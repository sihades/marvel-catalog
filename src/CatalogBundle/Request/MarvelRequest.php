<?php

declare(strict_types = 1);

namespace Sihades\Marvel\CatalogBundle\Request;

use Sihades\Marvel\CatalogBundle\Handler\CacheRequestHandler;

/**
 * Class MarvelRequest.
 */
class MarvelRequest
{
    /**
     * @var CacheRequestHandler
     */
    protected $handler;

    /**
     * @var string
     */
    protected $privateKey;

    /**
     * @var string
     */
    protected $publicKey;

    /**
     * @param string $endpoint
     * @param int $page
     * @param int $limit
     *
     * @return Response
     */
    protected function request($endpoint, $page, $limit)
    {
        $timestamp = time();
        $hash = md5($timestamp . $this->privateKey . $this->publicKey);
        $offset = ($page - 1) * $limit;

        $response =  $this->handler->getClient()->get($endpoint
            . '?offset=' . $offset
            . '&limit=' . $limit
            . '&ts=' . $timestamp
            . '&apikey=' . $this->publicKey
            . '&hash=' . $hash
        );

        return (is_object($response->getBody())) ? $response->getBody()->getContents() : $response->getBody();
    }

    /**
     * @param CacheRequestHandler $handler
     */
    public function setHandler(CacheRequestHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param string $privateKey
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @param string $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * @param string $endpoint
     * @param int $page
     * @param int $limit
     *
     * @return array
     */
    public function send($endpoint, $page, $limit): array
    {
        $response = $this->request($endpoint, $page, $limit);
        $body = json_decode($response, true);

        return $body['data'];
    }
}
