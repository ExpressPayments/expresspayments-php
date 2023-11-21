<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\BillingPortal;

class SessionService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Creates a session of the customer portal.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\BillingPortal\Session
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/billing_portal/sessions', $params, $opts);
    }
}
