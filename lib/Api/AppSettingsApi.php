<?php
/**
 * AppSettingsApi */namespace CureDAO\Client\Api;use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CureDAO\Client\ApiException;
use CureDAO\Client\Configuration;
use CureDAO\Client\HeaderSelector;
use CureDAO\Client\ObjectSerializer;/**
 * AppSettingsApi Class 
 */
class AppSettingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;    /**
     * @var Configuration
     */
    protected $config;    /**
     * @var HeaderSelector
     */
    protected $headerSelector;    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }    /**
     * Operation getAppSettings
     *
     * Get client app settings
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\AppSettingsResponse
     */
    public function getAppSettings($client_id = null, $client_secret = null, $platform = null)
    {
        list($response) = $this->getAppSettingsWithHttpInfo($client_id, $client_secret, $platform);
        return $response;
    }    /**
     * Operation getAppSettingsWithHttpInfo
     *
     * Get client app settings
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\AppSettingsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAppSettingsWithHttpInfo($client_id = null, $client_secret = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\AppSettingsResponse';
        $request = $this->getAppSettingsRequest($client_id, $client_secret, $platform);        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }            $statusCode = $response->getStatusCode();            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Models\AppSettingsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Models\JsonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }    /**
     * Operation getAppSettingsAsync
     *
     * Get client app settings
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAppSettingsAsync($client_id = null, $client_secret = null, $platform = null)
    {
        return $this->getAppSettingsAsyncWithHttpInfo($client_id, $client_secret, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }    /**
     * Operation getAppSettingsAsyncWithHttpInfo
     *
     * Get client app settings
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAppSettingsAsyncWithHttpInfo($client_id = null, $client_secret = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\AppSettingsResponse';
        $request = $this->getAppSettingsRequest($client_id, $client_secret, $platform);        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }    /**
     * Create request for operation 'getAppSettings'
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAppSettingsRequest($client_id = null, $client_secret = null, $platform = null)
    {        $resourcePath = '/v3/appSettings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($client_secret !== null) {
            $queryParams['client_secret'] = ObjectSerializer::toQueryValue($client_secret);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // body params
        $_tempBody = null;        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }        return $options;
    }
}
