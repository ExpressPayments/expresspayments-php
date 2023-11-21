<?php

namespace ExpressPlatby\Exception\OAuth;

/**
 * Implements properties and methods common to all (non-SPL) ExpressPlatby OAuth
 * exceptions.
 */
abstract class OAuthErrorException extends \ExpressPlatby\Exception\ApiErrorException
{
    protected function constructErrorObject()
    {
        if (null === $this->jsonBody) {
            return null;
        }

        return \ExpressPlatby\OAuthErrorObject::constructFrom($this->jsonBody);
    }
}
