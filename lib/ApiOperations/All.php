<?php

namespace ExpressPlatby\ApiOperations;

/**
 * Trait for listable resources. Adds a `all()` static method to the class.
 *
 * This trait should only be applied to classes that derive from ExpressPlatbyObject.
 */
trait All
{
    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Collection of ApiResources
     */
    public static function all($params = null, $opts = null)
    {
        self::_validateParams($params);
        $url = static::classUrl();

        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \ExpressPlatby\Util\Util::convertToExpressPlatbyObject($response->json, $opts);
        if (!($obj instanceof \ExpressPlatby\Collection)) {
            throw new \ExpressPlatby\Exception\UnexpectedValueException(
                'Expected type ' . \ExpressPlatby\Collection::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
