<?php

namespace Sihades\Marvel\CatalogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sihades\Marvel\CatalogBundle\Request\MarvelRequest;
use Sihades\Marvel\CatalogBundle\Lib\Paginator;

/**
 * @Route("/characters", service="marvel.characters.controller")
 */
class CharactersController extends Controller
{
    /**
     * @string
     */
    protected $endpoint;

    /**
     * @var MarvelRequest
     */
    protected $marvelRequest;

    /**
     * @var int
     */
    protected $paginatorLimit;

    /**
     * @Route("/", name="characters")
     * @Template()
     */
    public function charactersAction(Request $request)
    {
        $page = $request->query->getInt('page', 1);
        $charactersData = $this->marvelRequest->send($this->endpoint, $page, $this->paginatorLimit);

        return [
            'characters' => json_encode($charactersData['results']),
            'paginator' => new Paginator($page, $charactersData['total'], $this->paginatorLimit),
            'endpoint' => $this->endpoint,
        ];
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param MarvelRequest $marvelRequest
     */
    public function setMarvelRequest(MarvelRequest $marvelRequest)
    {
        $this->marvelRequest = $marvelRequest;
    }

    /**
     * @param int $paginatorLimit
     */
    public function setPaginatorLimit(int $paginatorLimit)
    {
        $this->paginatorLimit = $paginatorLimit;
    }
}
