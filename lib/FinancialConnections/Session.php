<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\FinancialConnections;

/**
 * A Financial Connections Session is the secure way to programmatically launch the client-side ExpressPayments.js modal that lets your users link their accounts.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $account_holder The account holder for whom accounts are collected in this session.
 * @property \ExpressPayments\Collection<\ExpressPayments\FinancialConnections\Account> $accounts The accounts that were collected as part of this Session.
 * @property string $client_secret A value that will be passed to the client to launch the authentication flow.
 * @property null|\ExpressPayments\ExpressPaymentsObject $filters
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property string[] $permissions Permissions requested for accounts collected during this session.
 * @property null|string[] $prefetch Data features requested to be retrieved upon account creation.
 * @property null|string $return_url For webview integrations only. Upon completing OAuth login in the native browser, the user will be redirected to this URL to return to your app.
 */
class Session extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'financial_connections.session';

    use \ExpressPayments\ApiOperations\Create;
    use \ExpressPayments\ApiOperations\Retrieve;
}
