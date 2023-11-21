<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby;

/**
 * This is an object representing your ExpressPlatby balance. You can retrieve it to see
 * the balance currently on your ExpressPlatby account.
 *
 * You can also retrieve the balance history, which contains a list of
 * <a href="https://expressplatby.cz/docs/reporting/balance-transaction-types">transactions</a> that contributed to the balance
 * (charges, payouts, and so forth).
 *
 * The available and pending amounts for each currency are broken down further by
 * payment source types.
 *
 * Related guide: <a href="https://expressplatby.cz/docs/connect/account-balances">Understanding Connect account balances</a>
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \ExpressPlatby\ExpressPlatbyObject[] $available Available funds that you can transfer or pay out automatically by ExpressPlatby or explicitly through the <a href="https://expressplatby.cz/docs/api#transfers">Transfers API</a> or <a href="https://expressplatby.cz/docs/api#payouts">Payouts API</a>. You can find the available balance for each currency and payment type in the <code>source_types</code> property.
 * @property null|\ExpressPlatby\ExpressPlatbyObject[] $connect_reserved Funds held due to negative balances on connected Custom accounts. You can find the connect reserve balance for each currency and payment type in the <code>source_types</code> property.
 * @property null|\ExpressPlatby\ExpressPlatbyObject[] $instant_available Funds that you can pay out using Instant Payouts.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $issuing
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \ExpressPlatby\ExpressPlatbyObject[] $pending Funds that aren't available in the balance yet. You can find the pending balance for each currency and each payment type in the <code>source_types</code> property.
 */
class Balance extends SingletonApiResource
{
    const OBJECT_NAME = 'balance';

    use ApiOperations\SingletonRetrieve;
}
