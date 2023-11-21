<?php

namespace ExpressPlatby;

/**
 * Interface for a ExpressPlatby client.
 */
interface ExpressPlatbyStreamingClientInterface extends BaseExpressPlatbyClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
