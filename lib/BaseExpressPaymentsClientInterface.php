<?php

namespace ExpressPayments;

/**
 * Interface for an ExpressPayments client.
 */
interface BaseExpressPaymentsClientInterface
{
    /**
     * Gets the API key used by the client to send requests.
     *
     * @return null|string the API key used by the client to send requests
     */
    public function getApiKey();

    /**
     * Gets the client ID used by the client in OAuth requests.
     *
     * @return null|string the client ID used by the client in OAuth requests
     */
    public function getClientId();

    /**
     * Gets the base URL for ExpressPayments' API.
     *
     * @return string the base URL for ExpressPayments' API
     */
    public function getApiBase();

    /**
     * Gets the base URL for ExpressPayments' OAuth API.
     *
     * @return string the base URL for ExpressPayments' OAuth API
     */
    public function getConnectBase();

    /**
     * Gets the base URL for ExpressPayments' Files API.
     *
     * @return string the base URL for ExpressPayments' Files API
     */
    public function getFilesBase();
}
