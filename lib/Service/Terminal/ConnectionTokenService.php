<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Terminal;

class ConnectionTokenService extends \ExpressPayments\Service\AbstractService
{
    /**
     * To connect to a reader the ExpressPayments Terminal SDK needs to retrieve a short-lived
     * connection token from ExpressPayments, proxied through your server. On your backend, add
     * an endpoint that creates and returns a connection token.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Terminal\ConnectionToken
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/terminal/connection_tokens', $params, $opts);
    }
}
