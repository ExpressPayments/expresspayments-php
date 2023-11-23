<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service;

class TokenService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Creates a single-use token that represents a bank account’s details. You can use
     * this token with any API method in place of a bank account dictionary. You can
     * only use this token once. To do so, attach it to a <a href="#accounts">Custom
     * account</a>.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Token
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/tokens', $params, $opts);
    }

    /**
     * Retrieves the token with the given ID.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Token
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/tokens/%s', $id), $params, $opts);
    }
}
