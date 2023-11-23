<?php

namespace ExpressPayments\ApiOperations;

/**
 * Trait for searchable resources.
 *
 * This trait should only be applied to classes that derive from ExpressPaymentsObject.
 */
trait Search
{
    /**
     * @param string $searchUrl
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\SearchResult of ApiResources
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _searchResource($searchUrl, $params = null, $opts = null)
    {
        self::_validateParams($params);

        list($response, $opts) = static::_staticRequest('get', $searchUrl, $params, $opts);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        if (!($obj instanceof \ExpressPayments\SearchResult)) {
            throw new \ExpressPayments\Exception\UnexpectedValueException(
                'Expected type ' . \ExpressPayments\SearchResult::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
