<?php

namespace ExpressPayments;

class BaseExpressPaymentsClient implements ExpressPaymentsClientInterface, ExpressPaymentsStreamingClientInterface
{
    /** @var string default base URL for ExpressPayments' API */
    const DEFAULT_API_BASE = 'https://api.epayments.network';

    /** @var string default base URL for ExpressPayments' OAuth API */
    const DEFAULT_CONNECT_BASE = 'https://connect.epayments.network';

    /** @var string default base URL for ExpressPayments' Files API */
    const DEFAULT_FILES_BASE = 'https://files.epayments.network';

    /** @var array<string, null|string> */
    const DEFAULT_CONFIG = [
        'api_key' => null,
        'client_id' => null,
        'ep_account' => null,
        'ep_version' => \ExpressPayments\Util\ApiVersion::CURRENT,
        'api_base' => self::DEFAULT_API_BASE,
        'connect_base' => self::DEFAULT_CONNECT_BASE,
        'files_base' => self::DEFAULT_FILES_BASE,
    ];

    /** @var array<string, mixed> */
    private $config;

    /** @var \ExpressPayments\Util\RequestOptions */
    private $defaultOpts;

    /**
     * Initializes a new instance of the {@link BaseExpressPaymentsClient} class.
     *
     * The constructor takes a single argument. The argument can be a string, in which case it
     * should be the API key. It can also be an array with various configuration settings.
     *
     * Configuration settings include the following options:
     *
     * - api_key (null|string): the ExpressPayments API key, to be used in regular API requests.
     * - client_id (null|string): the ExpressPayments client ID, to be used in OAuth requests.
     * - ep_account (null|string): an ExpressPayments account ID. If set, all requests sent by the client
     *   will automatically use the {@code EP-Account} header with that account ID.
     * - ep_version (null|string): an ExpressPayments API version. If set, all requests sent by the client
     *   will include the {@code EP-Version} header with that API version.
     *
     * The following configuration settings are also available, though setting these should rarely be necessary
     * (only useful if you want to send requests to a mock server like expresspayments-mock):
     *
     * - api_base (string): the base URL for regular API requests. Defaults to
     *   {@link DEFAULT_API_BASE}.
     * - connect_base (string): the base URL for OAuth requests. Defaults to
     *   {@link DEFAULT_CONNECT_BASE}.
     * - files_base (string): the base URL for file creation requests. Defaults to
     *   {@link DEFAULT_FILES_BASE}.
     *
     * @param array<string, mixed>|string $config the API key as a string, or an array containing
     *   the client configuration settings
     */
    public function __construct($config = [])
    {
        if (\is_string($config)) {
            $config = ['api_key' => $config];
        } elseif (!\is_array($config)) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('$config must be a string or an array');
        }

        $config = \array_merge(self::DEFAULT_CONFIG, $config);
        $this->validateConfig($config);

        $this->config = $config;

        $this->defaultOpts = \ExpressPayments\Util\RequestOptions::parse([
            'ep_account' => $config['ep_account'],
            'ep_version' => $config['ep_version'],
        ]);
    }

    /**
     * Gets the API key used by the client to send requests.
     *
     * @return null|string the API key used by the client to send requests
     */
    public function getApiKey()
    {
        return $this->config['api_key'];
    }

    /**
     * Gets the client ID used by the client in OAuth requests.
     *
     * @return null|string the client ID used by the client in OAuth requests
     */
    public function getClientId()
    {
        return $this->config['client_id'];
    }

    /**
     * Gets the base URL for ExpressPayments' API.
     *
     * @return string the base URL for ExpressPayments' API
     */
    public function getApiBase()
    {
        return $this->config['api_base'];
    }

    /**
     * Gets the base URL for ExpressPayments' OAuth API.
     *
     * @return string the base URL for ExpressPayments' OAuth API
     */
    public function getConnectBase()
    {
        return $this->config['connect_base'];
    }

    /**
     * Gets the base URL for ExpressPayments' Files API.
     *
     * @return string the base URL for ExpressPayments' Files API
     */
    public function getFilesBase()
    {
        return $this->config['files_base'];
    }

    /**
     * Sends a request to ExpressPayments' API.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\ExpressPayments\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \ExpressPayments\ExpressPaymentsObject the object returned by ExpressPayments' API
     */
    public function request($method, $path, $params, $opts)
    {
        $opts = $this->defaultOpts->merge($opts, true);
        $baseUrl = $opts->apiBase ?: $this->getApiBase();
        $requestor = new \ExpressPayments\ApiRequester($this->apiKeyForRequest($opts), $baseUrl);
        list($response, $opts->apiKey) = $requestor->request($method, $path, $params, $opts->headers);
        $opts->discardNonPersistentHeaders();
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }

    /**
     * Sends a request to ExpressPayments' API, passing chunks of the streamed response
     * into a user-provided $readBodyChunkCallable callback.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param callable $readBodyChunkCallable a function that will be called
     * @param array $params the parameters of the request
     * @param array|\ExpressPayments\Util\RequestOptions $opts the special modifiers of the request
     * with chunks of bytes from the body if the request is successful
     */
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts)
    {
        $opts = $this->defaultOpts->merge($opts, true);
        $baseUrl = $opts->apiBase ?: $this->getApiBase();
        $requestor = new \ExpressPayments\ApiRequester($this->apiKeyForRequest($opts), $baseUrl);
        list($response, $opts->apiKey) = $requestor->requestStream($method, $path, $readBodyChunkCallable, $params, $opts->headers);
    }

    /**
     * Sends a request to ExpressPayments' API.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\ExpressPayments\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \ExpressPayments\Collection of ApiResources
     */
    public function requestCollection($method, $path, $params, $opts)
    {
        $obj = $this->request($method, $path, $params, $opts);
        if (!($obj instanceof \ExpressPayments\Collection)) {
            $received_class = \get_class($obj);
            $msg = "Expected to receive `ExpressPayments\\Collection` object from ExpressPayments API. Instead received `{$received_class}`.";

            throw new \ExpressPayments\Exception\UnexpectedValueException($msg);
        }
        $obj->setFilters($params);

        return $obj;
    }

    /**
     * Sends a request to ExpressPayments' API.
     *
     * @param 'delete'|'get'|'post' $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\ExpressPayments\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \ExpressPayments\SearchResult of ApiResources
     */
    public function requestSearchResult($method, $path, $params, $opts)
    {
        $obj = $this->request($method, $path, $params, $opts);
        if (!($obj instanceof \ExpressPayments\SearchResult)) {
            $received_class = \get_class($obj);
            $msg = "Expected to receive `ExpressPayments\\SearchResult` object from ExpressPayments API. Instead received `{$received_class}`.";

            throw new \ExpressPayments\Exception\UnexpectedValueException($msg);
        }
        $obj->setFilters($params);

        return $obj;
    }

    /**
     * @param \ExpressPayments\Util\RequestOptions $opts
     *
     * @return string
     * @throws \ExpressPayments\Exception\AuthenticationException
     *
     */
    private function apiKeyForRequest($opts)
    {
        $apiKey = $opts->apiKey ?: $this->getApiKey();

        if (null === $apiKey) {
            $msg = 'No API key provided. Set your API key when constructing the '
                . 'ExpressPaymentsClient instance, or provide it on a per-request basis '
                . 'using the `api_key` key in the $opts argument.';

            throw new \ExpressPayments\Exception\AuthenticationException($msg);
        }

        return $apiKey;
    }

    /**
     * @param array<string, mixed> $config
     *
     * @throws \ExpressPayments\Exception\InvalidArgumentException
     */
    private function validateConfig($config)
    {
        // api_key
        if (null !== $config['api_key'] && !\is_string($config['api_key'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('api_key must be null or a string');
        }

        if (null !== $config['api_key'] && ('' === $config['api_key'])) {
            $msg = 'api_key cannot be the empty string';

            throw new \ExpressPayments\Exception\InvalidArgumentException($msg);
        }

        if (null !== $config['api_key'] && (\preg_match('/\s/', $config['api_key']))) {
            $msg = 'api_key cannot contain whitespace';

            throw new \ExpressPayments\Exception\InvalidArgumentException($msg);
        }

        // client_id
        if (null !== $config['client_id'] && !\is_string($config['client_id'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('client_id must be null or a string');
        }

        // ep_account
        if (null !== $config['ep_account'] && !\is_string($config['ep_account'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('ep_account must be null or a string');
        }

        // ep_version
        if (null !== $config['ep_version'] && !\is_string($config['ep_version'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('ep_version must be null or a string');
        }

        // api_base
        if (!\is_string($config['api_base'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('api_base must be a string');
        }

        // connect_base
        if (!\is_string($config['connect_base'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('connect_base must be a string');
        }

        // files_base
        if (!\is_string($config['files_base'])) {
            throw new \ExpressPayments\Exception\InvalidArgumentException('files_base must be a string');
        }

        // check absence of extra keys
        $extraConfigKeys = \array_diff(\array_keys($config), \array_keys(self::DEFAULT_CONFIG));
        if (!empty($extraConfigKeys)) {
            // Wrap in single quote to more easily catch trailing spaces errors
            $invalidKeys = "'" . \implode("', '", $extraConfigKeys) . "'";

            throw new \ExpressPayments\Exception\InvalidArgumentException('Found unknown key(s) in configuration array: ' . $invalidKeys);
        }
    }
}
