<?php

namespace ExpressPlatby\Exception;

/**
 * InvalidRequestException is thrown when a request is initiated with invalid
 * parameters.
 */
class InvalidRequestException extends ApiErrorException
{
    protected $expressPlatbyParam;

    /**
     * Creates a new InvalidRequestException exception.
     *
     * @param string $message the exception message
     * @param null|int $httpStatus the HTTP status code
     * @param null|string $httpBody the HTTP body as a string
     * @param null|array $jsonBody the JSON deserialized body
     * @param null|array|\ExpressPlatby\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
     * @param null|string $expressPlatbyCode the ExpressPlatby error code
     * @param null|string $expressPlatbyParam the parameter related to the error
     *
     * @return InvalidRequestException
     */
    public static function factory(
        $message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $expressPlatbyCode = null,
        $expressPlatbyParam = null
    ) {
        $instance = parent::factory($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $expressPlatbyCode);
        $instance->setExpressPlatbyParam($expressPlatbyParam);

        return $instance;
    }

    /**
     * Gets the parameter related to the error.
     *
     * @return null|string
     */
    public function getExpressPlatbyParam()
    {
        return $this->expressPlatbyParam;
    }

    /**
     * Sets the parameter related to the error.
     *
     * @param null|string $expressPlatbyParam
     */
    public function setExpressPlatbyParam($expressPlatbyParam)
    {
        $this->expressPlatbyParam = $expressPlatbyParam;
    }
}
