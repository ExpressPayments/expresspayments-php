<?php

// File generated from our OpenAPI spec

namespace ExpressPlatby\Service\Reporting;

class ReportTypeService extends \ExpressPlatby\Service\AbstractService
{
    /**
     * Returns a full list of Report Types.
     *
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Collection<\ExpressPlatby\Reporting\ReportType>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/reporting/report_types', $params, $opts);
    }

    /**
     * Retrieves the details of a Report Type. (Certain report types require a <a
     * href="https://expressplatby.cz/docs/keys#test-live-modes">live-mode API key</a>.).
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPlatby\Util\RequestOptions $opts
     *
     * @throws \ExpressPlatby\Exception\ApiErrorException if the request fails
     *
     * @return \ExpressPlatby\Reporting\ReportType
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/reporting/report_types/%s', $id), $params, $opts);
    }
}
