<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\Terminal;

class ConnectionTokenService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * To connect to a reader the ExpressPlatby Terminal SDK needs to retrieve a short-lived
     * connection token from ExpressPlatby, proxied through your server. On your backend, add
     * an endpoint that creates and returns a connection token.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Terminal\ConnectionToken
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/terminal/connection_tokens', $params, $opts);
    }
}
