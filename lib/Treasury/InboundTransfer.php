<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Treasury;

/**
 * Use <a href="https://docs.epayments.network/treasury/moving-money/financial-accounts/into/inbound-transfers">InboundTransfers</a> to add funds to your <a href="https://docs.epayments.network/api#financial_accounts">FinancialAccount</a> via a PaymentMethod that is owned by you. The funds will be transferred via an ACH debit.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount Amount (in cents) transferred.
 * @property bool $cancelable Returns <code>true</code> if the InboundTransfer is able to be canceled.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://docs.epayments.network/currencies">supported currency</a>.
 * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
 * @property null|\ExpressPayments\ExpressPaymentsObject $failure_details Details about this InboundTransfer's failure. Only set when status is <code>failed</code>.
 * @property string $financial_account The FinancialAccount that received the funds.
 * @property null|string $hosted_regulatory_receipt_url A <a href="https://docs.epayments.network/treasury/moving-money/regulatory-receipts">hosted transaction receipt</a> URL that is provided when money movement is considered regulated under ExpressPayments' money transmission licenses.
 * @property \ExpressPayments\ExpressPaymentsObject $linked_flows
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \ExpressPayments\ExpressPaymentsObject $metadata Set of <a href="https://docs.epayments.network/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property string $origin_payment_method The origin payment method to be debited for an InboundTransfer.
 * @property null|\ExpressPayments\ExpressPaymentsObject $origin_payment_method_details Details about the PaymentMethod for an InboundTransfer.
 * @property null|bool $returned Returns <code>true</code> if the funds for an InboundTransfer were returned after the InboundTransfer went to the <code>succeeded</code> state.
 * @property string $statement_descriptor Statement descriptor shown when funds are debited from the source. Not all payment networks support <code>statement_descriptor</code>.
 * @property string $status Status of the InboundTransfer: <code>processing</code>, <code>succeeded</code>, <code>failed</code>, and <code>canceled</code>. An InboundTransfer is <code>processing</code> if it is created and pending. The status changes to <code>succeeded</code> once the funds have been &quot;confirmed&quot; and a <code>transaction</code> is created and posted. The status changes to <code>failed</code> if the transfer fails.
 * @property \ExpressPayments\ExpressPaymentsObject $status_transitions
 * @property null|string|\ExpressPayments\Treasury\Transaction $transaction The Transaction associated with this object.
 */
class InboundTransfer extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'treasury.inbound_transfer';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Create;
    use \ExpressPayments\ApiOperations\Retrieve;

    const STATUS_CANCELED = 'canceled';
    const STATUS_FAILED = 'failed';
    const STATUS_PROCESSING = 'processing';
    const STATUS_SUCCEEDED = 'succeeded';

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Treasury\InboundTransfer the canceled inbound transfer
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function cancel($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/cancel';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }
}
