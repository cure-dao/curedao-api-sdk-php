<?php
/**
 * StudiesApi */



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
 * StudiesApi Class Doc Comment
 *
 */
class StudiesApi
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
     * Operation createStudy
     *
     * Create a Study
     *
     * @param  \CureDAO\Client\Model\StudyCreationBody $body Details about the study you want to create (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\PostStudyCreateResponse
     */
    public function createStudy($body, $client_id = null, $platform = null)
    {
        list($response) = $this->createStudyWithHttpInfo($body, $client_id, $platform);
        return $response;
    }

    /**
     * Operation createStudyWithHttpInfo
     *
     * Create a Study
     *
     * @param  \CureDAO\Client\Model\StudyCreationBody $body Details about the study you want to create (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\PostStudyCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createStudyWithHttpInfo($body, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\PostStudyCreateResponse';
        $request = $this->createStudyRequest($body, $client_id, $platform);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\PostStudyCreateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createStudyAsync
     *
     * Create a Study
     *
     * @param  \CureDAO\Client\Model\StudyCreationBody $body Details about the study you want to create (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createStudyAsync($body, $client_id = null, $platform = null)
    {
        return $this->createStudyAsyncWithHttpInfo($body, $client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createStudyAsyncWithHttpInfo
     *
     * Create a Study
     *
     * @param  \CureDAO\Client\Model\StudyCreationBody $body Details about the study you want to create (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createStudyAsyncWithHttpInfo($body, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\PostStudyCreateResponse';
        $request = $this->createStudyRequest($body, $client_id, $platform);

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
     * Create request for operation 'createStudy'
     *
     * @param  \CureDAO\Client\Model\StudyCreationBody $body Details about the study you want to create (required)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createStudyRequest($body, $client_id = null, $platform = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createStudy'
            );
        }

        $resourcePath = '/v3/study/create';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteVote
     *
     * Delete vote
     *
     * @param  \CureDAO\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\CommonResponse
     */
    public function deleteVote($body, $user_id = null)
    {
        list($response) = $this->deleteVoteWithHttpInfo($body, $user_id);
        return $response;
    }

    /**
     * Operation deleteVoteWithHttpInfo
     *
     * Delete vote
     *
     * @param  \CureDAO\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteVoteWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Model\CommonResponse';
        $request = $this->deleteVoteRequest($body, $user_id);

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
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\CommonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteVoteAsync
     *
     * Delete vote
     *
     * @param  \CureDAO\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteVoteAsync($body, $user_id = null)
    {
        return $this->deleteVoteAsyncWithHttpInfo($body, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteVoteAsyncWithHttpInfo
     *
     * Delete vote
     *
     * @param  \CureDAO\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteVoteAsyncWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Model\CommonResponse';
        $request = $this->deleteVoteRequest($body, $user_id);

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
     * Create request for operation 'deleteVote'
     *
     * @param  \CureDAO\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteVoteRequest($body, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling deleteVote'
            );
        }

        $resourcePath = '/v3/votes/delete';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOpenStudies
     *
     * These are open studies that anyone can join
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\GetStudiesResponse
     */
    public function getOpenStudies($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        list($response) = $this->getOpenStudiesWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
        return $response;
    }

    /**
     * Operation getOpenStudiesWithHttpInfo
     *
     * These are open studies that anyone can join
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\GetStudiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOpenStudiesWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getOpenStudiesRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
                        '\CureDAO\Client\Model\GetStudiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\JsonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOpenStudiesAsync
     *
     * These are open studies that anyone can join
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpenStudiesAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        return $this->getOpenStudiesAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOpenStudiesAsyncWithHttpInfo
     *
     * These are open studies that anyone can join
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpenStudiesAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getOpenStudiesRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
     * Create request for operation 'getOpenStudies'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOpenStudiesRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {

        $resourcePath = '/v3/studies/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($include_charts !== null) {
            $queryParams['includeCharts'] = ObjectSerializer::toQueryValue($include_charts);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($recalculate !== null) {
            $queryParams['recalculate'] = ObjectSerializer::toQueryValue($recalculate);
        }
        // query params
        if ($study_id !== null) {
            $queryParams['studyId'] = ObjectSerializer::toQueryValue($study_id);
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
     * Operation getStudies
     *
     * Get Personal or Population Studies
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  int $principal_investigator_user_id These are studies created by a specific principal investigator (optional)
     * @param  bool $open These are studies that anyone can join (optional)
     * @param  bool $joined These are studies that you have joined (optional)
     * @param  bool $created These are studies that you have created (optional)
     * @param  bool $population These are studies based on the entire population of users that have shared their data (optional)
     * @param  bool $downvoted These are studies that you have down-voted (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\GetStudiesResponse
     */
    public function getStudies($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null, $sort = null, $limit = '100', $offset = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $principal_investigator_user_id = null, $open = null, $joined = null, $created = null, $population = null, $downvoted = null)
    {
        list($response) = $this->getStudiesWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population, $downvoted);
        return $response;
    }

    /**
     * Operation getStudiesWithHttpInfo
     *
     * Get Personal or Population Studies
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  int $principal_investigator_user_id These are studies created by a specific principal investigator (optional)
     * @param  bool $open These are studies that anyone can join (optional)
     * @param  bool $joined These are studies that you have joined (optional)
     * @param  bool $created These are studies that you have created (optional)
     * @param  bool $population These are studies based on the entire population of users that have shared their data (optional)
     * @param  bool $downvoted These are studies that you have down-voted (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\GetStudiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudiesWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null, $sort = null, $limit = '100', $offset = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $principal_investigator_user_id = null, $open = null, $joined = null, $created = null, $population = null, $downvoted = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population, $downvoted);

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
                        '\CureDAO\Client\Model\GetStudiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\JsonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStudiesAsync
     *
     * Get Personal or Population Studies
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  int $principal_investigator_user_id These are studies created by a specific principal investigator (optional)
     * @param  bool $open These are studies that anyone can join (optional)
     * @param  bool $joined These are studies that you have joined (optional)
     * @param  bool $created These are studies that you have created (optional)
     * @param  bool $population These are studies based on the entire population of users that have shared their data (optional)
     * @param  bool $downvoted These are studies that you have down-voted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null, $sort = null, $limit = '100', $offset = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $principal_investigator_user_id = null, $open = null, $joined = null, $created = null, $population = null, $downvoted = null)
    {
        return $this->getStudiesAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population, $downvoted)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudiesAsyncWithHttpInfo
     *
     * Get Personal or Population Studies
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  int $principal_investigator_user_id These are studies created by a specific principal investigator (optional)
     * @param  bool $open These are studies that anyone can join (optional)
     * @param  bool $joined These are studies that you have joined (optional)
     * @param  bool $created These are studies that you have created (optional)
     * @param  bool $population These are studies based on the entire population of users that have shared their data (optional)
     * @param  bool $downvoted These are studies that you have down-voted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null, $sort = null, $limit = '100', $offset = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $principal_investigator_user_id = null, $open = null, $joined = null, $created = null, $population = null, $downvoted = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population, $downvoted);

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
     * Create request for operation 'getStudies'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  int $principal_investigator_user_id These are studies created by a specific principal investigator (optional)
     * @param  bool $open These are studies that anyone can join (optional)
     * @param  bool $joined These are studies that you have joined (optional)
     * @param  bool $created These are studies that you have created (optional)
     * @param  bool $population These are studies based on the entire population of users that have shared their data (optional)
     * @param  bool $downvoted These are studies that you have down-voted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudiesRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null, $sort = null, $limit = '100', $offset = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $principal_investigator_user_id = null, $open = null, $joined = null, $created = null, $population = null, $downvoted = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling StudiesApi.getStudies, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/studies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($include_charts !== null) {
            $queryParams['includeCharts'] = ObjectSerializer::toQueryValue($include_charts);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($recalculate !== null) {
            $queryParams['recalculate'] = ObjectSerializer::toQueryValue($recalculate);
        }
        // query params
        if ($study_id !== null) {
            $queryParams['studyId'] = ObjectSerializer::toQueryValue($study_id);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = ObjectSerializer::toQueryValue($correlation_coefficient);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = ObjectSerializer::toQueryValue($updated_at);
        }
        // query params
        if ($outcomes_of_interest !== null) {
            $queryParams['outcomesOfInterest'] = ObjectSerializer::toQueryValue($outcomes_of_interest);
        }
        // query params
        if ($principal_investigator_user_id !== null) {
            $queryParams['principalInvestigatorUserId'] = ObjectSerializer::toQueryValue($principal_investigator_user_id);
        }
        // query params
        if ($open !== null) {
            $queryParams['open'] = ObjectSerializer::toQueryValue($open);
        }
        // query params
        if ($joined !== null) {
            $queryParams['joined'] = ObjectSerializer::toQueryValue($joined);
        }
        // query params
        if ($created !== null) {
            $queryParams['created'] = ObjectSerializer::toQueryValue($created);
        }
        // query params
        if ($population !== null) {
            $queryParams['population'] = ObjectSerializer::toQueryValue($population);
        }
        // query params
        if ($downvoted !== null) {
            $queryParams['downvoted'] = ObjectSerializer::toQueryValue($downvoted);
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
     * Operation getStudiesCreated
     *
     * Get studies you have created
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\GetStudiesResponse
     */
    public function getStudiesCreated($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $updated_at = null, $client_id = null, $platform = null)
    {
        list($response) = $this->getStudiesCreatedWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform);
        return $response;
    }

    /**
     * Operation getStudiesCreatedWithHttpInfo
     *
     * Get studies you have created
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\GetStudiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudiesCreatedWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $updated_at = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesCreatedRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform);

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
                        '\CureDAO\Client\Model\GetStudiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStudiesCreatedAsync
     *
     * Get studies you have created
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesCreatedAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $updated_at = null, $client_id = null, $platform = null)
    {
        return $this->getStudiesCreatedAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudiesCreatedAsyncWithHttpInfo
     *
     * Get studies you have created
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesCreatedAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $updated_at = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesCreatedRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform);

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
     * Create request for operation 'getStudiesCreated'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudiesCreatedRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $updated_at = null, $client_id = null, $platform = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling StudiesApi.getStudiesCreated, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/studies/created';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = ObjectSerializer::toQueryValue($updated_at);
        }
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
     * Operation getStudiesJoined
     *
     * Studies You Have Joined
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\GetStudiesResponse
     */
    public function getStudiesJoined($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $platform = null)
    {
        list($response) = $this->getStudiesJoinedWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform);
        return $response;
    }

    /**
     * Operation getStudiesJoinedWithHttpInfo
     *
     * Studies You Have Joined
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\GetStudiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudiesJoinedWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesJoinedRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform);

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
                        '\CureDAO\Client\Model\GetStudiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStudiesJoinedAsync
     *
     * Studies You Have Joined
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesJoinedAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $platform = null)
    {
        return $this->getStudiesJoinedAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudiesJoinedAsyncWithHttpInfo
     *
     * Studies You Have Joined
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudiesJoinedAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\GetStudiesResponse';
        $request = $this->getStudiesJoinedRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform);

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
     * Create request for operation 'getStudiesJoined'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudiesJoinedRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $platform = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling StudiesApi.getStudiesJoined, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/studies/joined';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = ObjectSerializer::toQueryValue($correlation_coefficient);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = ObjectSerializer::toQueryValue($updated_at);
        }
        // query params
        if ($outcomes_of_interest !== null) {
            $queryParams['outcomesOfInterest'] = ObjectSerializer::toQueryValue($outcomes_of_interest);
        }
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
     * Operation getStudy
     *
     * Get Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\Study
     */
    public function getStudy($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        list($response) = $this->getStudyWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
        return $response;
    }

    /**
     * Operation getStudyWithHttpInfo
     *
     * Get Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\Study, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudyWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\Study';
        $request = $this->getStudyRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
                        '\CureDAO\Client\Model\Study',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\JsonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStudyAsync
     *
     * Get Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudyAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        return $this->getStudyAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudyAsyncWithHttpInfo
     *
     * Get Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudyAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\Study';
        $request = $this->getStudyRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
     * Create request for operation 'getStudy'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudyRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {

        $resourcePath = '/v4/study';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($include_charts !== null) {
            $queryParams['includeCharts'] = ObjectSerializer::toQueryValue($include_charts);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($recalculate !== null) {
            $queryParams['recalculate'] = ObjectSerializer::toQueryValue($recalculate);
        }
        // query params
        if ($study_id !== null) {
            $queryParams['studyId'] = ObjectSerializer::toQueryValue($study_id);
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
     * Operation joinStudy
     *
     * Join a Study
     *
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\StudyJoinResponse
     */
    public function joinStudy($study_id = null, $cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $platform = null)
    {
        list($response) = $this->joinStudyWithHttpInfo($study_id, $cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $platform);
        return $response;
    }

    /**
     * Operation joinStudyWithHttpInfo
     *
     * Join a Study
     *
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\StudyJoinResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function joinStudyWithHttpInfo($study_id = null, $cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\StudyJoinResponse';
        $request = $this->joinStudyRequest($study_id, $cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $platform);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\StudyJoinResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation joinStudyAsync
     *
     * Join a Study
     *
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinStudyAsync($study_id = null, $cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $platform = null)
    {
        return $this->joinStudyAsyncWithHttpInfo($study_id, $cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation joinStudyAsyncWithHttpInfo
     *
     * Join a Study
     *
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinStudyAsyncWithHttpInfo($study_id = null, $cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Model\StudyJoinResponse';
        $request = $this->joinStudyRequest($study_id, $cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $platform);

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
     * Create request for operation 'joinStudy'
     *
     * @param  string $study_id Client id for the study you want (optional)
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function joinStudyRequest($study_id = null, $cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $platform = null)
    {

        $resourcePath = '/v3/study/join';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($study_id !== null) {
            $queryParams['studyId'] = ObjectSerializer::toQueryValue($study_id);
        }
        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postVote
     *
     * Post or update vote
     *
     * @param  \CureDAO\Client\Model\Vote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\CommonResponse
     */
    public function postVote($body, $user_id = null)
    {
        list($response) = $this->postVoteWithHttpInfo($body, $user_id);
        return $response;
    }

    /**
     * Operation postVoteWithHttpInfo
     *
     * Post or update vote
     *
     * @param  \CureDAO\Client\Model\Vote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postVoteWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Model\CommonResponse';
        $request = $this->postVoteRequest($body, $user_id);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\CommonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postVoteAsync
     *
     * Post or update vote
     *
     * @param  \CureDAO\Client\Model\Vote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postVoteAsync($body, $user_id = null)
    {
        return $this->postVoteAsyncWithHttpInfo($body, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postVoteAsyncWithHttpInfo
     *
     * Post or update vote
     *
     * @param  \CureDAO\Client\Model\Vote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postVoteAsyncWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Model\CommonResponse';
        $request = $this->postVoteRequest($body, $user_id);

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
     * Create request for operation 'postVote'
     *
     * @param  \CureDAO\Client\Model\Vote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postVoteRequest($body, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postVote'
            );
        }

        $resourcePath = '/v3/votes';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation publishStudy
     *
     * Publish Your Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Model\PostStudyPublishResponse
     */
    public function publishStudy($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        list($response) = $this->publishStudyWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
        return $response;
    }

    /**
     * Operation publishStudyWithHttpInfo
     *
     * Publish Your Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Model\PostStudyPublishResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function publishStudyWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\PostStudyPublishResponse';
        $request = $this->publishStudyRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CureDAO\Client\Model\PostStudyPublishResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publishStudyAsync
     *
     * Publish Your Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishStudyAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        return $this->publishStudyAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation publishStudyAsyncWithHttpInfo
     *
     * Publish Your Study
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishStudyAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {
        $returnType = '\CureDAO\Client\Model\PostStudyPublishResponse';
        $request = $this->publishStudyRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);

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
     * Create request for operation 'publishStudy'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     * @param  bool $recalculate Recalculate instead of using cached analysis (optional)
     * @param  string $study_id Client id for the study you want (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function publishStudyRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $user_id = null, $client_id = null, $include_charts = null, $platform = null, $recalculate = null, $study_id = null)
    {

        $resourcePath = '/v3/study/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($cause_variable_name !== null) {
            $queryParams['causeVariableName'] = ObjectSerializer::toQueryValue($cause_variable_name);
        }
        // query params
        if ($effect_variable_name !== null) {
            $queryParams['effectVariableName'] = ObjectSerializer::toQueryValue($effect_variable_name);
        }
        // query params
        if ($cause_variable_id !== null) {
            $queryParams['causeVariableId'] = ObjectSerializer::toQueryValue($cause_variable_id);
        }
        // query params
        if ($effect_variable_id !== null) {
            $queryParams['effectVariableId'] = ObjectSerializer::toQueryValue($effect_variable_id);
        }
        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($include_charts !== null) {
            $queryParams['includeCharts'] = ObjectSerializer::toQueryValue($include_charts);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($recalculate !== null) {
            $queryParams['recalculate'] = ObjectSerializer::toQueryValue($recalculate);
        }
        // query params
        if ($study_id !== null) {
            $queryParams['studyId'] = ObjectSerializer::toQueryValue($study_id);
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
