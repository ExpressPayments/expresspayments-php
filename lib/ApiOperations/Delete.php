<?php

namespace ExpressPayments\ApiOperations;

/**
 * Trait for deletable resources. Adds a `delete()` method to the class.
 *
 * This trait should only be applied to classes that derive from ExpressPaymentsObject.
 */
trait Delete
{
    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return static the deleted resource
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function delete($params = null, $opts = null)
    {
        self::_validateParams($params);

        $url = $this->instanceUrl();
        list($response, $opts) = $this->_request('delete', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }
}
