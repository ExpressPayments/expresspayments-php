<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Apps;

/**
 * Secret Store is an API that allows ExpressPayments Apps developers to securely persist secrets for use by UI Extensions and app backends.
 *
 * The primary resource in Secret Store is a <code>secret</code>. Other apps can't view secrets created by an app. Additionally, secrets are scoped to provide further permission control.
 *
 * All Dashboard users and the app backend share <code>account</code> scoped secrets. Use the <code>account</code> scope for secrets that don't change per-user, like a third-party API key.
 *
 * A <code>user</code> scoped secret is accessible by the app backend and one specific Dashboard user. Use the <code>user</code> scope for per-user secrets like per-user OAuth tokens, where different users might have different permissions.
 *
 * Related guide: <a href="https://docs.epayments.network/ep-apps/store-auth-data-custom-objects">Store data between page reloads</a>
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property null|bool $deleted If true, indicates that this secret has been deleted
 * @property null|int $expires_at The Unix timestamp for the expiry time of the secret, after which the secret deletes.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property string $name A name for the secret that's unique within the scope.
 * @property null|string $payload The plaintext secret value to be stored.
 * @property \ExpressPayments\ExpressPaymentsObject $scope
 */
class Secret extends \ExpressPayments\ApiResource
{
    const OBJECT_NAME = 'apps.secret';

    use \ExpressPayments\ApiOperations\All;
    use \ExpressPayments\ApiOperations\Create;

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Apps\Secret the deleted secret
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function deleteWhere($params = null, $opts = null)
    {
        $url = static::classUrl() . '/delete';
        list($response, $opts) = static::_staticRequest('post', $url, $params, $opts);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \ExpressPayments\Apps\Secret the finded secret
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public static function find($params = null, $opts = null)
    {
        $url = static::classUrl() . '/find';
        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \ExpressPayments\Util\Util::convertToExpressPaymentsObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }
}
