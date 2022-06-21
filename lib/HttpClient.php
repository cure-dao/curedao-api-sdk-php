<?php
namespace CureDAO\Client;
use Httpful\Request;

class HttpClient
{
    /**
     * @var string
     */
    private $baseUrl = 'https://v7.curedao.org';
    private $request;
    /**
     * @var mixed
     */
    protected $data;

    public function __construct() {
        if(!isset($_ENV['CUREDAO_CLIENT_ID'])){
            $envPath = __DIR__ . '/../../..';
            if(!file_exists($envPath."/.env")){
                throw new \Exception('Please create a .env file in your project directory like 
                cure-dao/cure-dao-sdk-php/.env.example');
            }
            $dotenv = \Dotenv\Dotenv::createImmutable($envPath);
            $dotenv->load();
        }
        $msg = "Get your client id from https://builder.curedao.org";
        if(empty($_ENV["CUREDAO_CLIENT_ID"])){
            throw new \RuntimeException("CUREDAO_CLIENT_ID is not set in .env file. $msg");
        }
        if(empty($_ENV["CUREDAO_CLIENT_SECRET"])){
            throw new \RuntimeException("CUREDAO_CLIENT_SECRET is not set in .env file. $msg");
        }
        if(!empty($_ENV["CUREDAO_API_URL"])){
            $this->setBaseUrl($_ENV['CUREDAO_API_URL']);
        }
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
     * @return array
     * @throws \Httpful\Exception\ConnectionErrorException
     */
    public function post(string $path, array $payload, array $headers = []): array
    {
        $payload['client_id'] = $_ENV["CUREDAO_CLIENT_ID"];
        $payload['client_secret'] = $_ENV["CUREDAO_CLIENT_SECRET"];
        $this->request = Request::post($this->getUrl($path))
            ->body($payload,\Httpful\Mime::FORM)
            ->addHeaders($headers)
            ->expectsJson()
            ->followRedirects()
            //->withoutStrictSSL()
            ->send();
        return $this->getDataFromResponse();
    }
    public function get(string $path, array $params = []): array{
        if(isset($_ENV['CUREDAO_CLIENT_ID'])) {
            $params['client_id'] = $_ENV["CUREDAO_CLIENT_ID"];
            $params['client_secret'] = $_ENV["CUREDAO_CLIENT_SECRET"];
        }
        $this->request =  \Httpful\Request::get($this->getUrl($path, $params))
            //->expectsJson()
            //->withXTrivialHeader('Just as a demo')
            ->send();
        return $this->getDataFromResponse($path);
    }
    private function getUrl(string $path, array $params = []): string{
        $url = $this->getBaseUrl() . $path;
        if(!$params){return $url;}
        return $url.(parse_url($url, PHP_URL_QUERY) ? '&' : '?').http_build_query($params);
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return array
     * @throws \Exception
     */
    protected function getDataFromResponse(): array {
        $body = $this->request->body;
        if(!empty($body->error)){
            throw new \Exception($body->error);
        }
        $this->data = $body->data ?? $body['data'] ?? $body;
        if(!is_array($this->data)){
            $this->data = json_decode(json_encode($this->data), true);
        }
        return $this->data;
    }
}
