<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service\Reporting;

class ReportRunService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Returns a list of Report Runs, with the most recent appearing first.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\Reporting\ReportRun>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/reporting/report_runs', $params, $opts);
    }

    /**
     * Creates a new object and begin running the report. (Certain report types require
     * a <a href="https://docs.epayments.network/keys#test-live-modes">live-mode API key</a>.).
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Reporting\ReportRun
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/reporting/report_runs', $params, $opts);
    }

    /**
     * Retrieves the details of an existing Report Run.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Reporting\ReportRun
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/reporting/report_runs/%s', $id), $params, $opts);
    }
}
