<?php

namespace Sihades\Marvel\CatalogBundle\Request;

/**
 * Class CharactersRequest.
 */
class CharactersRequest extends AbstractRequest
{
    public function send($action = '')
    {
        $response = $this->request($action, 0, 20);
        $body = json_decode($response->getBody(), true);

        return $body['data']['results'];
    }
}
