<?php

declare(strict_types = 1);

namespace Sihades\Marvel\CatalogBundle\Lib;

/**
 * Class Paginator
 *
 * @package Sihades\Marvel\CatalogBundle\Lib
 */
class Paginator
{
    /**
     * @const  DEFAULT_ITEMS_IN_PAGE  The default items per page
     */
    const DEFAULT_ITEMS_IN_PAGE = 20;

    /**
     * @const MIN_PAGE_COUNT The minimal pages
     */
    const MIN_PAGE_COUNT = 5;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $itemsInPage;

    /**
     * @var int
     */
    protected $totalPages;

    /**
     * Paginator constructor.
     *
     * @param int $page
     * @param int $totalCount
     * @param int $itemsInPage
     */
    public function __construct($page, $totalCount, $itemsInPage)
    {
        $this->page = $page;
        $this->setItemsInPage($itemsInPage);
        $this->setTotalPages($totalCount);
    }

    /**
     * @param $itemsInPage
     */
    protected function setItemsInPage($itemsInPage)
    {
        $this->itemsInPage = ($itemsInPage > 0) ?: self::DEFAULT_ITEMS_IN_PAGE;
    }

    /**
     * @param $totalCount
     */
    protected function setTotalPages($totalCount)
    {
        $this->totalPages = (int) ceil($totalCount / $this->itemsInPage);
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @return array
     */
    public function getPagesList(): array
    {
        $results = [];
        $counter = self::MIN_PAGE_COUNT;
        $half = floor(self::MIN_PAGE_COUNT / 2);

        if ($this->totalPages <= self::MIN_PAGE_COUNT || $this->page <= 3) {
            return [1, 2, 3, 4, 5];
        }

        if (($this->page + $half) > $this->totalPages) {
            while ($counter >= 1) {
                $results[] = $this->totalPages - $counter + 1;
                $counter--;
            }
        } else {
            while ($counter >= 1) {
                $results[] = $this->page - $counter + $half + 1;
                $counter--;
            }
        }

        return $results;
    }
}
