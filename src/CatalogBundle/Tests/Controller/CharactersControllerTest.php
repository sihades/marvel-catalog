<?php

namespace Sihades\Marvel\CatalogBundle\Tests\Controller;

use Sihades\Marvel\CatalogBundle\Controller\CharactersController;
use Sihades\Marvel\CatalogBundle\Request\MarvelRequest;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class CharactersControllerTest extends WebTestCase
{
    public function testIsRequestingCharactersAction()
    {
        $marvelRequestMock = $this->prophesize(MarvelRequest::class);

        $request = new Request();
        $charactersController = new CharactersController();
        $charactersController->setEndpoint('test');
        $charactersController->setMarvelRequest($marvelRequestMock->reveal());
        $charactersController->setPaginatorLimit(5);

        $results = [
            'results' => [],
            'total' => 5,
        ];

        for ($i = 0; $i <= 5; $i++) {
            $results['results'][] = [
                'id' => $i + 1,
                'name' => 'Test name ' . ($i + 1)
            ];
        }

        $marvelRequestMock->send('test', 1, 5)->willReturn([
            'results' => $results,
            'total' => 5,
        ]);

        $marvelRequestMock->send('test', 1, 5)->shouldBeCalled();

        $response = $charactersController->charactersAction($request);

        $this->assertNotEmpty($response['characters']);
        $this->assertInstanceOf('Sihades\Marvel\CatalogBundle\Lib\Paginator', $response['paginator']);
        $this->assertEquals('test', $response['endpoint']);
    }
}
