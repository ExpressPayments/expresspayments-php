<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Apps;

class SecretService extends \ExpressPayments\Service\AbstractService
{
    /**
     * List all secrets stored on the given scope.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Apps\Secret>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/apps/secrets', $params, $opts);
    }

    /**
     * Create or replace a secret in the secret store.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Apps\Secret
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/apps/secrets', $params, $opts);
    }

    /**
     * Deletes a secret from the secret store by name and scope.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Apps\Secret
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function deleteWhere($params = null, $opts = null)
    {
        return $this->request('post', '/v1/apps/secrets/delete', $params, $opts);
    }

    /**
     * Finds a secret in the secret store by name and scope.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Apps\Secret
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function find($params = null, $opts = null)
    {
        return $this->request('get', '/v1/apps/secrets/find', $params, $opts);
    }
}
