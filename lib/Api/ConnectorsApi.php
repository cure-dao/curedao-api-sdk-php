<?php
/**
 * ConnectorsApi */

namespace CureDAO\Client\Api;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CureDAO\Client\ApiException;
use CureDAO\Client\Configuration;
use CureDAO\Client\HeaderSelector;
use CureDAO\Client\ObjectSerializer;
/**
 * ConnectorsApi Class Doc Comment
 *
 */
class ConnectorsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var Configuration
     */
    protected $config;
    /**
     * @var HeaderSelector
     */
    protected $headerSelector;
    /**
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
    }
    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation connectConnector
     *
     * Obtain a token from 3rd party data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function connectConnector($connector_name, $user_id = null)
    {
        $this->connectConnectorWithHttpInfo($connector_name, $user_id);
    }
    /**
     * Operation connectConnectorWithHttpInfo
     *
     * Obtain a token from 3rd party data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function connectConnectorWithHttpInfo($connector_name, $user_id = null)
    {
        $returnType = '';
        $request = $this->connectConnectorRequest($connector_name, $user_id);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation connectConnectorAsync
     *
     * Obtain a token from 3rd party data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function connectConnectorAsync($connector_name, $user_id = null)
    {
        return $this->connectConnectorAsyncWithHttpInfo($connector_name, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation connectConnectorAsyncWithHttpInfo
     *
     * Obtain a token from 3rd party data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function connectConnectorAsyncWithHttpInfo($connector_name, $user_id = null)
    {
        $returnType = '';
        $request = $this->connectConnectorRequest($connector_name, $user_id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
    }
    /**
     * Create request for operation 'connectConnector'
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function connectConnectorRequest($connector_name, $user_id = null)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null || (is_array($connector_name) && count($connector_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connector_name when calling connectConnector'
            );
        }
        $resourcePath = '/v3/connectors/{connectorName}/connect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                '{' . 'connectorName' . '}',
                ObjectSerializer::toPathValue($connector_name),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation disconnectConnector
     *
     * Delete stored connection info
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function disconnectConnector($connector_name)
    {
        $this->disconnectConnectorWithHttpInfo($connector_name);
    }
    /**
     * Operation disconnectConnectorWithHttpInfo
     *
     * Delete stored connection info
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function disconnectConnectorWithHttpInfo($connector_name)
    {
        $returnType = '';
        $request = $this->disconnectConnectorRequest($connector_name);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation disconnectConnectorAsync
     *
     * Delete stored connection info
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disconnectConnectorAsync($connector_name)
    {
        return $this->disconnectConnectorAsyncWithHttpInfo($connector_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation disconnectConnectorAsyncWithHttpInfo
     *
     * Delete stored connection info
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disconnectConnectorAsyncWithHttpInfo($connector_name)
    {
        $returnType = '';
        $request = $this->disconnectConnectorRequest($connector_name);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
    }
    /**
     * Create request for operation 'disconnectConnector'
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function disconnectConnectorRequest($connector_name)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null || (is_array($connector_name) && count($connector_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connector_name when calling disconnectConnector'
            );
        }
        $resourcePath = '/v3/connectors/{connectorName}/disconnect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                '{' . 'connectorName' . '}',
                ObjectSerializer::toPathValue($connector_name),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation getConnectors
     *
     * List of Connectors
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\GetConnectorsResponse
     */
    public function getConnectors($client_id = null, $platform = null)
    {
        list($response) = $this->getConnectorsWithHttpInfo($client_id, $platform);
        return $response;
    }
    /**
     * Operation getConnectorsWithHttpInfo
     *
     * List of Connectors
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\GetConnectorsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConnectorsWithHttpInfo($client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetConnectorsResponse';
        $request = $this->getConnectorsRequest($client_id, $platform);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\GetConnectorsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation getConnectorsAsync
     *
     * List of Connectors
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConnectorsAsync($client_id = null, $platform = null)
    {
        return $this->getConnectorsAsyncWithHttpInfo($client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation getConnectorsAsyncWithHttpInfo
     *
     * List of Connectors
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConnectorsAsyncWithHttpInfo($client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetConnectorsResponse';
        $request = $this->getConnectorsRequest($client_id, $platform);
        return $this->client
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
                    }
                    return [
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
    }
    /**
     * Create request for operation 'getConnectors'
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getConnectorsRequest($client_id = null, $platform = null)
    {
        $resourcePath = '/v3/connectors/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation getIntegrationJs
     *
     * Get embeddable connect javascript
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getIntegrationJs($client_id = null, $platform = null)
    {
        $this->getIntegrationJsWithHttpInfo($client_id, $platform);
    }
    /**
     * Operation getIntegrationJsWithHttpInfo
     *
     * Get embeddable connect javascript
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIntegrationJsWithHttpInfo($client_id = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getIntegrationJsRequest($client_id, $platform);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation getIntegrationJsAsync
     *
     * Get embeddable connect javascript
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIntegrationJsAsync($client_id = null, $platform = null)
    {
        return $this->getIntegrationJsAsyncWithHttpInfo($client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation getIntegrationJsAsyncWithHttpInfo
     *
     * Get embeddable connect javascript
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIntegrationJsAsyncWithHttpInfo($client_id = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getIntegrationJsRequest($client_id, $platform);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
    }
    /**
     * Create request for operation 'getIntegrationJs'
     *
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIntegrationJsRequest($client_id = null, $platform = null)
    {
        $resourcePath = '/v3/integration.js';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/x-javascript']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/x-javascript'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation getMobileConnectPage
     *
     * Mobile connect page
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getMobileConnectPage($user_id = null)
    {
        $this->getMobileConnectPageWithHttpInfo($user_id);
    }
    /**
     * Operation getMobileConnectPageWithHttpInfo
     *
     * Mobile connect page
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMobileConnectPageWithHttpInfo($user_id = null)
    {
        $returnType = '';
        $request = $this->getMobileConnectPageRequest($user_id);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation getMobileConnectPageAsync
     *
     * Mobile connect page
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMobileConnectPageAsync($user_id = null)
    {
        return $this->getMobileConnectPageAsyncWithHttpInfo($user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation getMobileConnectPageAsyncWithHttpInfo
     *
     * Mobile connect page
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMobileConnectPageAsyncWithHttpInfo($user_id = null)
    {
        $returnType = '';
        $request = $this->getMobileConnectPageRequest($user_id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
    }
    /**
     * Create request for operation 'getMobileConnectPage'
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMobileConnectPageRequest($user_id = null)
    {
        $resourcePath = '/v3/connect/mobile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/html'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation updateConnector
     *
     * Sync with data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateConnector($connector_name, $user_id = null)
    {
        $this->updateConnectorWithHttpInfo($connector_name, $user_id);
    }
    /**
     * Operation updateConnectorWithHttpInfo
     *
     * Sync with data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateConnectorWithHttpInfo($connector_name, $user_id = null)
    {
        $returnType = '';
        $request = $this->updateConnectorRequest($connector_name, $user_id);
        try {
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
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
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
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation updateConnectorAsync
     *
     * Sync with data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateConnectorAsync($connector_name, $user_id = null)
    {
        return $this->updateConnectorAsyncWithHttpInfo($connector_name, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation updateConnectorAsyncWithHttpInfo
     *
     * Sync with data source
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateConnectorAsyncWithHttpInfo($connector_name, $user_id = null)
    {
        $returnType = '';
        $request = $this->updateConnectorRequest($connector_name, $user_id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
    }
    /**
     * Create request for operation 'updateConnector'
     *
     * @param  string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateConnectorRequest($connector_name, $user_id = null)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null || (is_array($connector_name) && count($connector_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connector_name when calling updateConnector'
            );
        }
        $resourcePath = '/v3/connectors/{connectorName}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                '{' . 'connectorName' . '}',
                ObjectSerializer::toPathValue($connector_name),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
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
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
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
        }
        return $options;
    }
}
