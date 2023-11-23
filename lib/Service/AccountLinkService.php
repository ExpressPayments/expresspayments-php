<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service;

class AccountLinkService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Creates an AccountLink object that includes a single-use ExpressPayments URL that the
     * platform can redirect their user to in order to take them through the Connect
     * Onboarding flow.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\AccountLink
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_links', $params, $opts);
    }
}
