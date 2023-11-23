<?php

namespace ExpressPayments\Exception;

/**
 * InvalidRequestException is thrown when a request is initiated with invalid
 * parameters.
 */
class InvalidRequestException extends ApiErrorException
{
    protected $expressPaymentsParam;

    /**
     * Creates a new InvalidRequestException exception.
     *
     * @param string $message the exception message
     * @param null|int $httpStatus the HTTP status code
     * @param null|string $httpBody the HTTP body as a string
     * @param null|array $jsonBody the JSON deserialized body
     * @param null|array|\ExpressPayments\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
     * @param null|string $expressPaymentsCode the ExpressPayments error code
     * @param null|string $expressPaymentsParam the parameter related to the error
     *
     * @return InvalidRequestException
     */
    public static function factory(
        $message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $expressPaymentsCode = null,
        $expressPaymentsParam = null
    ) {
        $instance = parent::factory($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $expressPaymentsCode);
        $instance->setExpressPaymentsParam($expressPaymentsParam);

        return $instance;
    }

    /**
     * Gets the parameter related to the error.
     *
     * @return null|string
     */
    public function getExpressPaymentsParam()
    {
        return $this->expressPaymentsParam;
    }

    /**
     * Sets the parameter related to the error.
     *
     * @param null|string $expressPaymentsParam
     */
    public function setExpressPaymentsParam($expressPaymentsParam)
    {
        $this->expressPaymentsParam = $expressPaymentsParam;
    }
}
