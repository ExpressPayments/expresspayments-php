<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Tax;

class SettingsService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Retrieves Tax <code>Settings</code> for a merchant.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Tax\Settings
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($params = null, $opts = null)
    {
        return $this->request('get', '/v1/tax/settings', $params, $opts);
    }

    /**
     * Updates Tax <code>Settings</code> parameters used in tax calculations. All
     * parameters are editable but none can be removed once set.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Tax\Settings
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function update($params = null, $opts = null)
    {
        return $this->request('post', '/v1/tax/settings', $params, $opts);
    }
}
