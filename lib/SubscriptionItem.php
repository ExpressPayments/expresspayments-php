<?php

// File generated from our OpenAPI spec

namespace ExpressPayments;

/**
 * Subscription items allow you to create customer subscriptions with more than
 * one plan, making it easy to represent complex billing relationships.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\ExpressPayments\ExpressPaymentsObject $billing_thresholds Define thresholds at which an invoice will be sent, and the related subscription advanced to a new billing period
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property \ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property \ExpressPayments\Plan $plan <p>You can now model subscriptions more flexibly using the <a href="https://docs.epayments.network/api#prices">Prices API</a>. It replaces the Plans API and is backwards compatible to simplify your migration.</p><p>Plans define the base price, currency, and billing cycle for recurring purchases of products. <a href="https://docs.epayments.network/api#products">Products</a> help you track inventory or provisioning, and plans help you track pricing. Different physical goods or levels of service should be represented by products, and pricing options should be represented by plans. This approach lets you change prices without having to change your provisioning scheme.</p><p>For example, you might have a single &quot;gold&quot; product that has plans for $10/month, $100/year, €9/month, and €90/year.</p><p>Related guides: <a href="https://docs.epayments.network/billing/subscriptions/set-up-subscription">Set up a subscription</a> and more about <a href="https://docs.epayments.network/products-prices/overview">products and prices</a>.</p>
 * @property \ExpressPayments\Price $price <p>Prices define the unit cost, currency, and (optional) billing cycle for both recurring and one-time purchases of products. <a href="https://docs.epayments.network/api#products">Products</a> help you track inventory or provisioning, and prices help you track payment terms. Different physical goods or levels of service should be represented by products, and pricing options should be represented by prices. This approach lets you change prices without having to change your provisioning scheme.</p><p>For example, you might have a single &quot;gold&quot; product that has prices for $10/month, $100/year, and €9 once.</p><p>Related guides: <a href="https://docs.epayments.network/billing/subscriptions/set-up-subscription">Set up a subscription</a>, <a href="https://docs.epayments.network/billing/invoices/create">create an invoice</a>, and more about <a href="https://docs.epayments.network/products-prices/overview">products and prices</a>.</p>
 * @property null|int $quantity The <a href="https://docs.epayments.network/subscriptions/quantities">quantity</a> of the plan to which the customer should be subscribed.
 * @property string $subscription The <code>subscription</code> this <code>subscription_item</code> belongs to.
 * @property null|\ExpressPayments\TaxRate[] $tax_rates The tax rates which apply to this <code>subscription_item</code>. When set, the <code>default_tax_rates</code> on the subscription do not apply to this <code>subscription_item</code>.
 */
class SubscriptionItem extends ApiResource
{
    const OBJECT_NAME = 'subscription_item';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Delete;
    use ApiOperations\NestedResource;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    const PATH_USAGE_RECORDS = '/usage_records';

    /**
     * @param string $id the ID of the subscription item on which to create the usage record
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\UsageRecord
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function createUsageRecord($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_USAGE_RECORDS, $params, $opts);
    }
    const PATH_USAGE_RECORD_SUMMARIES = '/usage_record_summaries';

    /**
     * @param string $id the ID of the subscription item on which to retrieve the usage record summaries
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\UsageRecordSummary> the list of usage record summaries
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function allUsageRecordSummaries($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_USAGE_RECORD_SUMMARIES, $params, $opts);
    }
}
