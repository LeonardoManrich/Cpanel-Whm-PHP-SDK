<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

class Request
{

    private string $method;

    private string $path;

    private array $headers;

    private array $body;

    private array $options;

    public function __construct(
        string $method = '',
        string $path = '',
        array  $headers = [],
        array  $body = [],
        array  $options = [])
    {
        $this->path = $path;
        $this->method = $method;
        $this->headers = $headers;
        $this->body = $body;
        $this->options = $options;
    }

    /**
     * add option to a request
     *
     * @param string $option
     * @param string $value
     * @return $this
     */
    public function addOption(string $option, string $value): static
    {
        $this->options[$option] = $value;
        return $this;
    }

    /**
     * set method of request
     *
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method): static
    {
        $this->method = $method;
        return $this;
    }

    /**
     * get method of request
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * set path of request
     *
     * @param string $path
     * @return $this
     */
    public function setPath(string $path): static
    {
        $this->path = $path;
        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * add header to request
     *
     * @param $header
     * @param $value
     * @return $this
     */
    public function addHeader($header, $value): static
    {
        $this->headers[$header] = $value;
        return $this;
    }

    /**
     * return url query of body
     *
     * @return string
     */
    public function getBody(): string
    {
        return http_build_query($this->body);
    }

    /**
     * add body to request
     *
     * @param array $params
     * @return $this
     */
    public function addBody(array $params): static
    {
        foreach ($params as $key => $param) {

            $this->body[$key] = $param;
        }

        return $this;
    }

    /**
     * get a header os request
     *
     * @param string $header
     * @return mixed
     */
    public function getHeader(string $header): mixed
    {
        return $this->headers[$header] ?? false;
    }

    /**
     * return the headers of a request
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * return the options of a request
     *
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * add form params a request
     *
     * @param array $params
     * @return $this
     */
    public function addFormParams(array $params): static
    {
        $this->options['form_params'] ?? $this->options['form_params'] = [];

        foreach ($params as $key => $param) {

            $this->options['form_params'][$key] = $param;
        }

        return $this;
    }

    /**
     * add query params to a request
     *
     * @param array $params
     * @return $this
     */
    public function addQueryParams(array $params): static
    {
        $this->options['query'] ?? $this->options['query'] = [];

        foreach ($params as $key => $param) {

            $this->options['query'][$key] = $param;
        }

        return $this;
    }
}
