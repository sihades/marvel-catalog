<?php

namespace Sihades\Marvel\CatalogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sihades\Marvel\CatalogBundle\Request\CharactersRequest;

/**
 * @Route("/characters", service="marvel.characters.controller")
 */
class CharactersController extends Controller
{
    /**
     * @CharactersRequest
     */
    protected $request;

    /**
     * @Route("/", name="characters")
     * @Template()
     */
    public function charactersAction(Request $request)
    {
        $charactersData = $this->request->send();

        return [
            'characters' => $charactersData,
        ];
    }

    /**
     * @param CharactersRequest $request
     */
    public function setRequest(CharactersRequest $request)
    {
        $this->request = $request;
    }
}
