<?php

namespace Sihades\Marvel\CatalogBundle\Tests\Request;

use GuzzleHttp\Client;

require_once __DIR__.'/../../../../app/AppKernel.php';

class AbstractRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var string
     */
    private $privateKey;

    /**
     * @var string
     */
    private $publicKey;

    /**
     * @var string
     */
    private $endpoint;

    public function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
        $application->setAutoExit(false);

        $this->baseUri = $application->getKernel()->getContainer()->getParameter('marvel.base_url');
        $this->privateKey = $application->getKernel()->getContainer()->getParameter('marvel.private_key');
        $this->publicKey = $application->getKernel()->getContainer()->getParameter('marvel.public_key');
        $this->endpoint = $application->getKernel()->getContainer()->getParameter('marvel.endpoints.characters');
    }

    /**
     * @param Sihades\Marvel\CatalogBundle\Request\AbstractRequest $object
     * @param string                                               $method
     * @param array                                                $args
     *
     * @return mixed
     */
    public static function callProtectedMethod($object, $method, array $args = array())
    {
        $class = new \ReflectionClass(get_class($object));

        $method = $class->getMethod($method);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $args);
    }

    public function testRequest()
    {
        $offset = 0;
        $limit = 2;

        $mockAbstractRequest = $this->getMockForAbstractClass('Sihades\Marvel\CatalogBundle\Request\AbstractRequest');
        $mockAbstractRequest->setClient(new Client(array(
            'base_uri' => $this->baseUri,
        )));
        $mockAbstractRequest->setPrivateKey($this->privateKey);
        $mockAbstractRequest->setPublicKey($this->publicKey);
        $mockAbstractRequest->setEndpoint($this->endpoint);

        $response = self::callProtectedMethod($mockAbstractRequest, 'request', array('', $offset, $limit));
        $body = json_decode($response->getBody(), true);

        $this->assertEquals('Ok', $body['status']);
        $this->assertEquals('200', $body['code']);
        $this->assertEquals($limit, $body['data']['count']);
        $this->assertGreaterThan(0, $body['data']['total']);
        $this->assertNotEmpty($body['data']['results']);
        $this->assertCount($limit, $body['data']['results']);
    }
}
