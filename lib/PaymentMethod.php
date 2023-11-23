<?php

// File generated from our OpenAPI spec

namespace ExpressPayments;

/**
 * PaymentMethod objects represent your customer's payment instruments.
 * You can use them with <a href="https://docs.epayments.network/payments/payment-intents">PaymentIntents</a> to collect payments or save them to
 * Customer objects to store instrument details for future payments.
 *
 * Related guides: <a href="https://docs.epayments.network/payments/payment-methods">Payment Methods</a> and <a href="https://docs.epayments.network/payments/more-payment-scenarios">More Payment Scenarios</a>.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $acss_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $affirm
 * @property null|\ExpressPayments\ExpressPaymentsObject $afterpay_clearpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $alipay
 * @property null|\ExpressPayments\ExpressPaymentsObject $au_becs_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $bacs_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $bancontact
 * @property \ExpressPayments\ExpressPaymentsObject $billing_details
 * @property null|\ExpressPayments\ExpressPaymentsObject $blik
 * @property null|\ExpressPayments\ExpressPaymentsObject $boleto
 * @property null|\ExpressPayments\ExpressPaymentsObject $card
 * @property null|\ExpressPayments\ExpressPaymentsObject $card_present
 * @property null|\ExpressPayments\ExpressPaymentsObject $cashapp
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property null|string|\ExpressPayments\Customer $customer The ID of the Customer to which this PaymentMethod is saved. This will not be set when the PaymentMethod has not been saved to a Customer.
 * @property null|\ExpressPayments\ExpressPaymentsObject $customer_balance
 * @property null|\ExpressPayments\ExpressPaymentsObject $eps
 * @property null|\ExpressPayments\ExpressPaymentsObject $fpx
 * @property null|\ExpressPayments\ExpressPaymentsObject $giropay
 * @property null|\ExpressPayments\ExpressPaymentsObject $grabpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $ideal
 * @property null|\ExpressPayments\ExpressPaymentsObject $interac_present
 * @property null|\ExpressPayments\ExpressPaymentsObject $klarna
 * @property null|\ExpressPayments\ExpressPaymentsObject $konbini
 * @property null|\ExpressPayments\ExpressPaymentsObject $link
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property null|\ExpressPayments\ExpressPaymentsObject $oxxo
 * @property null|\ExpressPayments\ExpressPaymentsObject $p24
 * @property null|\ExpressPayments\ExpressPaymentsObject $paynow
 * @property null|\ExpressPayments\ExpressPaymentsObject $paypal
 * @property null|\ExpressPayments\ExpressPaymentsObject $pix
 * @property null|\ExpressPayments\ExpressPaymentsObject $promptpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $radar_options Options to configure Radar. See <a href="https://docs.epayments.network/radar/radar-session">Radar Session</a> for more information.
 * @property null|\ExpressPayments\ExpressPaymentsObject $revolut_pay
 * @property null|\ExpressPayments\ExpressPaymentsObject $sepa_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $sofort
 * @property string $type The type of the PaymentMethod. An additional hash is included on the PaymentMethod with a name matching this value. It contains additional information specific to the PaymentMethod type.
 * @property null|\ExpressPayments\ExpressPaymentsObject $us_bank_account
 * @property null|\ExpressPayments\ExpressPaymentsObject $wechat_pay
 * @property null|\ExpressPayments\ExpressPaymentsObject $zip
 */
class PaymentMethod extends ApiResource
{
    const OBJECT_NAME = 'payment_method';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    const TYPE_ACSS_DEBIT = 'acss_debit';
    const TYPE_AFFIRM = 'affirm';
    const TYPE_AFTERPAY_CLEARPAY = 'afterpay_clearpay';
    const TYPE_ALIPAY = 'alipay';
    const TYPE_AU_BECS_DEBIT = 'au_becs_debit';
    const TYPE_BACS_DEBIT = 'bacs_debit';
    const TYPE_BANCONTACT = 'bancontact';
    const TYPE_BLIK = 'blik';
    const TYPE_BOLETO = 'boleto';
    const TYPE_CARD = 'card';
    const TYPE_CARD_PRESENT = 'card_present';
    const TYPE_CASHAPP = 'cashapp';
    const TYPE_CUSTOMER_BALANCE = 'customer_balance';
    const TYPE_EPS = 'eps';
    const TYPE_FPX = 'fpx';
    const TYPE_GIROPAY = 'giropay';
    const TYPE_GRABPAY = 'grabpay';
    const TYPE_IDEAL = 'ideal';
    const TYPE_INTERAC_PRESENT = 'interac_present';
    const TYPE_KLARNA = 'klarna';
    const TYPE_KONBINI = 'konbini';
    const TYPE_LINK = 'link';
    const TYPE_OXXO = 'oxxo';
    const TYPE_P24 = 'p24';
    const TYPE_PAYNOW = 'paynow';
    const TYPE_PAYPAL = 'paypal';
    const TYPE_PIX = 'pix';
    const TYPE_PROMPTPAY = 'promptpay';
    const TYPE_REVOLUT_PAY = 'revolut_pay';
    const TYPE_SEPA_DEBIT = 'sepa_debit';
    const TYPE_SOFORT = 'sofort';
    const TYPE_US_BANK_ACCOUNT = 'us_bank_account';
    const TYPE_WECHAT_PAY = 'wechat_pay';
    const TYPE_ZIP = 'zip';

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\PaymentMethod the attached payment method
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function attach($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/attach';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\PaymentMethod the detached payment method
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function detach($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/detach';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }
}
