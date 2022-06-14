<?php
/**
 * AnalyticsApi
 */namespace CureDAO\Client\Api;use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CureDAO\Client\ApiException;
use CureDAO\Client\Configuration;
use CureDAO\Client\HeaderSelector;
use CureDAO\Client\ObjectSerializer;/**
 * AnalyticsApi Class
 */
class AnalyticsApi
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
     * Operation getCorrelationExplanations
     *
     * Get correlation explanations
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\Correlation[]
     */
    public function getCorrelationExplanations($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null)
    {
        list($response) = $this->getCorrelationExplanationsWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name);
        return $response;
    }    /**
     * Operation getCorrelationExplanationsWithHttpInfo
     *
     * Get correlation explanations
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCorrelationExplanationsWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null)
    {
        $returnType = '\CureDAO\Client\Models\Correlation[]';
        $request = $this->getCorrelationExplanationsRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name);        try {
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
                        '\CureDAO\Client\Models\Correlation[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }    /**
     * Operation getCorrelationExplanationsAsync
     *
     * Get correlation explanations
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCorrelationExplanationsAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null)
    {
        return $this->getCorrelationExplanationsAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }    /**
     * Operation getCorrelationExplanationsAsyncWithHttpInfo
     *
     * Get correlation explanations
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCorrelationExplanationsAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null)
    {
        $returnType = '\CureDAO\Client\Models\Correlation[]';
        $request = $this->getCorrelationExplanationsRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name);        return $this->client
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
     * Create request for operation 'getCorrelationExplanations'
     *
     * @param  string $cause_variable_name Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $effect_variable_name Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  int $cause_variable_id Variable id of the hypothetical predictor variable.  Ex: 1398 (optional)
     * @param  int $effect_variable_id Variable id of the outcome variable of interest.  Ex: 1398 (optional)
     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCorrelationExplanationsRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null)
    {        $resourcePath = '/v3/correlations/explanations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;        // query params
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
                $httpBody = new MultipartStream($multipartContents);            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }        $defaultHeaders = [];
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
     * Operation getCorrelations
     *
     * Get correlations
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
     * @param  bool $common_only Return only public, anonymized and aggregated population data instead of user-specific variables (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\GetCorrelationsResponse
     */
    public function getCorrelations($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $common_only = null, $platform = null)
    {
        list($response) = $this->getCorrelationsWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform);
        return $response;
    }    /**
     * Operation getCorrelationsWithHttpInfo
     *
     * Get correlations
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
     * @param  bool $common_only Return only public, anonymized and aggregated population data instead of user-specific variables (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\GetCorrelationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCorrelationsWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $common_only = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\GetCorrelationsResponse';
        $request = $this->getCorrelationsRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform);        try {
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
                        '\CureDAO\Client\Models\GetCorrelationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }    /**
     * Operation getCorrelationsAsync
     *
     * Get correlations
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
     * @param  bool $common_only Return only public, anonymized and aggregated population data instead of user-specific variables (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCorrelationsAsync($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $common_only = null, $platform = null)
    {
        return $this->getCorrelationsAsyncWithHttpInfo($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }    /**
     * Operation getCorrelationsAsyncWithHttpInfo
     *
     * Get correlations
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
     * @param  bool $common_only Return only public, anonymized and aggregated population data instead of user-specific variables (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCorrelationsAsyncWithHttpInfo($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $common_only = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\GetCorrelationsResponse';
        $request = $this->getCorrelationsRequest($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only, $platform);        return $this->client
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
     * Create request for operation 'getCorrelations'
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
     * @param  bool $common_only Return only public, anonymized and aggregated population data instead of user-specific variables (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCorrelationsRequest($cause_variable_name = null, $effect_variable_name = null, $cause_variable_id = null, $effect_variable_id = null, $predictor_variable_name = null, $outcome_variable_name = null, $sort = null, $limit = '100', $offset = null, $user_id = null, $correlation_coefficient = null, $updated_at = null, $outcomes_of_interest = null, $client_id = null, $common_only = null, $platform = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling AnalyticsApi.getCorrelations, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/correlations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;        // query params
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
        if ($common_only !== null) {
            $queryParams['commonOnly'] = ObjectSerializer::toQueryValue($common_only);
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
                $httpBody = new MultipartStream($multipartContents);            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }        $defaultHeaders = [];
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
