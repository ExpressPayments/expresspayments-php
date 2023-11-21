<?php

namespace ExpressPlatby\Exception;

/**
 * CardException is thrown when a user enters a card that can't be charged for
 * some reason.
 */
class CardException extends ApiErrorException
{
    protected $declineCode;
    protected $expressPlatbyParam;

    /**
     * Creates a new CardException exception.
     *
     * @param string $message the exception message
     * @param null|int $httpStatus the HTTP status code
     * @param null|string $httpBody the HTTP body as a string
     * @param null|array $jsonBody the JSON deserialized body
     * @param null|array|\ExpressPlatby\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
     * @param null|string $expressPlatbyCode the ExpressPlatby error code
     * @param null|string $declineCode the decline code
     * @param null|string $expressPlatbyParam the parameter related to the error
     *
     * @return CardException
     */
    public static function factory(
        $message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $expressPlatbyCode = null,
        $declineCode = null,
        $expressPlatbyParam = null
    ) {
        $instance = parent::factory($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $expressPlatbyCode);
        $instance->setDeclineCode($declineCode);
        $instance->setExpressPlatbyParam($expressPlatbyParam);

        return $instance;
    }

    /**
     * Gets the decline code.
     *
     * @return null|string
     */
    public function getDeclineCode()
    {
        return $this->declineCode;
    }

    /**
     * Sets the decline code.
     *
     * @param null|string $declineCode
     */
    public function setDeclineCode($declineCode)
    {
        $this->declineCode = $declineCode;
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
