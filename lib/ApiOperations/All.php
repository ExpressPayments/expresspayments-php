<?php

namespace ExpressPayments\ApiOperations;

/**
 * Trait for listable resources. Adds a `all()` static method to the class.
 *
 * This trait should only be applied to classes that derive from ExpressPaymentsObject.
 */
trait All
{
    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Collection of ApiResources
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function all($params = null, $opts = null)
    {
        self::_validateParams($params);
        $url = static::classUrl();

        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        if (!($obj instanceof \ExpressPayments\Collection)) {
            throw new \ExpressPayments\Exception\UnexpectedValueException(
                'Expected type ' . \ExpressPayments\Collection::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
