<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\TestHelpers;

class RefundService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Expire a refund with a status of <code>requires_action</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Refund
     */
    public function expire($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/refunds/%s/expire', $id), $params, $opts);
    }
}
