<?php

namespace Sihades\Marvel\CatalogBundle\Handler;

use GuzzleHttp\Client;
use Concat\Http\Handler\CacheHandler;
use Doctrine\Common\Cache\FilesystemCache;

/**
 * Class CacheRequestHandler.
 */
class CacheRequestHandler
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * CacheRequestHandler constructor.
     *
     * @param $baseUri
     * @param $cacheDir
     */
    public function __construct($baseUri, $cacheDir)
    {
        $this->client = new Client([
            'base_uri' => $baseUri,
            'handler' => new CacheHandler(
                new FilesystemCache($cacheDir),
                null,
                [
                    'methods' => ['GET', 'HEAD', 'OPTIONS'],
                    'expire' => 3600,
                    'filter' => null,
                ]
            ),
        ]);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
