<?php

namespace ExpressPayments\ApiOperations;

/**
 * Trait for creatable resources. Adds a `create()` static method to the class.
 *
 * This trait should only be applied to classes that derive from ExpressPaymentsObject.
 */
trait Create
{
    /**
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return static the created resource
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function create($params = null, $options = null)
    {
        self::_validateParams($params);
        $url = static::classUrl();

        list($response, $opts) = static::_staticRequest('post', $url, $params, $options);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }
}
