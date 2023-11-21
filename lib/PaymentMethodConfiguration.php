<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby;

/**
 * PaymentMethodConfigurations control which payment methods are displayed to your customers when you don't explicitly specify payment method types. You can have multiple configurations with different sets of payment methods for different scenarios.
 *
 * There are two types of PaymentMethodConfigurations. Which is used depends on the <a href="https://expressplatby.cz/docs/connect/charges">charge type</a>:
 *
 * <strong>Direct</strong> configurations apply to payments created on your account, including Connect destination charges, Connect separate charges and transfers, and payments not involving Connect.
 *
 * <strong>Child</strong> configurations apply to payments created on your connected accounts using direct charges, and charges with the on_behalf_of parameter.
 *
 * Child configurations have a <code>parent</code> that sets default values and controls which settings connected accounts may override. You can specify a parent ID at payment time, and ExpressPlatby will automatically resolve the connected account’s associated child configuration. Parent configurations are <a href="https://dashboard.expressplatby.cz/settings/payment_methods/connected_accounts">managed in the dashboard</a> and are not available in this API.
 *
 * Related guides:
 * - <a href="https://expressplatby.cz/docs/connect/payment-method-configurations">Payment Method Configurations API</a>
 * - <a href="https://expressplatby.cz/docs/payments/multiple-payment-method-configs">Multiple configurations on dynamic payment methods</a>
 * - <a href="https://expressplatby.cz/docs/connect/multiple-payment-method-configurations">Multiple configurations for your Connect accounts</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $acss_debit
 * @property bool $active Whether the configuration can be used for new payments.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $affirm
 * @property null|\ExpressPlatby\ExpressPlatbyObject $afterpay_clearpay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $alipay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $apple_pay
 * @property null|string $application For child configs, the Connect application associated with the configuration.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $au_becs_debit
 * @property null|\ExpressPlatby\ExpressPlatbyObject $bacs_debit
 * @property null|\ExpressPlatby\ExpressPlatbyObject $bancontact
 * @property null|\ExpressPlatby\ExpressPlatbyObject $blik
 * @property null|\ExpressPlatby\ExpressPlatbyObject $boleto
 * @property null|\ExpressPlatby\ExpressPlatbyObject $card
 * @property null|\ExpressPlatby\ExpressPlatbyObject $cartes_bancaires
 * @property null|\ExpressPlatby\ExpressPlatbyObject $cashapp
 * @property null|\ExpressPlatby\ExpressPlatbyObject $eps
 * @property null|\ExpressPlatby\ExpressPlatbyObject $fpx
 * @property null|\ExpressPlatby\ExpressPlatbyObject $giropay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $google_pay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $grabpay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $id_bank_transfer
 * @property null|\ExpressPlatby\ExpressPlatbyObject $ideal
 * @property bool $is_default The default configuration is used whenever a payment method configuration is not specified.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $jcb
 * @property null|\ExpressPlatby\ExpressPlatbyObject $klarna
 * @property null|\ExpressPlatby\ExpressPlatbyObject $konbini
 * @property null|\ExpressPlatby\ExpressPlatbyObject $link
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $multibanco
 * @property string $name The configuration's name.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $netbanking
 * @property null|\ExpressPlatby\ExpressPlatbyObject $oxxo
 * @property null|\ExpressPlatby\ExpressPlatbyObject $p24
 * @property null|string $parent For child configs, the configuration's parent configuration.
 * @property null|\ExpressPlatby\ExpressPlatbyObject $pay_by_bank
 * @property null|\ExpressPlatby\ExpressPlatbyObject $paynow
 * @property null|\ExpressPlatby\ExpressPlatbyObject $paypal
 * @property null|\ExpressPlatby\ExpressPlatbyObject $promptpay
 * @property null|\ExpressPlatby\ExpressPlatbyObject $sepa_debit
 * @property null|\ExpressPlatby\ExpressPlatbyObject $sofort
 * @property null|\ExpressPlatby\ExpressPlatbyObject $upi
 * @property null|\ExpressPlatby\ExpressPlatbyObject $us_bank_account
 * @property null|\ExpressPlatby\ExpressPlatbyObject $wechat_pay
 */
class PaymentMethodConfiguration extends ApiResource
{
    const OBJECT_NAME = 'payment_method_configuration';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;
}
