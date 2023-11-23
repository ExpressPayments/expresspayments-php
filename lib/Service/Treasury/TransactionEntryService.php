<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Treasury;

class TransactionEntryService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Retrieves a list of TransactionEntry objects.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Treasury\TransactionEntry>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/treasury/transaction_entries', $params, $opts);
    }

    /**
     * Retrieves a TransactionEntry object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Treasury\TransactionEntry
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/treasury/transaction_entries/%s', $id), $params, $opts);
    }
}
