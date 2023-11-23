<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Treasury;

class OutboundPaymentService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Returns a list of OutboundPayments sent from the specified FinancialAccount.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Treasury\OutboundPayment>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/treasury/outbound_payments', $params, $opts);
    }

    /**
     * Cancel an OutboundPayment.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Treasury\OutboundPayment
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function cancel($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/treasury/outbound_payments/%s/cancel', $id), $params, $opts);
    }

    /**
     * Creates an OutboundPayment.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Treasury\OutboundPayment
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/treasury/outbound_payments', $params, $opts);
    }

    /**
     * Retrieves the details of an existing OutboundPayment by passing the unique
     * OutboundPayment ID from either the OutboundPayment creation request or
     * OutboundPayment list.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Treasury\OutboundPayment
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/treasury/outbound_payments/%s', $id), $params, $opts);
    }
}
