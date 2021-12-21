<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use stdClass;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Leonardomanrich\Cpanelwhm\Api\CpanelWhm;
use Leonardomanrich\Cpanelwhm\Requests\Request;
use Leonardomanrich\Cpanelwhm\Requests\Injector;

class ClientCpanelWhm extends Client
{   
    /**
     * Undocumented variable
     *
     * @var array
     */
    //TODO documentar aqui
    private $injectors = [];

    public function __construct(CpanelWhm $environment)
    {   
        //TODO documentar aqui
        try {
            parent::__construct([
                'base_uri' => $environment->base_url() . $environment->uri()
            ]);
        } catch (ClientException $e) {
            return Message::parseMessage($e->getMessage());
            die();
        }
    }

    /**
     * Undocumented function
     *
     * @param Injector $inj
     * @return void
     */
    //TODO documentar aqui
    public function addInjector(Injector $inj)
    {
        $this->injectors[] = $inj;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    //TODO documentar aqui
    public function execute(Request $request)
    {
        try {

            foreach ($this->injectors as $inj) {
                $inj->inject($request);
            }

            //die(var_dump($request->options));

            $result = $this->send(
                new Psr7Request(
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