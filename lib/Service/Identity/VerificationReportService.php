<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\Identity;

class VerificationReportService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * List all verification reports.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Collection<\ExpressPlatby\Identity\VerificationReport>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/identity/verification_reports', $params, $opts);
    }

    /**
     * Retrieves an existing VerificationReport.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Identity\VerificationReport
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/identity/verification_reports/%s', $id), $params, $opts);
    }
}
