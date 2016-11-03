<?php

namespace Sihades\Marvel\CatalogBundle\Tests\Request;

use Sihades\Marvel\CatalogBundle\Request\MarvelRequest;
use Symfony\Bundle\FrameworkBundle\Console\Application;

class MarvelRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testIsSending()
    {
        $marvelRequestMock = $this->prophesize(MarvelRequest::class);

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

        $marvelRequestMock->request('test', 1, 15)->willReturn($results);

        $marvelRequestMock->send('test', 1, 5);
    }
}
