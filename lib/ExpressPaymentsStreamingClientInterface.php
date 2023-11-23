<?php

namespace ExpressPayments;

/**
 * Interface for an ExpressPayments client.
 */
interface ExpressPaymentsStreamingClientInterface extends BaseExpressPaymentsClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
