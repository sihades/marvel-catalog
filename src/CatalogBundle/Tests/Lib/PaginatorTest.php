<?php

namespace Sihades\Marvel\CatalogBundle\Tests\Lib;

use Sihades\Marvel\CatalogBundle\Lib\Paginator;

class PaginatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsGettingTotalPages()
    {
        $totalPages = 5;

        $paginatorMock = $this->prophesize(Paginator::class);

        $paginatorMock->getTotalPages()->willReturn($totalPages);

        $this->assertEquals($totalPages, $paginatorMock->reveal()->getTotalPages());
    }

    public function testIsGettingPageList()
    {
        
    }
}
