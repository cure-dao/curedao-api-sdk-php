<?php
/**
 * VariablesApi */

namespace CureDAO\Client\Api;

use CureDAO\Client\Models\VariableCategory;
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
use Illuminate\Support\Collection;

/**
 * VariablesApi Class 
 */
class VariablesApi
{
    /**
     * @var Collection
     */
    private static $variableCategories;
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
     * @param ClientInterface|null $client
     * @param Configuration|null $config
     * @param HeaderSelector|null $selector
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
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation deleteUserTag
     *
     * Delete user tag or ingredient
     *
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     *
     * @return \CureDAO\Client\Models\CommonResponse
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUserTag(int $tagged_variable_id = null, int $tag_variable_id = null): \CureDAO\Client\Models\CommonResponse
    {
        [$response] = $this->deleteUserTagWithHttpInfo($tagged_variable_id, $tag_variable_id);
        return $response;
    }

    /**
     * Operation deleteUserTagWithHttpInfo
     *
     * Delete user tag or ingredient
     *
     * @param null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     *
     * @return array of \CureDAO\Client\Models\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUserTagWithHttpInfo($tagged_variable_id = null, $tag_variable_id = null): array
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->deleteUserTagRequest($tagged_variable_id, $tag_variable_id);

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
                $content = json_decode($content);
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            if ($e->getCode() == 204) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\CureDAO\Client\Models\CommonResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }
            throw $e;
        }
    }

    /**
     * Operation deleteUserTagAsync
     *
     * Delete user tag or ingredient
     *
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function deleteUserTagAsync(int $tagged_variable_id = null, int $tag_variable_id = null): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->deleteUserTagAsyncWithHttpInfo($tagged_variable_id, $tag_variable_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUserTagAsyncWithHttpInfo
     *
     * Delete user tag or ingredient
     *
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function deleteUserTagAsyncWithHttpInfo(int $tagged_variable_id = null, int $tag_variable_id = null): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->deleteUserTagRequest($tagged_variable_id, $tag_variable_id);

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
     * Create request for operation 'deleteUserTag'
     *
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function deleteUserTagRequest(int $tagged_variable_id = null, int $tag_variable_id = null): Request
    {

        $resourcePath = '/v3/userTags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tagged_variable_id !== null) {
            $queryParams['taggedVariableId'] = ObjectSerializer::toQueryValue($tagged_variable_id);
        }
        // query params
        if ($tag_variable_id !== null) {
            $queryParams['tagVariableId'] = ObjectSerializer::toQueryValue($tag_variable_id);
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteUserVariable
     *
     * Delete All Measurements For Variable
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUserVariable(\CureDAO\Client\Models\UserVariableDelete $variable_id)
    {
        $this->deleteUserVariableWithHttpInfo($variable_id);
    }

    /**
     * Operation deleteUserVariableWithHttpInfo
     *
     * Delete All Measurements For Variable
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUserVariableWithHttpInfo(\CureDAO\Client\Models\UserVariableDelete $variable_id): array
    {
        $returnType = '';
        $request = $this->deleteUserVariableRequest($variable_id);

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
    }

    /**
     * Operation deleteUserVariableAsync
     *
     * Delete All Measurements For Variable
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function deleteUserVariableAsync(\CureDAO\Client\Models\UserVariableDelete $variable_id): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->deleteUserVariableAsyncWithHttpInfo($variable_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUserVariableAsyncWithHttpInfo
     *
     * Delete All Measurements For Variable
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function deleteUserVariableAsyncWithHttpInfo(\CureDAO\Client\Models\UserVariableDelete $variable_id): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '';
        $request = $this->deleteUserVariableRequest($variable_id);

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
     * Create request for operation 'deleteUserVariable'
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function deleteUserVariableRequest(\CureDAO\Client\Models\UserVariableDelete $variable_id): Request
    {
        // verify the required parameter 'variable_id' is set

        $resourcePath = '/v3/userVariables/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // body params
        $_tempBody = null;
        $_tempBody = $variable_id;

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
     * Operation getVariableCategories
     *
     * Variable categories
     *
     *
     * @return \CureDAO\Client\Models\VariableCategory[]
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVariableCategories(): array
    {
        [$response] = $this->getVariableCategoriesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getVariableCategoriesWithHttpInfo
     *
     * Variable categories
     *
     *
     * @return array of \CureDAO\Client\Models\VariableCategory[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVariableCategoriesWithHttpInfo(): array
    {
        $returnType = '\CureDAO\Client\Models\VariableCategory[]';
        $request = $this->getVariableCategoriesRequest();

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
                $content = json_decode($content);
            }

            return [
                ObjectSerializer::deserialize($content->data, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            if ($e->getCode() == 200) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\CureDAO\Client\Models\VariableCategory[]',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }
            throw $e;
        }
    }

    /**
     * Operation getVariableCategoriesAsync
     *
     * Variable categories
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariableCategoriesAsync(): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->getVariableCategoriesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVariableCategoriesAsyncWithHttpInfo
     *
     * Variable categories
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariableCategoriesAsyncWithHttpInfo(): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\CureDAO\Client\Models\VariableCategory[]';
        $request = $this->getVariableCategoriesRequest();

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
     * Create request for operation 'getVariableCategories'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVariableCategoriesRequest(): Request
    {

        $resourcePath = '/v6/variable_categories';
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
     * Operation getVariables
     *
     * Get variables along with related user-specific analysis settings and statistics
     *
     * @param bool|null $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param string|null $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param float|null $user_id User&#39;s id (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param string|null $name Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% (optional)
     * @param string|null $variable_name Name of the variable you want measurements for (optional)
     * @param string|null $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param string|null $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param int|null $id Common variable id (optional)
     * @param string|null $last_source_name Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but
     * only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int|null $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string|null $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param string|null $upc UPC or other barcode scan result (optional)
     * @param string|null $effect_or_cause Provided variable is the effect or cause (optional)
     * @param string|null $public_effect_or_cause Ex: (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $join_variable_id Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. (optional)
     * @param int|null $parent_user_tag_variable_id Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $child_user_tag_variable_id Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $ingredient_user_tag_variable_id Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param int|null $ingredient_of_user_tag_variable_id Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param bool|null $common_only Return only public and aggregated common variable data instead of user-specific variables (optional)
     * @param bool|null $user_only Return only user-specific variables and data, excluding common aggregated variable data (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     * @param bool|null $include_tags Return parent, child, duplicate, and ingredient variables (optional)
     * @param bool|null $recalculate Recalculate instead of using cached analysis (optional)
     * @param int|null $variable_id Ex: 13 (optional)
     * @param bool|null $concise Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. (optional)
     * @param bool|null $refresh Regenerate charts instead of getting from the cache (optional)
     *
     * @return \CureDAO\Client\Models\Variable[]
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVariables(bool $include_charts = null, string $number_of_raw_measurements = null, float $user_id = null, string $variable_category_name = null, string $name = null, string $variable_name = null, string $updated_at = null, string $source_name = null, string $earliest_measurement_time = null, string $latest_measurement_time = null, int $id = null, string $last_source_name = null, string $limit = '100', int $offset = null, string $sort = null, bool $include_public = null, bool $manual_tracking = null, string $client_id = null, string $upc = null, string $effect_or_cause = null, string $public_effect_or_cause = null, bool $exact_match = null, int $variable_category_id = null, bool $include_private = null, string $search_phrase = null, string $synonyms = null, int $tagged_variable_id = null, int $tag_variable_id = null, int $join_variable_id = null, int $parent_user_tag_variable_id = null, int $child_user_tag_variable_id = null, int $ingredient_user_tag_variable_id = null, int $ingredient_of_user_tag_variable_id = null, bool $common_only = null, bool $user_only = null, string $platform = null, bool $include_tags = null, bool $recalculate = null, int $variable_id = null, bool $concise = null, bool $refresh = null): array
    {
        [$response] = $this->getVariablesWithHttpInfo($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh);
        return $response;
    }

    /**
     * Operation getVariablesWithHttpInfo
     *
     * Get variables along with related user-specific analysis settings and statistics
     *
     * @param null $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param null $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param null $user_id User&#39;s id (optional)
     * @param null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param null $name Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% (optional)
     * @param null $variable_name Name of the variable you want measurements for (optional)
     * @param null $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param null $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param null $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param null $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param null $id Common variable id (optional)
     * @param null $last_source_name Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param null $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param null $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param null $include_public Include variables the user has no measurements for (optional)
     * @param null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param null $upc UPC or other barcode scan result (optional)
     * @param null $effect_or_cause Provided variable is the effect or cause (optional)
     * @param null $public_effect_or_cause Ex: (optional)
     * @param null $exact_match Require exact match (optional)
     * @param null $variable_category_id Ex: 13 (optional)
     * @param null $include_private Include user-specific variables in results (optional)
     * @param null $search_phrase Ex: %Body Fat% (optional)
     * @param null $synonyms Ex: McDonalds hotcake (optional)
     * @param null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param null $join_variable_id Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. (optional)
     * @param null $parent_user_tag_variable_id Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param null $child_user_tag_variable_id Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param null $ingredient_user_tag_variable_id Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param null $ingredient_of_user_tag_variable_id Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param null $common_only Return only public and aggregated common variable data instead of user-specific variables (optional)
     * @param null $user_only Return only user-specific variables and data, excluding common aggregated variable data (optional)
     * @param null $platform Ex: chrome, android, ios, web (optional)
     * @param null $include_tags Return parent, child, duplicate, and ingredient variables (optional)
     * @param null $recalculate Recalculate instead of using cached analysis (optional)
     * @param null $variable_id Ex: 13 (optional)
     * @param null $concise Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. (optional)
     * @param null $refresh Regenerate charts instead of getting from the cache (optional)
     *
     * @return array of \CureDAO\Client\Models\Variable[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVariablesWithHttpInfo($include_charts = null, $number_of_raw_measurements = null, $user_id = null, $variable_category_name = null, $name = null, $variable_name = null, $updated_at = null, $source_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $id = null, $last_source_name = null, string $limit = '100', $offset = null, $sort = null, $include_public = null, $manual_tracking = null, $client_id = null, $upc = null, $effect_or_cause = null, $public_effect_or_cause = null, $exact_match = null, $variable_category_id = null, $include_private = null, $search_phrase = null, $synonyms = null, $tagged_variable_id = null, $tag_variable_id = null, $join_variable_id = null, $parent_user_tag_variable_id = null, $child_user_tag_variable_id = null, $ingredient_user_tag_variable_id = null, $ingredient_of_user_tag_variable_id = null, $common_only = null, $user_only = null, $platform = null, $include_tags = null, $recalculate = null, $variable_id = null, $concise = null, $refresh = null): array
    {
        $returnType = '\CureDAO\Client\Models\Variable[]';
        $request = $this->getVariablesRequest($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh);

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
                $content = json_decode($content);
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            if ($e->getCode() == 200) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\CureDAO\Client\Models\Variable[]',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }
            throw $e;
        }
    }

    /**
     * Operation getVariablesAsync
     *
     * Get variables along with related user-specific analysis settings and statistics
     *
     * @param bool|null $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param string|null $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param float|null $user_id User&#39;s id (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param string|null $name Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% (optional)
     * @param string|null $variable_name Name of the variable you want measurements for (optional)
     * @param string|null $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param string|null $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param int|null $id Common variable id (optional)
     * @param string|null $last_source_name Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but
     * only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int|null $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string|null $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param string|null $upc UPC or other barcode scan result (optional)
     * @param string|null $effect_or_cause Provided variable is the effect or cause (optional)
     * @param string|null $public_effect_or_cause Ex: (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $join_variable_id Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. (optional)
     * @param int|null $parent_user_tag_variable_id Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $child_user_tag_variable_id Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $ingredient_user_tag_variable_id Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param int|null $ingredient_of_user_tag_variable_id Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param bool|null $common_only Return only public and aggregated common variable data instead of user-specific variables (optional)
     * @param bool|null $user_only Return only user-specific variables and data, excluding common aggregated variable data (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     * @param bool|null $include_tags Return parent, child, duplicate, and ingredient variables (optional)
     * @param bool|null $recalculate Recalculate instead of using cached analysis (optional)
     * @param int|null $variable_id Ex: 13 (optional)
     * @param bool|null $concise Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. (optional)
     * @param bool|null $refresh Regenerate charts instead of getting from the cache (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function getVariablesAsync(bool $include_charts = null, string $number_of_raw_measurements = null, float $user_id = null, string $variable_category_name = null, string $name = null, string $variable_name = null, string $updated_at = null, string $source_name = null, string $earliest_measurement_time = null, string $latest_measurement_time = null, int $id = null, string $last_source_name = null, $limit = '100', int $offset = null, string $sort = null, bool $include_public = null, bool $manual_tracking = null, string $client_id = null, string $upc = null, string $effect_or_cause = null, string $public_effect_or_cause = null, bool $exact_match = null, int $variable_category_id = null, bool $include_private = null, string $search_phrase = null, string $synonyms = null, int $tagged_variable_id = null, int $tag_variable_id = null, int $join_variable_id = null, int $parent_user_tag_variable_id = null, int $child_user_tag_variable_id = null, int $ingredient_user_tag_variable_id = null, int $ingredient_of_user_tag_variable_id = null, bool $common_only = null, bool $user_only = null, string $platform = null, bool $include_tags = null, bool $recalculate = null, int $variable_id = null, bool $concise = null, bool $refresh = null): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->getVariablesAsyncWithHttpInfo($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVariablesAsyncWithHttpInfo
     *
     * Get variables along with related user-specific analysis settings and statistics
     *
     * @param bool|null $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param string|null $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param float|null $user_id User&#39;s id (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param string|null $name Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% (optional)
     * @param string|null $variable_name Name of the variable you want measurements for (optional)
     * @param string|null $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param string|null $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param int|null $id Common variable id (optional)
     * @param string|null $last_source_name Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int|null $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string|null $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param string|null $upc UPC or other barcode scan result (optional)
     * @param string|null $effect_or_cause Provided variable is the effect or cause (optional)
     * @param string|null $public_effect_or_cause Ex: (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $join_variable_id Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. (optional)
     * @param int|null $parent_user_tag_variable_id Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $child_user_tag_variable_id Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $ingredient_user_tag_variable_id Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param int|null $ingredient_of_user_tag_variable_id Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param bool|null $common_only Return only public and aggregated common variable data instead of user-specific variables (optional)
     * @param bool|null $user_only Return only user-specific variables and data, excluding common aggregated variable data (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     * @param bool|null $include_tags Return parent, child, duplicate, and ingredient variables (optional)
     * @param bool|null $recalculate Recalculate instead of using cached analysis (optional)
     * @param int|null $variable_id Ex: 13 (optional)
     * @param bool|null $concise Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. (optional)
     * @param bool|null $refresh Regenerate charts instead of getting from the cache (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function getVariablesAsyncWithHttpInfo(bool $include_charts = null, string $number_of_raw_measurements = null, float $user_id = null, string $variable_category_name = null, string $name = null, string $variable_name = null, string $updated_at = null, string $source_name = null, string $earliest_measurement_time = null, string $latest_measurement_time = null, int $id = null, string $last_source_name = null, $limit = '100', int $offset = null, string $sort = null, bool $include_public = null, bool $manual_tracking = null, string $client_id = null, string $upc = null, string $effect_or_cause = null, string $public_effect_or_cause = null, bool $exact_match = null, int $variable_category_id = null, bool $include_private = null, string $search_phrase = null, string $synonyms = null, int $tagged_variable_id = null, int $tag_variable_id = null, int $join_variable_id = null, int $parent_user_tag_variable_id = null, int $child_user_tag_variable_id = null, int $ingredient_user_tag_variable_id = null, int $ingredient_of_user_tag_variable_id = null, bool $common_only = null, bool $user_only = null, string $platform = null, bool $include_tags = null, bool $recalculate = null, int $variable_id = null, bool $concise = null, bool $refresh = null): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\CureDAO\Client\Models\Variable[]';
        $request = $this->getVariablesRequest($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $variable_name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $ingredient_user_tag_variable_id, $ingredient_of_user_tag_variable_id, $common_only, $user_only, $platform, $include_tags, $recalculate, $variable_id, $concise, $refresh);

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
     * Create request for operation 'getVariables'
     *
     * @param bool|null $include_charts Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. (optional)
     * @param string|null $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param float|null $user_id User&#39;s id (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param string|null $name Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% (optional)
     * @param string|null $variable_name Name of the variable you want measurements for (optional)
     * @param string|null $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param string|null $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param string|null $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param int|null $id Common variable id (optional)
     * @param string|null $last_source_name Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int|null $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string|null $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param string|null $upc UPC or other barcode scan result (optional)
     * @param string|null $effect_or_cause Provided variable is the effect or cause (optional)
     * @param string|null $public_effect_or_cause Ex: (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param int|null $tagged_variable_id Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $tag_variable_id Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop).  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). (optional)
     * @param int|null $join_variable_id Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId. (optional)
     * @param int|null $parent_user_tag_variable_id Id of the parent category variable (i.e. Fruit) you would like to get eligible child sub-type variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple.  When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $child_user_tag_variable_id Id of the child sub-type variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child sub-type of the parent category Fruit could be Apple. When Apple is tagged with the parent category Fruit, Apple measurements will be included when Fruit is analyzed. (optional)
     * @param int|null $ingredient_user_tag_variable_id Id of the ingredient variable (i.e. Fructose)  you would like to get eligible ingredientOf variables (i.e. Apple) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param int|null $ingredient_of_user_tag_variable_id Id of the ingredientOf variable (i.e. Apple) you would like to get eligible ingredient variables (i.e. Fructose) for.  IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredientOf of variable Fruit could be Apple. (optional)
     * @param bool|null $common_only Return only public and aggregated common variable data instead of user-specific variables (optional)
     * @param bool|null $user_only Return only user-specific variables and data, excluding common aggregated variable data (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     * @param bool|null $include_tags Return parent, child, duplicate, and ingredient variables (optional)
     * @param bool|null $recalculate Recalculate instead of using cached analysis (optional)
     * @param int|null $variable_id Ex: 13 (optional)
     * @param bool|null $concise Only return field required for variable auto-complete searches.  The smaller size allows for storing more variable results locally reducing API requests. (optional)
     * @param bool|null $refresh Regenerate charts instead of getting from the cache (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function getVariablesRequest(bool $include_charts = null, string $number_of_raw_measurements = null, float $user_id = null, string $variable_category_name = null, string $name = null, string $variable_name = null, string $updated_at = null, string $source_name = null, string $earliest_measurement_time = null, string $latest_measurement_time = null, int $id = null, string $last_source_name = null, $limit = '100', int $offset = null, string $sort = null, bool $include_public = null, bool $manual_tracking = null, string $client_id = null, string $upc = null, string $effect_or_cause = null, string $public_effect_or_cause = null, bool $exact_match = null, int $variable_category_id = null, bool $include_private = null, string $search_phrase = null, string $synonyms = null, int $tagged_variable_id = null, int $tag_variable_id = null, int $join_variable_id = null, int $parent_user_tag_variable_id = null, int $child_user_tag_variable_id = null, int $ingredient_user_tag_variable_id = null, int $ingredient_of_user_tag_variable_id = null, bool $common_only = null, bool $user_only = null, string $platform = null, bool $include_tags = null, bool $recalculate = null, int $variable_id = null, bool $concise = null, bool $refresh = null): Request
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling VariablesApi.getVariables, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_charts !== null) {
            $queryParams['includeCharts'] = ObjectSerializer::toQueryValue($include_charts);
        }
        // query params
        if ($number_of_raw_measurements !== null) {
            $queryParams['numberOfRawMeasurements'] = ObjectSerializer::toQueryValue($number_of_raw_measurements);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = ObjectSerializer::toQueryValue($variable_category_name);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($variable_name !== null) {
            $queryParams['variableName'] = ObjectSerializer::toQueryValue($variable_name);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = ObjectSerializer::toQueryValue($updated_at);
        }
        // query params
        if ($source_name !== null) {
            $queryParams['sourceName'] = ObjectSerializer::toQueryValue($source_name);
        }
        // query params
        if ($earliest_measurement_time !== null) {
            $queryParams['earliestMeasurementTime'] = ObjectSerializer::toQueryValue($earliest_measurement_time);
        }
        // query params
        if ($latest_measurement_time !== null) {
            $queryParams['latestMeasurementTime'] = ObjectSerializer::toQueryValue($latest_measurement_time);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($last_source_name !== null) {
            $queryParams['lastSourceName'] = ObjectSerializer::toQueryValue($last_source_name);
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
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($include_public !== null) {
            $queryParams['includePublic'] = ObjectSerializer::toQueryValue($include_public);
        }
        // query params
        if ($manual_tracking !== null) {
            $queryParams['manualTracking'] = ObjectSerializer::toQueryValue($manual_tracking);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($upc !== null) {
            $queryParams['upc'] = ObjectSerializer::toQueryValue($upc);
        }
        // query params
        if ($effect_or_cause !== null) {
            $queryParams['effectOrCause'] = ObjectSerializer::toQueryValue($effect_or_cause);
        }
        // query params
        if ($public_effect_or_cause !== null) {
            $queryParams['publicEffectOrCause'] = ObjectSerializer::toQueryValue($public_effect_or_cause);
        }
        // query params
        if ($exact_match !== null) {
            $queryParams['exactMatch'] = ObjectSerializer::toQueryValue($exact_match);
        }
        // query params
        if ($variable_category_id !== null) {
            $queryParams['variableCategoryId'] = ObjectSerializer::toQueryValue($variable_category_id);
        }
        // query params
        if ($include_private !== null) {
            $queryParams['includePrivate'] = ObjectSerializer::toQueryValue($include_private);
        }
        // query params
        if ($search_phrase !== null) {
            $queryParams['searchPhrase'] = ObjectSerializer::toQueryValue($search_phrase);
        }
        // query params
        if ($synonyms !== null) {
            $queryParams['synonyms'] = ObjectSerializer::toQueryValue($synonyms);
        }
        // query params
        if ($tagged_variable_id !== null) {
            $queryParams['taggedVariableId'] = ObjectSerializer::toQueryValue($tagged_variable_id);
        }
        // query params
        if ($tag_variable_id !== null) {
            $queryParams['tagVariableId'] = ObjectSerializer::toQueryValue($tag_variable_id);
        }
        // query params
        if ($join_variable_id !== null) {
            $queryParams['joinVariableId'] = ObjectSerializer::toQueryValue($join_variable_id);
        }
        // query params
        if ($parent_user_tag_variable_id !== null) {
            $queryParams['parentUserTagVariableId'] = ObjectSerializer::toQueryValue($parent_user_tag_variable_id);
        }
        // query params
        if ($child_user_tag_variable_id !== null) {
            $queryParams['childUserTagVariableId'] = ObjectSerializer::toQueryValue($child_user_tag_variable_id);
        }
        // query params
        if ($ingredient_user_tag_variable_id !== null) {
            $queryParams['ingredientUserTagVariableId'] = ObjectSerializer::toQueryValue($ingredient_user_tag_variable_id);
        }
        // query params
        if ($ingredient_of_user_tag_variable_id !== null) {
            $queryParams['ingredientOfUserTagVariableId'] = ObjectSerializer::toQueryValue($ingredient_of_user_tag_variable_id);
        }
        // query params
        if ($common_only !== null) {
            $queryParams['commonOnly'] = ObjectSerializer::toQueryValue($common_only);
        }
        // query params
        if ($user_only !== null) {
            $queryParams['userOnly'] = ObjectSerializer::toQueryValue($user_only);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($include_tags !== null) {
            $queryParams['includeTags'] = ObjectSerializer::toQueryValue($include_tags);
        }
        // query params
        if ($recalculate !== null) {
            $queryParams['recalculate'] = ObjectSerializer::toQueryValue($recalculate);
        }
        // query params
        if ($variable_id !== null) {
            $queryParams['variableId'] = ObjectSerializer::toQueryValue($variable_id);
        }
        // query params
        if ($concise !== null) {
            $queryParams['concise'] = ObjectSerializer::toQueryValue($concise);
        }
        // query params
        if ($refresh !== null) {
            $queryParams['refresh'] = ObjectSerializer::toQueryValue($refresh);
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
     * Operation postUserTags
     *
     * Post or update user tags or ingredients
     *
     * @param \CureDAO\Client\Models\UserTag $body Contains the new user tag data (required)
     * @param float|null $user_id User&#39;s id (optional)
     *
     * @return \CureDAO\Client\Models\CommonResponse
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postUserTags(\CureDAO\Client\Models\UserTag $body, float $user_id = null): \CureDAO\Client\Models\CommonResponse
    {
        [$response] = $this->postUserTagsWithHttpInfo($body, $user_id);
        return $response;
    }

    /**
     * Operation postUserTagsWithHttpInfo
     *
     * Post or update user tags or ingredients
     *
     * @param \CureDAO\Client\Models\UserTag $body Contains the new user tag data (required)
     * @param null $user_id User&#39;s id (optional)
     *
     * @return array of \CureDAO\Client\Models\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postUserTagsWithHttpInfo(\CureDAO\Client\Models\UserTag $body, $user_id = null): array
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->postUserTagsRequest($body, $user_id);

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
                $content = json_decode($content);
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            if ($e->getCode() == 201) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\CureDAO\Client\Models\CommonResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }
            throw $e;
        }
    }

    /**
     * Operation postUserTagsAsync
     *
     * Post or update user tags or ingredients
     *
     * @param \CureDAO\Client\Models\UserTag $body Contains the new user tag data (required)
     * @param float|null $user_id User&#39;s id (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function postUserTagsAsync(\CureDAO\Client\Models\UserTag $body, float $user_id = null): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->postUserTagsAsyncWithHttpInfo($body, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postUserTagsAsyncWithHttpInfo
     *
     * Post or update user tags or ingredients
     *
     * @param \CureDAO\Client\Models\UserTag $body Contains the new user tag data (required)
     * @param float|null $user_id User&#39;s id (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function postUserTagsAsyncWithHttpInfo(\CureDAO\Client\Models\UserTag $body, float $user_id = null): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->postUserTagsRequest($body, $user_id);

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
     * Create request for operation 'postUserTags'
     *
     * @param \CureDAO\Client\Models\UserTag $body Contains the new user tag data (required)
     * @param float|null $user_id User&#39;s id (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function postUserTagsRequest(\CureDAO\Client\Models\UserTag $body, float $user_id = null): Request
    {
        // verify the required parameter 'body' is set

        $resourcePath = '/v3/userTags';
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
        $_tempBody = $body;

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
     * Operation postUserVariables
     *
     * Update User Settings for a Variable
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables Variable user settings data (required)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     *
     * @return \CureDAO\Client\Models\CommonResponse
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postUserVariables(array $user_variables, bool $include_private = null, string $client_id = null, bool $include_public = null, string $search_phrase = null, bool $exact_match = null, bool $manual_tracking = null, string $variable_category_name = null, int $variable_category_id = null, string $synonyms = null, string $platform = null): \CureDAO\Client\Models\CommonResponse
    {
        [$response] = $this->postUserVariablesWithHttpInfo($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform);
        return $response;
    }

    /**
     * Operation postUserVariablesWithHttpInfo
     *
     * Update User Settings for a Variable
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables Variable user settings data (required)
     * @param null $include_private Include user-specific variables in results (optional)
     * @param null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param null $include_public Include variables the user has no measurements for (optional)
     * @param null $search_phrase Ex: %Body Fat% (optional)
     * @param null $exact_match Require exact match (optional)
     * @param null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param null $variable_category_id Ex: 13 (optional)
     * @param null $synonyms Ex: McDonalds hotcake (optional)
     * @param null $platform Ex: chrome, android, ios, web (optional)
     *
     * @return array of \CureDAO\Client\Models\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postUserVariablesWithHttpInfo(array $user_variables, $include_private = null, $client_id = null, $include_public = null, $search_phrase = null, $exact_match = null, $manual_tracking = null, $variable_category_name = null, $variable_category_id = null, $synonyms = null, $platform = null): array
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->postUserVariablesRequest($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform);

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
                $content = json_decode($content);
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            if ($e->getCode() == 201) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\CureDAO\Client\Models\CommonResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }
            throw $e;
        }
    }

    /**
     * Operation postUserVariablesAsync
     *
     * Update User Settings for a Variable
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables Variable user settings data (required)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function postUserVariablesAsync(array $user_variables, bool $include_private = null, string $client_id = null, bool $include_public = null, string $search_phrase = null, bool $exact_match = null, bool $manual_tracking = null, string $variable_category_name = null, int $variable_category_id = null, string $synonyms = null, string $platform = null): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->postUserVariablesAsyncWithHttpInfo($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postUserVariablesAsyncWithHttpInfo
     *
     * Update User Settings for a Variable
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables Variable user settings data (required)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function postUserVariablesAsyncWithHttpInfo(array $user_variables, bool $include_private = null, string $client_id = null, bool $include_public = null, string $search_phrase = null, bool $exact_match = null, bool $manual_tracking = null, string $variable_category_name = null, int $variable_category_id = null, string $synonyms = null, string $platform = null): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->postUserVariablesRequest($user_variables, $include_private, $client_id, $include_public, $search_phrase, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms, $platform);

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
     * Create request for operation 'postUserVariables'
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables Variable user settings data (required)
     * @param bool|null $include_private Include user-specific variables in results (optional)
     * @param string|null $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param bool|null $include_public Include variables the user has no measurements for (optional)
     * @param string|null $search_phrase Ex: %Body Fat% (optional)
     * @param bool|null $exact_match Require exact match (optional)
     * @param bool|null $manual_tracking Only include variables tracked manually by the user (optional)
     * @param string|null $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param int|null $variable_category_id Ex: 13 (optional)
     * @param string|null $synonyms Ex: McDonalds hotcake (optional)
     * @param string|null $platform Ex: chrome, android, ios, web (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function postUserVariablesRequest(array $user_variables, bool $include_private = null, string $client_id = null, bool $include_public = null, string $search_phrase = null, bool $exact_match = null, bool $manual_tracking = null, string $variable_category_name = null, int $variable_category_id = null, string $synonyms = null, string $platform = null): Request
    {
        // verify the required parameter 'user_variables' is set
        if ((count($user_variables) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_variables when calling postUserVariables'
            );
        }

        $resourcePath = '/v3/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_private !== null) {
            $queryParams['includePrivate'] = ObjectSerializer::toQueryValue($include_private);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($include_public !== null) {
            $queryParams['includePublic'] = ObjectSerializer::toQueryValue($include_public);
        }
        // query params
        if ($search_phrase !== null) {
            $queryParams['searchPhrase'] = ObjectSerializer::toQueryValue($search_phrase);
        }
        // query params
        if ($exact_match !== null) {
            $queryParams['exactMatch'] = ObjectSerializer::toQueryValue($exact_match);
        }
        // query params
        if ($manual_tracking !== null) {
            $queryParams['manualTracking'] = ObjectSerializer::toQueryValue($manual_tracking);
        }
        // query params
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = ObjectSerializer::toQueryValue($variable_category_name);
        }
        // query params
        if ($variable_category_id !== null) {
            $queryParams['variableCategoryId'] = ObjectSerializer::toQueryValue($variable_category_id);
        }
        // query params
        if ($synonyms !== null) {
            $queryParams['synonyms'] = ObjectSerializer::toQueryValue($synonyms);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // body params
        $_tempBody = null;
        $_tempBody = $user_variables;

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
     * Operation resetUserVariableSettings
     *
     * Reset user settings for a variable to defaults
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetUserVariableSettings(\CureDAO\Client\Models\UserVariableDelete $variable_id)
    {
        $this->resetUserVariableSettingsWithHttpInfo($variable_id);
    }

    /**
     * Operation resetUserVariableSettingsWithHttpInfo
     *
     * Reset user settings for a variable to defaults
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetUserVariableSettingsWithHttpInfo(\CureDAO\Client\Models\UserVariableDelete $variable_id): array
    {
        $returnType = '';
        $request = $this->resetUserVariableSettingsRequest($variable_id);

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
    }

    /**
     * Operation resetUserVariableSettingsAsync
     *
     * Reset user settings for a variable to defaults
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function resetUserVariableSettingsAsync(\CureDAO\Client\Models\UserVariableDelete $variable_id): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->resetUserVariableSettingsAsyncWithHttpInfo($variable_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resetUserVariableSettingsAsyncWithHttpInfo
     *
     * Reset user settings for a variable to defaults
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *@throws \InvalidArgumentException
     */
    public function resetUserVariableSettingsAsyncWithHttpInfo(\CureDAO\Client\Models\UserVariableDelete $variable_id): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '';
        $request = $this->resetUserVariableSettingsRequest($variable_id);

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
     * Create request for operation 'resetUserVariableSettings'
     *
     * @param \CureDAO\Client\Models\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     *@throws \InvalidArgumentException
     */
    protected function resetUserVariableSettingsRequest(\CureDAO\Client\Models\UserVariableDelete $variable_id): Request
    {
        // verify the required parameter 'variable_id' is set

        $resourcePath = '/v3/userVariables/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // body params
        $_tempBody = null;
        $_tempBody = $variable_id;

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
    protected function createHttpClientOption(): array
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

    /**
     * @return VariableCategory[]|Collection
     * @noinspection PhpDocMissingThrowsInspection
     * @noinspection PhpUnhandledExceptionInspection
     */
    public static function variableCategories(): Collection
    {
        if(self::$variableCategories === null) {
            $instance = new self();
            return self::$variableCategories = collect($instance->getVariableCategories());
        }
        return self::$variableCategories;
    }
}
