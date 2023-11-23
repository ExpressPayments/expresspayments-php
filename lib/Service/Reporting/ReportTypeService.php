<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Reporting;

class ReportTypeService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Returns a full list of Report Types.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Reporting\ReportType>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/reporting/report_types', $params, $opts);
    }

    /**
     * Retrieves the details of a Report Type. (Certain report types require a <a
     * href="https://docs.epayments.network/keys#test-live-modes">live-mode API key</a>.).
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Reporting\ReportType
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/reporting/report_types/%s', $id), $params, $opts);
    }
}
