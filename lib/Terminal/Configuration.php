<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Terminal;

/**
 * A Configurations object represents how features should be configured for terminal readers.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $bbpos_wisepos_e
 * @property null|bool $is_account_default Whether this Configuration is the default for your account
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPayments\ExpressPaymentsObject $offline
 * @property null|\ExpressPayments\ExpressPaymentsObject $tipping
 * @property null|\ExpressPayments\ExpressPaymentsObject $verifone_p400
 */
class Configuration extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'terminal.configuration';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Create;
    use \ExpressPayments\ApiOperations\Delete;
    use \ExpressPayments\ApiOperations\Retrieve;
    use \ExpressPayments\ApiOperations\Update;
}
