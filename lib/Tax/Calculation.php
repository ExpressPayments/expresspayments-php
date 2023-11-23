<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Tax;

/**
 * A Tax Calculation allows you to calculate the tax to collect from your customer.
 *
 * Related guide: <a href="https://docs.epayments.network/tax/custom">Calculate tax in your custom payment flow</a>
 *
 * @property null|string $id Unique identifier for the calculation.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount_total Total after taxes.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://docs.epayments.network/currencies">supported currency</a>.
 * @property null|string $customer The ID of an existing <a href="https://docs.epayments.network/api/customers/object">Customer</a> used for the resource.
 * @property \ExpressPayments\ExpressPaymentsObject $customer_details
 * @property null|int $expires_at Timestamp of date at which the tax calculation will expire.
 * @property null|\ExpressPayments\Collection<\ExpressPayments\Tax\CalculationLineItem> $line_items The list of items the customer is purchasing.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPayments\ExpressPaymentsObject $shipping_cost The shipping cost details for the calculation.
 * @property int $tax_amount_exclusive The amount of tax to be collected on top of the line item prices.
 * @property int $tax_amount_inclusive The amount of tax already included in the line item prices.
 * @property \ExpressPayments\ExpressPaymentsObject[] $tax_breakdown Breakdown of individual tax amounts that add up to the total.
 * @property int $tax_date Timestamp of date at which the tax rules and rates in effect applies for the calculation.
 */
class Calculation extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'tax.calculation';

    use \ExpressPayments\ApiOperations\Create;

    /**
     * @param string $id
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Tax\CalculationLineItem> list of calculation line items
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function allLineItems($id, $params = null, $opts = null)
    {
        $url = static::resourceUrl($id) . '/line_items';
        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }
}
