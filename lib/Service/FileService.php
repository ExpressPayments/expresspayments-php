<?php

// File generated from our OpenAPI spec

namespace ExpressPayments\Service;

class FileService extends \ExpressPayments\Service\AbstractService
{
    /**
     * Returns a list of the files that your account has access to. ExpressPayments sorts and
     * returns the files by their creation dates, placing the most recently created
     * files at the top.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\Collection<\ExpressPayments\File>
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/files', $params, $opts);
    }

    /**
     * Retrieves the details of an existing file object. After you supply a unique file
     * ID, ExpressPayments returns the corresponding file object. Learn how to <a
     * href="/docs/file-upload#download-file-contents">access file contents</a>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\File
     * @throws \ExpressPayments\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/files/%s', $id), $params, $opts);
    }

    /**
     * Create a file.
     *
     * @param null|array $params
     * @param null|array|\ExpressPayments\Util\RequestOptions $opts
     *
     * @return \ExpressPayments\File
     */
    public function create($params = null, $opts = null)
    {
        $opts = \ExpressPayments\Util\RequestOptions::parse($opts);
        if (!isset($opts->apiBase)) {
            $opts->apiBase = $this->getClient()->getFilesBase();
        }

        // Manually flatten params, otherwise curl's multipart encoder will
        // choke on nested null|arrays.
        $flatParams = \array_column(\ExpressPayments\Util\Util::flattenParams($params), 1, 0);

        return $this->request('post', '/v1/files', $flatParams, $opts);
    }
}
