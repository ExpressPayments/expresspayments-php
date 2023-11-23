<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Treasury;

/**
 * Encodes whether a FinancialAccount has access to a particular Feature, with a <code>status</code> enum and associated <code>status_details</code>.
 * ExpressPayments or the platform can control Features via the requested field.
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $card_issuing Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPayments\ExpressPaymentsObject $deposit_insurance Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPayments\ExpressPaymentsObject $financial_addresses Settings related to Financial Addresses features on a Financial Account
 * @property null|\ExpressPayments\ExpressPaymentsObject $inbound_transfers InboundTransfers contains inbound transfers features for a FinancialAccount.
 * @property null|\ExpressPayments\ExpressPaymentsObject $intra_expresspayments_flows Toggle settings for enabling/disabling a feature
 * @property null|\ExpressPayments\ExpressPaymentsObject $outbound_payments Settings related to Outbound Payments features on a Financial Account
 * @property null|\ExpressPayments\ExpressPaymentsObject $outbound_transfers OutboundTransfers contains outbound transfers features for a FinancialAccount.
 */
class FinancialAccountFeatures extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'treasury.financial_account_features';
}
