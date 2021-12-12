<?php

namespace Leonardomanrich\Cpanelwhm\Requests;

class Request
{
    public string $verb;
    public string $path;
    public array $headers;
    public array $body;
    public array $options;

    function __construct($verb, $path, $headers = [], $body = [], $options = [])
    {
        $this->path = $path;
        $this->verb = $verb;
        $this->body = $body;
        $this->headers = $headers;
        $this->options = $options;
    }

    public function setOptions(array $options) : void
    {
        $this->options = $options;
    }

    public function setMethod($method) : void
    {
        $this->verb = $method;
    }

    public function setPath($path) : void
    {
        $this->path = $path;
    }

    public function addHeader($header, $value) : void
    {
        $this->headers[$header] = $value;
    }

    public function getBody() : string
    {
        return http_build_query($this->body, "", '&');
    }

    public function getHeader($header) : mixed
    {
        return $this->headers[$header] ?? false;
    }
}
