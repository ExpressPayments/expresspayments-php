<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Tax;

/**
 * You can use Tax <code>Settings</code> to manage configurations used by ExpressPlatby Tax calculations.
 *
 * Related guide: <a href="https://expressplatby.cz/docs/tax/settings-api">Using the Settings API</a>
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \ExpressPlatby\ExpressPlatbyObject $defaults
 * @property null|\ExpressPlatby\ExpressPlatbyObject $head_office The place where your business is located.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property string $status The <code>active</code> status indicates you have all required settings to calculate tax. A status can transition out of <code>active</code> when new required settings are introduced.
 * @property \ExpressPlatby\ExpressPlatbyObject $status_details
 */
class Settings extends \ExpressPlatby\SingletonApiResource
{
    const OBJECT_NAME = 'tax.settings';

    use \ExpressPlatby\ApiOperations\SingletonRetrieve;
    use \ExpressPlatby\ApiOperations\Update;

    const STATUS_ACTIVE = 'active';
    const STATUS_PENDING = 'pending';
}
