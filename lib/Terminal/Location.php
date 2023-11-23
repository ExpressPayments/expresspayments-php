<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Terminal;

/**
 * A Location represents a grouping of readers.
 *
 * Related guide: <a href="https://docs.epayments.network/terminal/fleet/locations">Fleet management</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \ExpressPayments\ExpressPaymentsObject $address
 * @property null|string $configuration_overrides The ID of a configuration that will be used to customize all readers in this location.
 * @property string $display_name The display name of the location.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 */
class Location extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'terminal.location';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Create;
    use \ExpressPayments\ApiOperations\Delete;
    use \ExpressPayments\ApiOperations\Retrieve;
    use \ExpressPayments\ApiOperations\Update;
}
