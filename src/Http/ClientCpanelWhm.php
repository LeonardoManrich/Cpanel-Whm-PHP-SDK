<?php

namespace Leonardomanrich\Cpanelwhm\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Leonardomanrich\Cpanelwhm\Api\Environment;
use Leonardomanrich\Cpanelwhm\Requests\Injectors\Injector;
use Leonardomanrich\Cpanelwhm\Requests\Request;
use stdClass;

class ClientCpanelWhm extends Client
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    //TODO documentar aqui
    private array $injectors = [];

    public function __construct(Environment $environment)
    {
        //TODO documentar aqui
        try {
            parent::__construct([
                'base_uri' => $environment->base_url() . $environment->uri()
            ]);
        } catch (ClientException $e) {
            Message::parseMessage($e->getMessage());
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
     * @return stdClass|array
     */
    //TODO documentar aqui
    public function execute(Request $request): stdClass|array
    {
        try {

            foreach ($this->injectors as $inj) {
                $inj->inject($request);
            }

            $result = $this->send(
                new Psr7Request(
                    $request->getMethod(),
                    $request->getPath(),
                    $request->getHeaders(),
                    $request->getBody()
                ),
                $request->getOptions()
            );

            $response = new stdClass();
            $response->status_code = $result->getStatusCode();
            $response->headers = $result->getHeaders();
            $response->reason_phrase = $result->getReasonPhrase();
            $response->result = json_decode(
                $result->getBody()->getContents(),
                false,
                512,
                JSON_THROW_ON_ERROR
            ); //TODO whm/cpanel tem funções que não retornam json

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
