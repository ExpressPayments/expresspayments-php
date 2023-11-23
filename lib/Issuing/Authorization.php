<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Issuing;

/**
 * When an <a href="https://docs.epayments.network/issuing">issued card</a> is used to make a purchase, an Issuing <code>Authorization</code>
 * object is created. <a href="https://docs.epayments.network/issuing/purchases/authorizations">Authorizations</a> must be approved for the
 * purchase to be completed successfully.
 *
 * Related guide: <a href="https://docs.epayments.network/issuing/purchases/authorizations">Issued card authorizations</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount The total amount that was authorized or rejected. This amount is in the card's currency and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>.
 * @property null|\ExpressPayments\ExpressPaymentsObject $amount_details Detailed breakdown of amount components. These amounts are denominated in <code>currency</code> and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>.
 * @property bool $approved Whether the authorization has been approved.
 * @property string $authorization_method How the card details were provided.
 * @property \ExpressPayments\BalanceTransaction[] $balance_transactions List of balance transactions associated with this authorization.
 * @property \ExpressPayments\Issuing\Card $card You can <a href="https://docs.epayments.network/issuing/cards">create physical or virtual cards</a> that are issued to cardholders.
 * @property null|string|\ExpressPayments\Issuing\Cardholder $cardholder The cardholder to whom this authorization belongs.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://docs.epayments.network/currencies">supported currency</a>.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property int $merchant_amount The total amount that was authorized or rejected. This amount is in the <code>merchant_currency</code> and in the <a href="https://docs.epayments.network/currencies#zero-decimal">smallest currency unit</a>.
 * @property string $merchant_currency The currency that was presented to the cardholder for the authorization. Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://docs.epayments.network/currencies">supported currency</a>.
 * @property \ExpressPayments\ExpressPaymentsObject $merchant_data
 * @property \ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property null|\ExpressPayments\ExpressPaymentsObject $network_data Details about the authorization, such as identifiers, set by the card network.
 * @property null|\ExpressPayments\ExpressPaymentsObject $pending_request The pending authorization request. This field will only be non-null during an <code>issuing_authorization.request</code> webhook.
 * @property \ExpressPayments\ExpressPaymentsObject[] $request_history History of every time a <code>pending_request</code> authorization was approved/declined, either by you directly or by ExpressPayments (e.g. based on your spending_controls). If the merchant changes the authorization by performing an incremental authorization, you can look at this field to see the previous requests for the authorization. This field can be helpful in determining why a given authorization was approved/declined.
 * @property string $status The current status of the authorization in its lifecycle.
 * @property null|string|\ExpressPayments\Issuing\Token $token <a href="https://docs.epayments.network/api/issuing/tokens/object">Token</a> object used for this authorization. If a network token was not used for this authorization, this field will be null.
 * @property \ExpressPayments\Issuing\Transaction[] $transactions List of <a href="https://docs.epayments.network/api/issuing/transactions">transactions</a> associated with this authorization.
 * @property null|\ExpressPayments\ExpressPaymentsObject $treasury <a href="https://docs.epayments.network/api/treasury">Treasury</a> details related to this authorization if it was created on a <a href="https://docs.epayments.network/api/treasury/financial_accounts">FinancialAccount</a>.
 * @property \ExpressPayments\ExpressPaymentsObject $verification_data
 * @property null|string $wallet The digital wallet used for this transaction. One of <code>apple_pay</code>, <code>google_pay</code>, or <code>samsung_pay</code>. Will populate as <code>null</code> when no digital wallet was utilized.
 */
class Authorization extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'issuing.authorization';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Retrieve;
    use \ExpressPayments\ApiOperations\Update;

    const AUTHORIZATION_METHOD_CHIP = 'chip';
    const AUTHORIZATION_METHOD_CONTACTLESS = 'contactless';
    const AUTHORIZATION_METHOD_KEYED_IN = 'keyed_in';
    const AUTHORIZATION_METHOD_ONLINE = 'online';
    const AUTHORIZATION_METHOD_SWIPE = 'swipe';

    const STATUS_CLOSED = 'closed';
    const STATUS_PENDING = 'pending';
    const STATUS_REVERSED = 'reversed';

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Issuing\Authorization the approved authorization
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function approve($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/approve';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Issuing\Authorization the declined authorization
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function decline($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/decline';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }
}
