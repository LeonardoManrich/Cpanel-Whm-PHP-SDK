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

    public function __construct(
        string $verb = '',
        string $path = '',
        array  $headers = [],
        array  $body = [],
        array  $options = [])
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
     * @param string $option
     * @param string $value
     * @return Request
     */
    //TODO documentar aqui
    public function addOption(string $option, string $value): static
    {
        $this->options[$option] = $value;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $method
     * @return Request
     */
    //TODO documentar aqui
    public function setMethod(string $method): static
    {
        $this->verb = $method;
        return $this;
    }

    public function getMethod() : string
    {
        return $this->verb;
    }

    /**
     * Undocumented function
     *
     * @param string $path
     * @return Request
     */
    //TODO documentar aqui
    public function setPath(string $path): static
    {
        $this->path = $path;
        return $this;
    }

    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * Undocumented function
     *
     * @param [type] $header
     * @param [type] $value
     * @return Request
     */
    //TODO documentar aqui
    public function addHeader($header, $value): static
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
        return http_build_query($this->body);
    }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return Request
     */
    public function addBody(array $params): static
    {
        foreach ($params as $key => $param) {

            $this->body[$key] = $param;
        }

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $header
     * @return mixed
     */
    //TODO documentar aqui
    public function getHeader(string $header): mixed
    {
        return $this->headers[$header] ?? false;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function addFormParams(array $params): static
    {
        $this->options['form_params'] ?? $this->options['form_params'] = [];

        foreach ($params as $key => $param) {

            $this->options['form_params'][$key] = $param;
        }

        return $this;
    }

    public function addQueryParams(array $params): static
    {
        $this->options['form_params'] ?? $this->options['form_params'] = [];

        foreach ($params as $key => $param) {

            $this->options['query'][$key] = $param;
        }

        return $this;
    }
}
