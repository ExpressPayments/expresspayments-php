<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Treasury;

/**
 * Encodes whether a FinancialAccount has access to a particular Feature, with a <code>status</code> enum and associated <code>status_details</code>.
 * ExpressPlatby or the platform can control Features via the requested field.
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $card_issuing Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPlatby\ExpressPlatbyObject $deposit_insurance Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPlatby\ExpressPlatbyObject $financial_addresses Settings related to Financial Addresses features on a Financial Account
 * @property null|\ExpressPlatby\ExpressPlatbyObject $inbound_transfers InboundTransfers contains inbound transfers features for a FinancialAccount.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $intra_expressplatby_flows Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPlatby\ExpressPlatbyObject $outbound_payments Settings related to Outbound Payments features on a Financial Account
 * @property null|\ExpressPlatby\ExpressPlatbyObject $outbound_transfers OutboundTransfers contains outbound transfers features for a FinancialAccount.
 */
class FinancialAccountFeatures extends \ExpressPlatby\ApiResource
{
    const OBJECT_NAME = 'treasury.financial_account_features';
}
