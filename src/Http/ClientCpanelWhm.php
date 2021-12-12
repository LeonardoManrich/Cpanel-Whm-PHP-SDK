<?php

namespace Leonardomanrich\Cpanelwhm\Http;


use stdClass;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\Request;
use Leonardomanrich\Cpanelwhm\Requests\Injector;

class ClientCpanelWhm extends Client
{
    private $injectors = [];

    public function __construct(CpanelWhm $environment)
    {   
        try {
            parent::__construct([
                'base_uri' => $environment->base_url() . $environment->uri()
            ]);
        } catch (ClientException $e) {
            return Message::parseMessage($e->getMessage());
            die();
        }
    }

    public function addInjector(Injector $inj)
    {
        $this->injectors[] = $inj;
    }

    public function execute(Request $request): array|stdClass
    {
        try {

            foreach ($this->injectors as $inj) {
                $inj->inject($request);
            }

            $result = $this->send(
                new \GuzzleHttp\Psr7\Request(
                    $request->verb,
                    $request->path,
                    $request->headers,
                    $request->getBody()
                ),
                $request->options
            );

            $response = new stdClass();
            $response->status_code = $result->getStatusCode();
            $response->headers = $result->getHeaders();
            $response->reason_phrase = $result->getReasonPhrase();
            $response->result = json_decode($result->getBody()->getContents());

            return $response;

        } catch (RequestException $e) {
            return Message::parseMessage(Message::toString($e->getResponse()));
        } catch (\Exception $e) {
            return Message::parseMessage($e->getMessage());
        } catch (GuzzleException $e) {
            return Message::parseMessage($e->getMessage());
        }
    }

}