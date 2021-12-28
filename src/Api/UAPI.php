<?php

namespace Leonardomanrich\Cpanelwhm\Api;

use Leonardomanrich\Cpanelwhm\Requests\Request;

/**
 * Environment to UAPI api of cpanel/whm
 */
class UAPI implements Environment
{
    /**
     * Port used to access your api
     *
     * @var string $port
     */
    private string $port;

    /**
     * Base url of your api
     * Ex: https://www.domain.com
     *
     * @var string $base_url
     */
    private string $base_url;

    /**
     * Your username to auth
     *
     * @var string $username
     */
    private string $username;

    /**
     *  Your password to auth
     *
     * @var string $password
     */
    private string $password;

    /**
     * @param string $base_url
     * @param string $port
     * @param string $username
     * @param string $password
     */
    public function __construct(string $base_url, string $port, string $username, string $password)
    {
        $this->port = $port;
        $this->base_url = $base_url;
        $this->username = $username;
        $this->password = $password;

    }

    /**
     * Return the uri of environment
     *
     * @return string
     */
    public function uri(): string
    {
        return "/execute/";
    }

    public function base_url(): string
    {
        return $this->base_url . ':' . $this->port;
    }

    /**
     * Add the authorization to the request
     *
     * @param Request $request
     * @return void
     */
    public function auth(Request $request): void
    {
        if (!$this->hasAuthHeader($request)) {
            $request->addHeader('Authorization', 'Basic ' . $this->authorizationKey());
        }
    }

    /**
     * Return the basic auth
     *
     * @return string
     */
    private function authorizationKey(): string
    {
        return base64_encode($this->username . ":" . $this->password);
    }

    /**
     * Check if the request has the Authorization header
     *
     * @param Request $request
     * @return bool
     */
    private function hasAuthHeader(Request $request): bool
    {
        return (bool)$request->getHeader("Authorization");
    }
}