<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\TestHelpers\Treasury;

class OutboundPaymentService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Transitions a test mode created OutboundPayment to the <code>failed</code>
     * status. The OutboundPayment must already be in the <code>processing</code>
     * state.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Treasury\OutboundPayment
     */
    public function fail($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/treasury/outbound_payments/%s/fail', $id), $params, $opts);
    }

    /**
     * Transitions a test mode created OutboundPayment to the <code>posted</code>
     * status. The OutboundPayment must already be in the <code>processing</code>
     * state.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Treasury\OutboundPayment
     */
    public function post($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/treasury/outbound_payments/%s/post', $id), $params, $opts);
    }

    /**
     * Transitions a test mode created OutboundPayment to the <code>returned</code>
     * status. The OutboundPayment must already be in the <code>processing</code>
     * state.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Treasury\OutboundPayment
     */
    public function returnOutboundPayment($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/treasury/outbound_payments/%s/return', $id), $params, $opts);
    }
}
