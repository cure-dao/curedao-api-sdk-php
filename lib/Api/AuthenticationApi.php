<?php
/**
 * AuthenticationApi */

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
 * AuthenticationApi Class 
 */
class AuthenticationApi
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
     * Operation getAccessToken
     *
     * Get a user access token
     *
     * @param  string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param  string $code Authorization code you received with the previous request. (required)
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getAccessToken($grant_type, $code, $response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $this->getAccessTokenWithHttpInfo($grant_type, $code, $response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);
    }

    /**
     * Operation getAccessTokenWithHttpInfo
     *
     * Get a user access token
     *
     * @param  string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param  string $code Authorization code you received with the previous request. (required)
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccessTokenWithHttpInfo($grant_type, $code, $response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getAccessTokenRequest($grant_type, $code, $response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);

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
     * Operation getAccessTokenAsync
     *
     * Get a user access token
     *
     * @param  string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param  string $code Authorization code you received with the previous request. (required)
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessTokenAsync($grant_type, $code, $response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        return $this->getAccessTokenAsyncWithHttpInfo($grant_type, $code, $response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccessTokenAsyncWithHttpInfo
     *
     * Get a user access token
     *
     * @param  string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param  string $code Authorization code you received with the previous request. (required)
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessTokenAsyncWithHttpInfo($grant_type, $code, $response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getAccessTokenRequest($grant_type, $code, $response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);

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
     * Create request for operation 'getAccessToken'
     *
     * @param  string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param  string $code Authorization code you received with the previous request. (required)
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAccessTokenRequest($grant_type, $code, $response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null || (is_array($grant_type) && count($grant_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling getAccessToken'
            );
        }
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAccessToken'
            );
        }
        // verify the required parameter 'response_type' is set
        if ($response_type === null || (is_array($response_type) && count($response_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $response_type when calling getAccessToken'
            );
        }
        // verify the required parameter 'scope' is set
        if ($scope === null || (is_array($scope) && count($scope) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scope when calling getAccessToken'
            );
        }

        $resourcePath = '/v3/oauth2/token';
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
        if ($client_secret !== null) {
            $queryParams['client_secret'] = ObjectSerializer::toQueryValue($client_secret);
        }
        // query params
        if ($grant_type !== null) {
            $queryParams['grant_type'] = ObjectSerializer::toQueryValue($grant_type);
        }
        // query params
        if ($code !== null) {
            $queryParams['code'] = ObjectSerializer::toQueryValue($code);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['response_type'] = ObjectSerializer::toQueryValue($response_type);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = ObjectSerializer::toQueryValue($scope);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = ObjectSerializer::toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state);
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
     * Operation getOauthAuthorizationCode
     *
     * Request Authorization Code
     *
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getOauthAuthorizationCode($response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $this->getOauthAuthorizationCodeWithHttpInfo($response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);
    }

    /**
     * Operation getOauthAuthorizationCodeWithHttpInfo
     *
     * Request Authorization Code
     *
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOauthAuthorizationCodeWithHttpInfo($response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getOauthAuthorizationCodeRequest($response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);

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
     * Operation getOauthAuthorizationCodeAsync
     *
     * Request Authorization Code
     *
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthAuthorizationCodeAsync($response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        return $this->getOauthAuthorizationCodeAsyncWithHttpInfo($response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOauthAuthorizationCodeAsyncWithHttpInfo
     *
     * Request Authorization Code
     *
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthAuthorizationCodeAsyncWithHttpInfo($response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        $returnType = '';
        $request = $this->getOauthAuthorizationCodeRequest($response_type, $scope, $client_id, $client_secret, $redirect_uri, $state, $platform);

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
     * Create request for operation 'getOauthAuthorizationCode'
     *
     * @param  string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param  string $scope Scopes include basic, readmeasurements, and writemeasurements. The &#x60;basic&#x60; scope allows you to read user info (displayName, email, etc). The &#x60;readmeasurements&#x60; scope allows one to read a user&#39;s data. The &#x60;writemeasurements&#x60; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $client_secret This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.curedao.org](https://builder.curedao.org). (optional)
     * @param  string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param  string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOauthAuthorizationCodeRequest($response_type, $scope, $client_id = null, $client_secret = null, $redirect_uri = null, $state = null, $platform = null)
    {
        // verify the required parameter 'response_type' is set
        if ($response_type === null || (is_array($response_type) && count($response_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $response_type when calling getOauthAuthorizationCode'
            );
        }
        // verify the required parameter 'scope' is set
        if ($scope === null || (is_array($scope) && count($scope) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scope when calling getOauthAuthorizationCode'
            );
        }

        $resourcePath = '/v3/oauth2/authorize';
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
        if ($client_secret !== null) {
            $queryParams['client_secret'] = ObjectSerializer::toQueryValue($client_secret);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['response_type'] = ObjectSerializer::toQueryValue($response_type);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = ObjectSerializer::toQueryValue($scope);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = ObjectSerializer::toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state);
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
     * Operation postGoogleIdToken
     *
     * Post GoogleIdToken
     *
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postGoogleIdToken()
    {
        $this->postGoogleIdTokenWithHttpInfo();
    }

    /**
     * Operation postGoogleIdTokenWithHttpInfo
     *
     * Post GoogleIdToken
     *
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postGoogleIdTokenWithHttpInfo()
    {
        $returnType = '';
        $request = $this->postGoogleIdTokenRequest();

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
     * Operation postGoogleIdTokenAsync
     *
     * Post GoogleIdToken
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postGoogleIdTokenAsync()
    {
        return $this->postGoogleIdTokenAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postGoogleIdTokenAsyncWithHttpInfo
     *
     * Post GoogleIdToken
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postGoogleIdTokenAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->postGoogleIdTokenRequest();

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
     * Create request for operation 'postGoogleIdToken'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postGoogleIdTokenRequest()
    {

        $resourcePath = '/v3/googleIdToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            'POST',
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
