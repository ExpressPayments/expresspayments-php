<?php

// File generated from our OpenAPI spec

namespace ExpressPayments;

/**
 * PaymentMethodConfigurations control which payment methods are displayed to your customers when you don't explicitly specify payment method types. You can have multiple configurations with different sets of payment methods for different scenarios.
 *
 * There are two types of PaymentMethodConfigurations. Which is used depends on the <a href="https://docs.epayments.network/connect/charges">charge type</a>:
 *
 * <strong>Direct</strong> configurations apply to payments created on your account, including Connect destination charges, Connect separate charges and transfers, and payments not involving Connect.
 *
 * <strong>Child</strong> configurations apply to payments created on your connected accounts using direct charges, and charges with the on_behalf_of parameter.
 *
 * Child configurations have a <code>parent</code> that sets default values and controls which settings connected accounts may override. You can specify a parent ID at payment time, and ExpressPayments will automatically resolve the connected account’s associated child configuration. Parent configurations are <a href="https://dashboard.epayments.network/settings/payment_methods/connected_accounts">managed in the dashboard</a> and are not available in this API.
 *
 * Related guides:
 * - <a href="https://docs.epayments.network/connect/payment-method-configurations">Payment Method Configurations API</a>
 * - <a href="https://docs.epayments.network/payments/multiple-payment-method-configs">Multiple configurations on dynamic payment methods</a>
 * - <a href="https://docs.epayments.network/connect/multiple-payment-method-configurations">Multiple configurations for your Connect accounts</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $acss_debit
 * @property bool $active Whether the configuration can be used for new payments.
 * @property null|\ExpressPayments\ExpressPaymentsObject $affirm
 * @property null|\ExpressPayments\ExpressPaymentsObject $afterpay_clearpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $alipay
 * @property null|\ExpressPayments\ExpressPaymentsObject $apple_pay
 * @property null|string $application For child configs, the Connect application associated with the configuration.
 * @property null|\ExpressPayments\ExpressPaymentsObject $au_becs_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $bacs_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $bancontact
 * @property null|\ExpressPayments\ExpressPaymentsObject $blik
 * @property null|\ExpressPayments\ExpressPaymentsObject $boleto
 * @property null|\ExpressPayments\ExpressPaymentsObject $card
 * @property null|\ExpressPayments\ExpressPaymentsObject $cartes_bancaires
 * @property null|\ExpressPayments\ExpressPaymentsObject $cashapp
 * @property null|\ExpressPayments\ExpressPaymentsObject $eps
 * @property null|\ExpressPayments\ExpressPaymentsObject $fpx
 * @property null|\ExpressPayments\ExpressPaymentsObject $giropay
 * @property null|\ExpressPayments\ExpressPaymentsObject $google_pay
 * @property null|\ExpressPayments\ExpressPaymentsObject $grabpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $id_bank_transfer
 * @property null|\ExpressPayments\ExpressPaymentsObject $ideal
 * @property bool $is_default The default configuration is used whenever a payment method configuration is not specified.
 * @property null|\ExpressPayments\ExpressPaymentsObject $jcb
 * @property null|\ExpressPayments\ExpressPaymentsObject $klarna
 * @property null|\ExpressPayments\ExpressPaymentsObject $konbini
 * @property null|\ExpressPayments\ExpressPaymentsObject $link
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPayments\ExpressPaymentsObject $multibanco
 * @property string $name The configuration's name.
 * @property null|\ExpressPayments\ExpressPaymentsObject $netbanking
 * @property null|\ExpressPayments\ExpressPaymentsObject $oxxo
 * @property null|\ExpressPayments\ExpressPaymentsObject $p24
 * @property null|string $parent For child configs, the configuration's parent configuration.
 * @property null|\ExpressPayments\ExpressPaymentsObject $pay_by_bank
 * @property null|\ExpressPayments\ExpressPaymentsObject $paynow
 * @property null|\ExpressPayments\ExpressPaymentsObject $paypal
 * @property null|\ExpressPayments\ExpressPaymentsObject $promptpay
 * @property null|\ExpressPayments\ExpressPaymentsObject $sepa_debit
 * @property null|\ExpressPayments\ExpressPaymentsObject $sofort
 * @property null|\ExpressPayments\ExpressPaymentsObject $upi
 * @property null|\ExpressPayments\ExpressPaymentsObject $us_bank_account
 * @property null|\ExpressPayments\ExpressPaymentsObject $wechat_pay
 */
class PaymentMethodConfiguration extends ApiResource
{
    const OBJECT_NAME = 'payment_method_configuration';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;
}
