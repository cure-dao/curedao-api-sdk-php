<?php
namespace CureDAO\Client;
use Httpful\Request;
class HttpClient
{
    /**
     * @var string
     */
    private $baseUrl;
    private $request;
    /**
     * @var mixed
     */
    protected $data;

    public function __construct() {
        if(!isset($_ENV['CUREDAO_CLIENT_ID'])){
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/..');
            $dotenv->load();
        }
        $msg = "Get your client id from https://builder.curedao.org";
        if(empty($_ENV["CUREDAO_CLIENT_ID"])){
            throw new \RuntimeException("CUREDAO_CLIENT_ID is not set in .env file. $msg");
        }
        if(empty($_ENV["CUREDAO_CLIENT_SECRET"])){
            throw new \RuntimeException("CUREDAO_CLIENT_SECRET is not set in .env file. $msg");
        }
        $this->baseUrl = $_ENV['CUREDAO_API_URL'] ?? 'https://v7.curedao.org/api/v6/';
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
        return $this->getRequest()->body;
    }

    /**
     * @param string $path
     * @param array $payload
     * @param array $headers
     * @return mixed
     * @throws \Httpful\Exception\ConnectionErrorException
     */
    public function post(string $path, array $payload, array $headers = []){
        $payload['client_id'] = $_ENV["CUREDAO_CLIENT_ID"];
        $payload['client_secret'] = $_ENV["CUREDAO_CLIENT_SECRET"];
        $this->request = Request::post($this->getUrl($path))
            ->body($payload,\Httpful\Mime::FORM)
            ->addHeaders($headers)
            ->expectsJson()
            ->followRedirects()
            //->withoutStrictSSL()
            ->send();
        $body = $this->request->body;
        //$body = json_decode($body, true);
        return $this->data = $body->data ?? $body['data'] ?? $body;
    }
    public function get(string $path, array $params = []){
        if(isset($_ENV['CUREDAO_CLIENT_ID'])) {
            $params['client_id'] = $_ENV["CUREDAO_CLIENT_ID"];
            $params['client_secret'] = $_ENV["CUREDAO_CLIENT_SECRET"];
        }
        $this->request =  \Httpful\Request::get($this->getUrl($path, $params))
            //->expectsJson()
            //->withXTrivialHeader('Just as a demo')
            ->send();
        $body = $this->request->body;
        //$body = json_decode($body, true);
        return $this->data = $body->data ?? $body['data'] ?? $body;
    }
    private function getUrl(string $path, array $params = []): string{
        $url = $this->baseUrl . $path;
        if(!$params){return $url;}
        return $url.(parse_url($url, PHP_URL_QUERY) ? '&' : '?').http_build_query($params);
    }
}
