<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Treasury;

class TransactionService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Retrieves a list of Transaction objects.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Treasury\Transaction>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/treasury/transactions', $params, $opts);
    }

    /**
     * Retrieves the details of an existing Transaction.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Treasury\Transaction
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/treasury/transactions/%s', $id), $params, $opts);
    }
}
