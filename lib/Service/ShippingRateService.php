<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service;

class ShippingRateService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Returns a list of your shipping rates.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\Collection<\ExpressPlatby\ShippingRate>
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/shipping_rates', $params, $opts);
    }

    /**
     * Creates a new shipping rate object.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\ShippingRate
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/shipping_rates', $params, $opts);
    }

    /**
     * Returns the shipping rate object with the given ID.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\ShippingRate
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/shipping_rates/%s', $id), $params, $opts);
    }

    /**
     * Updates an existing shipping rate object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @return \ExpressPlatby\ShippingRate
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/shipping_rates/%s', $id), $params, $opts);
    }
}
