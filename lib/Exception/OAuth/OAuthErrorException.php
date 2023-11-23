<?php

namespace ExpressPayments\Exception\OAuth;

/**
 * Implements properties and methods common to all (non-SPL) ExpressPayments OAuth
 * exceptions.
 */
abstract class OAuthErrorException extends \ExpressPayments\Exception\ApiErrorException
{
    protected function constructErrorObject()
    {
        if (null === $this->jsonBody) {
            return null;
        }

        return \ExpressPayments\OAuthErrorObject::constructFrom($this->jsonBody);
    }
}
