<?php

namespace ExpressPayments\Exception\OAuth;

/**
 * InvalidClientException is thrown when the client_id does not belong to you,
 * the ep_user_id does not exist or is not connected to your application,
 * or the API key mode (live or test mode) does not match the client_id mode.
 */
class InvalidClientException extends OAuthErrorException
{
}
