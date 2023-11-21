<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Terminal;

/**
 * A Configurations object represents how features should be configured for terminal readers.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $bbpos_wisepos_e
 * @property null|bool $is_account_default Whether this Configuration is the default for your account
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $offline
 * @property null|\ExpressPlatby\ExpressPlatbyObject $tipping
 * @property null|\ExpressPlatby\ExpressPlatbyObject $verifone_p400
 */
class Configuration extends \ExpressPlatby\ApiResource
{
    const OBJECT_NAME = 'terminal.configuration';

    use \ExpressPlatby\ApiOperations\All;
    use \ExpressPlatby\ApiOperations\Create;
    use \ExpressPlatby\ApiOperations\Delete;
    use \ExpressPlatby\ApiOperations\Retrieve;
    use \ExpressPlatby\ApiOperations\Update;
}
