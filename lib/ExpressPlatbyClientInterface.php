<?php

namespace ExpressPlatby;

/**
 * Interface for a ExpressPlatby client.
 */
interface ExpressPlatbyClientInterface extends BaseExpressPlatbyClientInterface
{
    /**
     * Sends a request to ExpressPlatby's API.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\ExpressPlatby\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \ExpressPlatby\ExpressPlatbyObject the object returned by ExpressPlatby's API
     */
    public function request($method, $path, $params, $opts);
}
