<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service;

class AccountLinkService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Creates an AccountLink object that includes a single-use ExpressPlatby URL that the
     * platform can redirect their user to in order to take them through the Connect
     * Onboarding flow.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\AccountLink
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_links', $params, $opts);
    }
}
