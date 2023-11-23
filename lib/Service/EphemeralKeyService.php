<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service;

class EphemeralKeyService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Invalidates a short-lived API key for a given resource.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\EphemeralKey
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function delete($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/ephemeral_keys/%s', $id), $params, $opts);
    }

    /**
     * Creates a short-lived API key for a given resource.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\EphemeralKey
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        if (!$opts || !isset($opts['ep_version'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('ep_version must be specified to create an ephemeral key');
        }

        return $this->request('post', '/v1/ephemeral_keys', $params, $opts);
    }
}
