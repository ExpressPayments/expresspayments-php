<?php

// File generated from our OpenAPI spec

namespace ExpressPayments;

/**
 * A Mandate is a record of the permission that your customer gives you to debit their payment method.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \ExpressPayments\ExpressPaymentsObject $customer_acceptance
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\ExpressPayments\ExpressPaymentsObject $multi_use
 * @property null|string $on_behalf_of The account (if any) that the mandate is intended for.
 * @property string|\ExpressPayments\PaymentMethod $payment_method ID of the payment method associated with this mandate.
 * @property \ExpressPayments\ExpressPaymentsObject $payment_method_details
 * @property null|\ExpressPayments\ExpressPaymentsObject $single_use
 * @property string $status The mandate status indicates whether or not you can use it to initiate a payment.
 * @property string $type The type of the mandate.
 */
class Mandate extends ApiResource
{
    const OBJECT_NAME = 'mandate';

    use ApiOperations\Retrieve;

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_PENDING = 'pending';

    const TYPE_MULTI_USE = 'multi_use';
    const TYPE_SINGLE_USE = 'single_use';
}
