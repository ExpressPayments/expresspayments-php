<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service;

class AccountSessionService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Creates a AccountSession object that includes a single-use token that the
     * platform can use on their front-end to grant client-side API access.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\AccountSession
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_sessions', $params, $opts);
    }
}
