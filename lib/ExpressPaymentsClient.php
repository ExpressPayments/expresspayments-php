<?php

namespace ExpressPayments;

/**
 * Client used to send requests to ExpressPayments' API.
 *
 * @property \ExpressPayments\Service\OAuthService $oauth
 * // The beginning of the section generated from our OpenAPI spec
 * @property \ExpressPayments\Service\AccountLinkService $accountLinks
 * @property \ExpressPayments\Service\AccountService $accounts
 * @property \ExpressPayments\Service\AccountSessionService $accountSessions
 * @property \ExpressPayments\Service\ApplePayDomainService $applePayDomains
 * @property \ExpressPayments\Service\ApplicationFeeService $applicationFees
 * @property \ExpressPayments\Service\Apps\AppsServiceFactory $apps
 * @property \ExpressPayments\Service\BalanceService $balance
 * @property \ExpressPayments\Service\BalanceTransactionService $balanceTransactions
 * @property \ExpressPayments\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
 * @property \ExpressPayments\Service\ChargeService $charges
 * @property \ExpressPayments\Service\Checkout\CheckoutServiceFactory $checkout
 * @property \ExpressPayments\Service\CountrySpecService $countrySpecs
 * @property \ExpressPayments\Service\CouponService $coupons
 * @property \ExpressPayments\Service\CreditNoteService $creditNotes
 * @property \ExpressPayments\Service\CustomerService $customers
 * @property \ExpressPayments\Service\DisputeService $disputes
 * @property \ExpressPayments\Service\EphemeralKeyService $ephemeralKeys
 * @property \ExpressPayments\Service\EventService $events
 * @property \ExpressPayments\Service\ExchangeRateService $exchangeRates
 * @property \ExpressPayments\Service\FileLinkService $fileLinks
 * @property \ExpressPayments\Service\FileService $files
 * @property \ExpressPayments\Service\FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
 * @property \ExpressPayments\Service\Identity\IdentityServiceFactory $identity
 * @property \ExpressPayments\Service\InvoiceItemService $invoiceItems
 * @property \ExpressPayments\Service\InvoiceService $invoices
 * @property \ExpressPayments\Service\Issuing\IssuingServiceFactory $issuing
 * @property \ExpressPayments\Service\MandateService $mandates
 * @property \ExpressPayments\Service\PaymentIntentService $paymentIntents
 * @property \ExpressPayments\Service\PaymentLinkService $paymentLinks
 * @property \ExpressPayments\Service\PaymentMethodConfigurationService $paymentMethodConfigurations
 * @property \ExpressPayments\Service\PaymentMethodDomainService $paymentMethodDomains
 * @property \ExpressPayments\Service\PaymentMethodService $paymentMethods
 * @property \ExpressPayments\Service\PayoutService $payouts
 * @property \ExpressPayments\Service\PlanService $plans
 * @property \ExpressPayments\Service\PriceService $prices
 * @property \ExpressPayments\Service\ProductService $products
 * @property \ExpressPayments\Service\PromotionCodeService $promotionCodes
 * @property \ExpressPayments\Service\QuoteService $quotes
 * @property \ExpressPayments\Service\Radar\RadarServiceFactory $radar
 * @property \ExpressPayments\Service\RefundService $refunds
 * @property \ExpressPayments\Service\Reporting\ReportingServiceFactory $reporting
 * @property \ExpressPayments\Service\ReviewService $reviews
 * @property \ExpressPayments\Service\SetupAttemptService $setupAttempts
 * @property \ExpressPayments\Service\SetupIntentService $setupIntents
 * @property \ExpressPayments\Service\ShippingRateService $shippingRates
 * @property \ExpressPayments\Service\Sigma\SigmaServiceFactory $sigma
 * @property \ExpressPayments\Service\SourceService $sources
 * @property \ExpressPayments\Service\SubscriptionItemService $subscriptionItems
 * @property \ExpressPayments\Service\SubscriptionService $subscriptions
 * @property \ExpressPayments\Service\SubscriptionScheduleService $subscriptionSchedules
 * @property \ExpressPayments\Service\Tax\TaxServiceFactory $tax
 * @property \ExpressPayments\Service\TaxCodeService $taxCodes
 * @property \ExpressPayments\Service\TaxRateService $taxRates
 * @property \ExpressPayments\Service\Terminal\TerminalServiceFactory $terminal
 * @property \ExpressPayments\Service\TestHelpers\TestHelpersServiceFactory $testHelpers
 * @property \ExpressPayments\Service\TokenService $tokens
 * @property \ExpressPayments\Service\TopupService $topups
 * @property \ExpressPayments\Service\TransferService $transfers
 * @property \ExpressPayments\Service\Treasury\TreasuryServiceFactory $treasury
 * @property \ExpressPayments\Service\WebhookEndpointService $webhookEndpoints
 * // The end of the section generated from our OpenAPI spec
 */
class ExpressPaymentsClient extends BaseExpressPaymentsClient
{
    /**
     * @var \ExpressPayments\Service\CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        return $this->getService($name);
    }

    public function getService($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \ExpressPayments\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->getService($name);
    }
}
