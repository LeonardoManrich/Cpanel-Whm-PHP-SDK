<?php

namespace Leonardomanrich\Cpanelwhm\Api;

/**
 * Ports available of cpanel/whm
 *
 * @link https://documentation.cpanel.net/display/DD/Guide+to+API+Authentication
 */
class Ports
{

    /**
     * Unsecure calls to cPanel's APIs.
     */
    public const UNSECURE_API = 2082;

    /**
     *  Secure calls to cPanel's APIs.
     */
    public const SECURE_API = 2083;

    /**
     * Unsecure calls to WHM's APIs, or to cPanel's APIs via the WHM API.
     */
    public const UNSECURE_WHM_TOCPANEL = 2086;

    /**
     * Secure calls to WHM's APIs, or to cPanel's APIs via the WHM API.
     */
    public const SECURE_WHM_TOCPANEL = 2087;

}