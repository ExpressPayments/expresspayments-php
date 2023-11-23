<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\FinancialConnections;

class SessionService extends \ExpressPayments\Service\AbstractService
{
    /**
     * To launch the Financial Connections authorization flow, create a
     * <code>Session</code>. The session’s <code>client_secret</code> can be used to
     * launch the flow using ExpressPayments.js.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\FinancialConnections\Session
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/financial_connections/sessions', $params, $opts);
    }

    /**
     * Retrieves the details of a Financial Connections <code>Session</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\FinancialConnections\Session
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/financial_connections/sessions/%s', $id), $params, $opts);
    }
}
