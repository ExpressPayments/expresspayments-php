<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service;

class AccountSessionService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Creates a AccountSession object that includes a single-use token that the
     * platform can use on their front-end to grant client-side API access.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\AccountSession
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_sessions', $params, $opts);
    }
}
