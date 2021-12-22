<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

/**
 * Undocumented class
 */
//TODO documentar aqui
class Request
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    //TODO documentar aqui
    private string $verb;

    /**
     * Undocumented variable
     *
     * @var string
     */
    //TODO documentar aqui
    private string $path;

    /**
     * Undocumented variable
     *
     * @var array
     */
    //TODO documentar aqui
    private array $headers;

    /**
     * Undocumented variable
     *
     * @var array
     */
    //TODO documentar aqui
    private array $body;

    /**
     * Undocumented variable
     *
     * @var array
     */
    //TODO documentar aqui
    private array $options;

    function __construct($verb = '', $path = '', $headers = [], $body = [], $options = [])
    {
        $this->path = $path;
        $this->verb = $verb;
        $this->body = $body;
        $this->headers = $headers;
        $this->options = $options;
    }

    /**
     * Undocumented function
     *
     * @param [type] $option
     * @param [type] $value
     * @return void
     */
    //TODO documentar aqui
    public function addOption($option, $value)
    {
        $this->options[$option] = $value;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @param [type] $method
     * @return void
     */
    //TODO documentar aqui
    public function setMethod($method)
    {
        $this->verb = $method;
        return $this;
    }

    public function getMethod()
    {
        return $this->verb;
    }

    /**
     * Undocumented function
     *
     * @param [type] $path
     * @return void
     */
    //TODO documentar aqui
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    public function getPath()
    {
        return $this->path;
    }

    /**
     * Undocumented function
     *
     * @param [type] $header
     * @param [type] $value
     * @return void
     */
    //TODO documentar aqui
    public function addHeader($header, $value)
    {
        $this->headers[$header] = $value;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    //TODO documentar aqui
    public function getBody(): string
    {
        return http_build_query($this->body, "", '&');
    }

    /**
     * Undocumented function
     *
     * @param [type] $body
     * @return void
     */
    public function addBody(array $params)
    {   
        foreach($params as $key => $param){

            $this->body[$key] = $param;
        }
        
        return $this;
    }

    /**
     * Undocumented function
     *
     * @param [type] $header
     * @return mixed
     */
    //TODO documentar aqui
    public function getHeader($header): mixed
    {
        return $this->headers[$header] ?? false;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function addFormParams(array $params)
    {
        $this->options['form_params'] ?? $this->options['form_params'] = [];

        foreach($params as $key => $param){

            $this->options['form_params'][$key] = $param;
        }

        return $this;
    }

    public function addQueryParams(array $params)
    {
        $this->options['form_params'] ?? $this->options['form_params'] = [];

        foreach($params as $key => $param){

            $this->options['query'][$key] = $param;
        }

        return $this;
    }
}
