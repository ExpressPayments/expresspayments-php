<?php

namespace ExpressPayments;

/**
 * Interface for an ExpressPayments client.
 */
interface ExpressPaymentsClientInterface extends BaseExpressPaymentsClientInterface
{
    /**
     * Sends a request to ExpressPayments' API.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\ExpressPayments\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \ExpressPayments\ExpressPaymentsObject the object returned by ExpressPayments' API
     */
    public function request($method, $path, $params, $opts);
}
