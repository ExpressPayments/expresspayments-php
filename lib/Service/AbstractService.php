<?php

namespace ExpressPlatby\Service;

/**
 * Abstract base class for all services.
 */
abstract class AbstractService
{
    /**
     * @var \ExpressPlatby\ExpressPlatbyClientInterface
     */
    protected $client;

    /**
     * @var \ExpressPlatby\ExpressPlatbyStreamingClientInterface
     */
    protected $streamingClient;

    /**
     * Initializes a new instance of the {@link AbstractService} class.
     *
     * @param \ExpressPlatby\ExpressPlatbyClientInterface $client
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->streamingClient = $client;
    }

    /**
     * Gets the client used by this service to send requests.
     *
     * @return \ExpressPlatby\ExpressPlatbyClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Gets the client used by this service to send requests.
     *
     * @return \ExpressPlatby\ExpressPlatbyStreamingClientInterface
     */
    public function getStreamingClient()
    {
        return $this->streamingClient;
    }

    /**
     * Translate null values to empty strings. For service methods,
     * we interpret null as a request to unset the field, which
     * corresponds to sending an empty string for the field to the
     * API.
     *
     * @param null|array $params
     */
    private static function formatParams($params)
    {
        if (null === $params) {
            return null;
        }
        \array_walk_recursive($params, function (&$value, $key) {
            if (null === $value) {
                $value = '';
            }
        });

        return $params;
    }

    protected function request($method, $path, $params, $opts)
    {
        return $this->getClient()->request($method, $path, self::formatParams($params), $opts);
    }

    protected function requestStream($method, $path, $readBodyChunkCallable, $params, $opts)
    {
        // TODO (MAJOR): Add this method to ExpressPlatbyClientInterface
        // @phpstan-ignore-next-line
        return $this->getStreamingClient()->requestStream($method, $path, $readBodyChunkCallable, self::formatParams($params), $opts);
    }

    protected function requestCollection($method, $path, $params, $opts)
    {
        // TODO (MAJOR): Add this method to ExpressPlatbyClientInterface
        // @phpstan-ignore-next-line
        return $this->getClient()->requestCollection($method, $path, self::formatParams($params), $opts);
    }

    protected function requestSearchResult($method, $path, $params, $opts)
    {
        // TODO (MAJOR): Add this method to ExpressPlatbyClientInterface
        // @phpstan-ignore-next-line
        return $this->getClient()->requestSearchResult($method, $path, self::formatParams($params), $opts);
    }

    protected function buildPath($basePath, ...$ids)
    {
        foreach ($ids as $id) {
            if (null === $id || '' === \trim($id)) {
                $msg = 'The resource ID cannot be null or whitespace.';

                throw new \ExpressPlatby\Exception\InvalidArgumentException($msg);
            }
        }

        return \sprintf($basePath, ...\array_map('\urlencode', $ids));
    }
}
