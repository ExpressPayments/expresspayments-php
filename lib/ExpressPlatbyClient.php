<?php

namespace ExpressPlatby;

/**
 * Client used to send requests to ExpressPlatby's API.
 *
 * @property \ExpressPlatby\Service\OAuthService $oauth
 * // The beginning of the section generated from our OpenAPI spec
 * @property \ExpressPlatby\Service\AccountLinkService $accountLinks
 * @property \ExpressPlatby\Service\AccountService $accounts
 * @property \ExpressPlatby\Service\AccountSessionService $accountSessions
 * @property \ExpressPlatby\Service\ApplePayDomainService $applePayDomains
 * @property \ExpressPlatby\Service\ApplicationFeeService $applicationFees
 * @property \ExpressPlatby\Service\Apps\AppsServiceFactory $apps
 * @property \ExpressPlatby\Service\BalanceService $balance
 * @property \ExpressPlatby\Service\BalanceTransactionService $balanceTransactions
 * @property \ExpressPlatby\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
 * @property \ExpressPlatby\Service\ChargeService $charges
 * @property \ExpressPlatby\Service\Checkout\CheckoutServiceFactory $checkout
 * @property \ExpressPlatby\Service\CountrySpecService $countrySpecs
 * @property \ExpressPlatby\Service\CouponService $coupons
 * @property \ExpressPlatby\Service\CreditNoteService $creditNotes
 * @property \ExpressPlatby\Service\CustomerService $customers
 * @property \ExpressPlatby\Service\DisputeService $disputes
 * @property \ExpressPlatby\Service\EphemeralKeyService $ephemeralKeys
 * @property \ExpressPlatby\Service\EventService $events
 * @property \ExpressPlatby\Service\ExchangeRateService $exchangeRates
 * @property \ExpressPlatby\Service\FileLinkService $fileLinks
 * @property \ExpressPlatby\Service\FileService $files
 * @property \ExpressPlatby\Service\FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
 * @property \ExpressPlatby\Service\Identity\IdentityServiceFactory $identity
 * @property \ExpressPlatby\Service\InvoiceItemService $invoiceItems
 * @property \ExpressPlatby\Service\InvoiceService $invoices
 * @property \ExpressPlatby\Service\Issuing\IssuingServiceFactory $issuing
 * @property \ExpressPlatby\Service\MandateService $mandates
 * @property \ExpressPlatby\Service\PaymentIntentService $paymentIntents
 * @property \ExpressPlatby\Service\PaymentLinkService $paymentLinks
 * @property \ExpressPlatby\Service\PaymentMethodConfigurationService $paymentMethodConfigurations
 * @property \ExpressPlatby\Service\PaymentMethodDomainService $paymentMethodDomains
 * @property \ExpressPlatby\Service\PaymentMethodService $paymentMethods
 * @property \ExpressPlatby\Service\PayoutService $payouts
 * @property \ExpressPlatby\Service\PlanService $plans
 * @property \ExpressPlatby\Service\PriceService $prices
 * @property \ExpressPlatby\Service\ProductService $products
 * @property \ExpressPlatby\Service\PromotionCodeService $promotionCodes
 * @property \ExpressPlatby\Service\QuoteService $quotes
 * @property \ExpressPlatby\Service\Radar\RadarServiceFactory $radar
 * @property \ExpressPlatby\Service\RefundService $refunds
 * @property \ExpressPlatby\Service\Reporting\ReportingServiceFactory $reporting
 * @property \ExpressPlatby\Service\ReviewService $reviews
 * @property \ExpressPlatby\Service\SetupAttemptService $setupAttempts
 * @property \ExpressPlatby\Service\SetupIntentService $setupIntents
 * @property \ExpressPlatby\Service\ShippingRateService $shippingRates
 * @property \ExpressPlatby\Service\Sigma\SigmaServiceFactory $sigma
 * @property \ExpressPlatby\Service\SourceService $sources
 * @property \ExpressPlatby\Service\SubscriptionItemService $subscriptionItems
 * @property \ExpressPlatby\Service\SubscriptionService $subscriptions
 * @property \ExpressPlatby\Service\SubscriptionScheduleService $subscriptionSchedules
 * @property \ExpressPlatby\Service\Tax\TaxServiceFactory $tax
 * @property \ExpressPlatby\Service\TaxCodeService $taxCodes
 * @property \ExpressPlatby\Service\TaxRateService $taxRates
 * @property \ExpressPlatby\Service\Terminal\TerminalServiceFactory $terminal
 * @property \ExpressPlatby\Service\TestHelpers\TestHelpersServiceFactory $testHelpers
 * @property \ExpressPlatby\Service\TokenService $tokens
 * @property \ExpressPlatby\Service\TopupService $topups
 * @property \ExpressPlatby\Service\TransferService $transfers
 * @property \ExpressPlatby\Service\Treasury\TreasuryServiceFactory $treasury
 * @property \ExpressPlatby\Service\WebhookEndpointService $webhookEndpoints
 * // The end of the section generated from our OpenAPI spec
 */
class ExpressPlatbyClient extends BaseExpressPlatbyClient
{
    /**
     * @var \ExpressPlatby\Service\CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        return $this->getService($name);
    }

    public function getService($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \ExpressPlatby\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->getService($name);
    }
}
