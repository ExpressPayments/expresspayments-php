<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby;

/**
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property string|\ExpressPlatby\Account $account ID of the ExpressPlatby account this fee was taken from.
 * @property int $amount Amount earned, in cents (or local equivalent).
 * @property int $amount_refunded Amount in cents (or local equivalent) refunded (can be less than the amount attribute on the fee if a partial refund was issued)
 * @property string|\ExpressPlatby\ExpressPlatbyObject $application ID of the Connect application that earned the fee.
 * @property null|string|\ExpressPlatby\BalanceTransaction $balance_transaction Balance transaction that describes the impact of this collected application fee on your account balance (not including refunds).
 * @property string|\ExpressPlatby\Charge $charge ID of the charge that the application fee was taken from.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://expressplatby.cz/docs/currencies">supported currency</a>.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|string|\ExpressPlatby\Charge $originating_transaction ID of the corresponding charge on the platform account, if this fee was the result of a charge using the <code>destination</code> parameter.
 * @property bool $refunded Whether the fee has been fully refunded. If the fee is only partially refunded, this attribute will still be false.
 * @property \ExpressPlatby\Collection<\ExpressPlatby\ApplicationFeeRefund> $refunds A list of refunds that have been applied to the fee.
 */
class ApplicationFee extends ApiResource
{
    const OBJECT_NAME = 'application_fee';

    use ApiOperations\All;
    use ApiOperations\NestedResource;
    use ApiOperations\Retrieve;

    const PATH_REFUNDS = '/refunds';

    /**
     * @param string $id the ID of the application fee on which to retrieve the application fee refunds
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPlatby\Collection<\ExpressPlatby\ApplicationFeeRefund> the list of application fee refunds
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public static function allRefunds($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_REFUNDS, $params, $opts);
    }

    /**
     * @param string $id the ID of the application fee on which to create the application fee refund
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPlatby\ApplicationFeeRefund
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public static function createRefund($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_REFUNDS, $params, $opts);
    }

    /**
     * @param string $id the ID of the application fee to which the application fee refund belongs
     * @param string $refundId the ID of the application fee refund to retrieve
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPlatby\ApplicationFeeRefund
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public static function retrieveRefund($id, $refundId, $params = null, $opts = null)
    {
        return self::_retrieveNestedResource($id, static::PATH_REFUNDS, $refundId, $params, $opts);
    }

    /**
     * @param string $id the ID of the application fee to which the application fee refund belongs
     * @param string $refundId the ID of the application fee refund to update
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPlatby\ApplicationFeeRefund
     *@throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     */
    public static function updateRefund($id, $refundId, $params = null, $opts = null)
    {
        return self::_updateNestedResource($id, static::PATH_REFUNDS, $refundId, $params, $opts);
    }
}
