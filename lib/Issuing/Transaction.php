<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Issuing;

/**
 * Any use of an <a href="https://docs.epayments.network/issuing">issued card</a> that results in funds entering or leaving
 * your ExpressPayments account, such as a completed purchase or refund, is represented by an Issuing
 * <code>Transaction</code> object.
 *
 * Related guide: <a href="https://docs.epayments.network/issuing/purchases/transactions">Issued card transactions</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount The transaction amount, which will be reflected in your balance. This amount is in your currency and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>.
 * @property null|\ExpressPayments\ExpressPaymentsObject $amount_details Detailed breakdown of amount components. These amounts are denominated in <code>currency</code> and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>.
 * @property null|string|\ExpressPayments\Issuing\Authorization $authorization The <code>Authorization</code> object that led to this transaction.
 * @property null|string|\ExpressPayments\BalanceTransaction $balance_transaction ID of the <a href="https://docs.epayments.network/api/balance_transactions">balance transaction</a> associated with this transaction.
 * @property string|\ExpressPayments\Issuing\Card $card The card used to make this transaction.
 * @property null|string|\ExpressPayments\Issuing\Cardholder $cardholder The cardholder to whom this transaction belongs.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://docs.epayments.network/currencies">supported currency</a>.
 * @property null|string|\ExpressPayments\Issuing\Dispute $dispute If you've disputed the transaction, the ID of the dispute.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property int $merchant_amount The amount that the merchant will receive, denominated in <code>merchant_currency</code> and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>. It will be different from <code>amount</code> if the merchant is taking payment in a different currency.
 * @property string $merchant_currency The currency with which the merchant is taking payment.
 * @property \ExpressPayments\ExpressPaymentsObject $merchant_data
 * @property \ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property null|\ExpressPayments\ExpressPaymentsObject $network_data Details about the transaction, such as processing dates, set by the card network.
 * @property null|\ExpressPayments\ExpressPaymentsObject $purchase_details Additional purchase information that is optionally provided by the merchant.
 * @property null|string|\ExpressPayments\Issuing\Token $token <a href="https://docs.epayments.network/api/issuing/tokens/object">Token</a> object used for this transaction. If a network token was not used for this transaction, this field will be null.
 * @property null|\ExpressPayments\ExpressPaymentsObject $treasury <a href="https://docs.epayments.network/api/treasury">Treasury</a> details related to this transaction if it was created on a [FinancialAccount](/docs/api/treasury/financial_accounts
 * @property string $type The nature of the transaction.
 * @property null|string $wallet The digital wallet used for this transaction. One of <code>apple_pay</code>, <code>google_pay</code>, or <code>samsung_pay</code>.
 */
class Transaction extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'issuing.transaction';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Retrieve;
    use \ExpressPayments\ApiOperations\Update;

    const TYPE_CAPTURE = 'capture';
    const TYPE_REFUND = 'refund';

    const WALLET_APPLE_PAY = 'apple_pay';
    const WALLET_GOOGLE_PAY = 'google_pay';
    const WALLET_SAMSUNG_PAY = 'samsung_pay';
}
