<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service;

class PaymentMethodConfigurationService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * List payment method configurations.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\Collection<\ExpressPlatby\PaymentMethodConfiguration>
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/payment_method_configurations', $params, $opts);
    }

    /**
     * Creates a payment method configuration.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\PaymentMethodConfiguration
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/payment_method_configurations', $params, $opts);
    }

    /**
     * Retrieve payment method configuration.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\PaymentMethodConfiguration
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/payment_method_configurations/%s', $id), $params, $opts);
    }

    /**
     * Update payment method configuration.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\PaymentMethodConfiguration
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/payment_method_configurations/%s', $id), $params, $opts);
    }
}
