<?php
/**
 * MeasurementsApi
 * PHP version 5
 *
 * @category Class
 * @package  CureDAO\Client
 * @author   Mike P. Sinn
 * @link     https://github.com/cure-dao
 */



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
 * MeasurementsApi Class
 * @category Class
 * @package  CureDAO\Client
 * @author   Mike P. Sinn
 * @link     https://github.com/cure-dao
 */
class MeasurementsApi
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
     * Operation deleteMeasurement
     *
     * Delete a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\CommonResponse
     */
    public function deleteMeasurement($body)
    {
        list($response) = $this->deleteMeasurementWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation deleteMeasurementWithHttpInfo
     *
     * Delete a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteMeasurementWithHttpInfo($body)
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->deleteMeasurementRequest($body);

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
                        '\CureDAO\Client\Models\CommonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteMeasurementAsync
     *
     * Delete a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMeasurementAsync($body)
    {
        return $this->deleteMeasurementAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteMeasurementAsyncWithHttpInfo
     *
     * Delete a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMeasurementAsyncWithHttpInfo($body)
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->deleteMeasurementRequest($body);

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
     * Create request for operation 'deleteMeasurement'
     *
     * @param  \CureDAO\Client\Models\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteMeasurementRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling deleteMeasurement'
            );
        }

        $resourcePath = '/v3/measurements/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
     * Operation getMeasurements
     *
     * Get measurements for this user
     *
     * @param  string $variable_name Name of the variable you want measurements for (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param  string $connector_name Ex: facebook (optional)
     * @param  string $value Value of measurement (optional)
     * @param  string $unit_name Ex: Milligrams (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $id Measurement id (optional)
     * @param  int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param  string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param  bool $do_not_process Ex: true (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $do_not_convert Ex: 1 (optional)
     * @param  bool $min_max_filter Ex: 1 (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\Measurement[]
     */
    public function getMeasurements($variable_name = null, $sort = null, $limit = '100', $offset = null, $variable_category_name = null, $updated_at = null, $user_id = null, $source_name = null, $connector_name = null, $value = null, $unit_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $id = null, $grouping_width = null, $grouping_timezone = null, $do_not_process = null, $client_id = null, $do_not_convert = null, $min_max_filter = null, $platform = null)
    {
        list($response) = $this->getMeasurementsWithHttpInfo($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform);
        return $response;
    }

    /**
     * Operation getMeasurementsWithHttpInfo
     *
     * Get measurements for this user
     *
     * @param  string $variable_name Name of the variable you want measurements for (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param  string $connector_name Ex: facebook (optional)
     * @param  string $value Value of measurement (optional)
     * @param  string $unit_name Ex: Milligrams (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $id Measurement id (optional)
     * @param  int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param  string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param  bool $do_not_process Ex: true (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $do_not_convert Ex: 1 (optional)
     * @param  bool $min_max_filter Ex: 1 (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\Measurement[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeasurementsWithHttpInfo($variable_name = null, $sort = null, $limit = '100', $offset = null, $variable_category_name = null, $updated_at = null, $user_id = null, $source_name = null, $connector_name = null, $value = null, $unit_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $id = null, $grouping_width = null, $grouping_timezone = null, $do_not_process = null, $client_id = null, $do_not_convert = null, $min_max_filter = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\Measurement[]';
        $request = $this->getMeasurementsRequest($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform);

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
                        '\CureDAO\Client\Models\Measurement[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMeasurementsAsync
     *
     * Get measurements for this user
     *
     * @param  string $variable_name Name of the variable you want measurements for (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param  string $connector_name Ex: facebook (optional)
     * @param  string $value Value of measurement (optional)
     * @param  string $unit_name Ex: Milligrams (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $id Measurement id (optional)
     * @param  int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param  string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param  bool $do_not_process Ex: true (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $do_not_convert Ex: 1 (optional)
     * @param  bool $min_max_filter Ex: 1 (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeasurementsAsync($variable_name = null, $sort = null, $limit = '100', $offset = null, $variable_category_name = null, $updated_at = null, $user_id = null, $source_name = null, $connector_name = null, $value = null, $unit_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $id = null, $grouping_width = null, $grouping_timezone = null, $do_not_process = null, $client_id = null, $do_not_convert = null, $min_max_filter = null, $platform = null)
    {
        return $this->getMeasurementsAsyncWithHttpInfo($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMeasurementsAsyncWithHttpInfo
     *
     * Get measurements for this user
     *
     * @param  string $variable_name Name of the variable you want measurements for (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param  string $connector_name Ex: facebook (optional)
     * @param  string $value Value of measurement (optional)
     * @param  string $unit_name Ex: Milligrams (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $id Measurement id (optional)
     * @param  int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param  string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param  bool $do_not_process Ex: true (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $do_not_convert Ex: 1 (optional)
     * @param  bool $min_max_filter Ex: 1 (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMeasurementsAsyncWithHttpInfo($variable_name = null, $sort = null, $limit = '100', $offset = null, $variable_category_name = null, $updated_at = null, $user_id = null, $source_name = null, $connector_name = null, $value = null, $unit_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $id = null, $grouping_width = null, $grouping_timezone = null, $do_not_process = null, $client_id = null, $do_not_convert = null, $min_max_filter = null, $platform = null)
    {
        $returnType = '\CureDAO\Client\Models\Measurement[]';
        $request = $this->getMeasurementsRequest($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform);

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
     * Create request for operation 'getMeasurements'
     *
     * @param  string $variable_name Name of the variable you want measurements for (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $variable_category_name Ex: Emotions, Treatments, Symptoms... (optional)
     * @param  string $updated_at When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $source_name ID of the source you want measurements for (supports exact name match only) (optional)
     * @param  string $connector_name Ex: facebook (optional)
     * @param  string $value Value of measurement (optional)
     * @param  string $unit_name Ex: Milligrams (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $id Measurement id (optional)
     * @param  int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param  string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param  bool $do_not_process Ex: true (optional)
     * @param  string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org (optional)
     * @param  bool $do_not_convert Ex: 1 (optional)
     * @param  bool $min_max_filter Ex: 1 (optional)
     * @param  string $platform Ex: chrome, android, ios, web (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMeasurementsRequest($variable_name = null, $sort = null, $limit = '100', $offset = null, $variable_category_name = null, $updated_at = null, $user_id = null, $source_name = null, $connector_name = null, $value = null, $unit_name = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $id = null, $grouping_width = null, $grouping_timezone = null, $do_not_process = null, $client_id = null, $do_not_convert = null, $min_max_filter = null, $platform = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling MeasurementsApi.getMeasurements, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/measurements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($variable_name !== null) {
            $queryParams['variableName'] = ObjectSerializer::toQueryValue($variable_name);
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
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = ObjectSerializer::toQueryValue($variable_category_name);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = ObjectSerializer::toQueryValue($updated_at);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($source_name !== null) {
            $queryParams['sourceName'] = ObjectSerializer::toQueryValue($source_name);
        }
        // query params
        if ($connector_name !== null) {
            $queryParams['connectorName'] = ObjectSerializer::toQueryValue($connector_name);
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value);
        }
        // query params
        if ($unit_name !== null) {
            $queryParams['unitName'] = ObjectSerializer::toQueryValue($unit_name);
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
        if ($created_at !== null) {
            $queryParams['createdAt'] = ObjectSerializer::toQueryValue($created_at);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($grouping_width !== null) {
            $queryParams['groupingWidth'] = ObjectSerializer::toQueryValue($grouping_width);
        }
        // query params
        if ($grouping_timezone !== null) {
            $queryParams['groupingTimezone'] = ObjectSerializer::toQueryValue($grouping_timezone);
        }
        // query params
        if ($do_not_process !== null) {
            $queryParams['doNotProcess'] = ObjectSerializer::toQueryValue($do_not_process);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($do_not_convert !== null) {
            $queryParams['doNotConvert'] = ObjectSerializer::toQueryValue($do_not_convert);
        }
        // query params
        if ($min_max_filter !== null) {
            $queryParams['minMaxFilter'] = ObjectSerializer::toQueryValue($min_max_filter);
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
     * Operation getPairs
     *
     * Get pairs of measurements for correlational analysis
     *

     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $effect_unit_name Name for the unit effect measurements to be returned in (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $cause_unit_name Name for the unit cause measurements to be returned in (optional)
     * @param  string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param  string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\Pair[]
     */
    public function getPairs($predictor_variable_name, $outcome_variable_name, $effect_unit_name = null, $user_id = null, $cause_unit_name = null, $onset_delay = null, $duration_of_action = null, $earliest_measurement_time = null, $latest_measurement_time = null, $limit = '100', $offset = null, $sort = null)
    {
        list($response) = $this->getPairsWithHttpInfo($predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation getPairsWithHttpInfo
     *
     * Get pairs of measurements for correlational analysis
     *

     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $effect_unit_name Name for the unit effect measurements to be returned in (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $cause_unit_name Name for the unit cause measurements to be returned in (optional)
     * @param  string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param  string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\Pair[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPairsWithHttpInfo($predictor_variable_name, $outcome_variable_name, $effect_unit_name = null, $user_id = null, $cause_unit_name = null, $onset_delay = null, $duration_of_action = null, $earliest_measurement_time = null, $latest_measurement_time = null, $limit = '100', $offset = null, $sort = null)
    {
        $returnType = '\CureDAO\Client\Models\Pair[]';
        $request = $this->getPairsRequest($predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort);

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
                        '\CureDAO\Client\Models\Pair[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPairsAsync
     *
     * Get pairs of measurements for correlational analysis
     *

     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $effect_unit_name Name for the unit effect measurements to be returned in (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $cause_unit_name Name for the unit cause measurements to be returned in (optional)
     * @param  string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param  string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPairsAsync($predictor_variable_name, $outcome_variable_name, $effect_unit_name = null, $user_id = null, $cause_unit_name = null, $onset_delay = null, $duration_of_action = null, $earliest_measurement_time = null, $latest_measurement_time = null, $limit = '100', $offset = null, $sort = null)
    {
        return $this->getPairsAsyncWithHttpInfo($predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPairsAsyncWithHttpInfo
     *
     * Get pairs of measurements for correlational analysis
     *

     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $effect_unit_name Name for the unit effect measurements to be returned in (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $cause_unit_name Name for the unit cause measurements to be returned in (optional)
     * @param  string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param  string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPairsAsyncWithHttpInfo($predictor_variable_name, $outcome_variable_name, $effect_unit_name = null, $user_id = null, $cause_unit_name = null, $onset_delay = null, $duration_of_action = null, $earliest_measurement_time = null, $latest_measurement_time = null, $limit = '100', $offset = null, $sort = null)
    {
        $returnType = '\CureDAO\Client\Models\Pair[]';
        $request = $this->getPairsRequest($predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort);

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
     * Create request for operation 'getPairs'
     *

     * @param  string $predictor_variable_name Name of the hypothetical predictor variable.  Ex: Sleep Duration (optional)
     * @param  string $outcome_variable_name Name of the outcome variable of interest.  Ex: Overall Mood (optional)
     * @param  string $effect_unit_name Name for the unit effect measurements to be returned in (optional)
     * @param  float $user_id User&#39;s id (optional)
     * @param  string $cause_unit_name Name for the unit cause measurements to be returned in (optional)
     * @param  string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param  string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds (optional)
     * @param  string $earliest_measurement_time Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  string $latest_measurement_time Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. (optional)
     * @param  int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param  int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param  string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPairsRequest($predictor_variable_name, $outcome_variable_name, $effect_unit_name = null, $user_id = null, $cause_unit_name = null, $onset_delay = null, $duration_of_action = null, $earliest_measurement_time = null, $latest_measurement_time = null, $limit = '100', $offset = null, $sort = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling MeasurementsApi.getPairs, must be bigger than or equal to 0.');
        }
        $resourcePath = '/v3/pairs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // query params
        if ($predictor_variable_name !== null) {
            $queryParams['predictorVariableName'] = ObjectSerializer::toQueryValue($predictor_variable_name);
        }
        // query params
        if ($outcome_variable_name !== null) {
            $queryParams['outcomeVariableName'] = ObjectSerializer::toQueryValue($outcome_variable_name);
        }
        // query params
        if ($effect_unit_name !== null) {
            $queryParams['effectUnitName'] = ObjectSerializer::toQueryValue($effect_unit_name);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($cause_unit_name !== null) {
            $queryParams['causeUnitName'] = ObjectSerializer::toQueryValue($cause_unit_name);
        }
        // query params
        if ($onset_delay !== null) {
            $queryParams['onsetDelay'] = ObjectSerializer::toQueryValue($onset_delay);
        }
        // query params
        if ($duration_of_action !== null) {
            $queryParams['durationOfAction'] = ObjectSerializer::toQueryValue($duration_of_action);
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
     * Operation measurementExportRequest
     *
     * Post Request for Measurements CSV
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function measurementExportRequest($user_id = null)
    {
        list($response) = $this->measurementExportRequestWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation measurementExportRequestWithHttpInfo
     *
     * Post Request for Measurements CSV
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function measurementExportRequestWithHttpInfo($user_id = null)
    {
        $returnType = 'int';
        $request = $this->measurementExportRequestRequest($user_id);

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
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation measurementExportRequestAsync
     *
     * Post Request for Measurements CSV
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function measurementExportRequestAsync($user_id = null)
    {
        return $this->measurementExportRequestAsyncWithHttpInfo($user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation measurementExportRequestAsyncWithHttpInfo
     *
     * Post Request for Measurements CSV
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function measurementExportRequestAsyncWithHttpInfo($user_id = null)
    {
        $returnType = 'int';
        $request = $this->measurementExportRequestRequest($user_id);

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
     * Create request for operation 'measurementExportRequest'
     *
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function measurementExportRequestRequest($user_id = null)
    {

        $resourcePath = '/v2/measurements/exportRequest';
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
     * Operation postMeasurements
     *
     * Post a new set or update existing measurements to the database
     *
     * @param  \CureDAO\Client\Models\MeasurementSet[] $body An array of measurement sets containing measurement items you want to insert. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\PostMeasurementsResponse
     */
    public function postMeasurements($body, $user_id = null)
    {
        list($response) = $this->postMeasurementsWithHttpInfo($body, $user_id);
        return $response;
    }

    /**
     * Operation postMeasurementsWithHttpInfo
     *
     * Post a new set or update existing measurements to the database
     *
     * @param  \CureDAO\Client\Models\MeasurementSet[] $body An array of measurement sets containing measurement items you want to insert. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\PostMeasurementsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postMeasurementsWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Models\PostMeasurementsResponse';
        $request = $this->postMeasurementsRequest($body, $user_id);

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
                        '\CureDAO\Client\Models\PostMeasurementsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postMeasurementsAsync
     *
     * Post a new set or update existing measurements to the database
     *
     * @param  \CureDAO\Client\Models\MeasurementSet[] $body An array of measurement sets containing measurement items you want to insert. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMeasurementsAsync($body, $user_id = null)
    {
        return $this->postMeasurementsAsyncWithHttpInfo($body, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postMeasurementsAsyncWithHttpInfo
     *
     * Post a new set or update existing measurements to the database
     *
     * @param  \CureDAO\Client\Models\MeasurementSet[] $body An array of measurement sets containing measurement items you want to insert. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMeasurementsAsyncWithHttpInfo($body, $user_id = null)
    {
        $returnType = '\CureDAO\Client\Models\PostMeasurementsResponse';
        $request = $this->postMeasurementsRequest($body, $user_id);

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
     * Create request for operation 'postMeasurements'
     *
     * @param  \CureDAO\Client\Models\MeasurementSet[] $body An array of measurement sets containing measurement items you want to insert. (required)
     * @param  float $user_id User&#39;s id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postMeasurementsRequest($body, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postMeasurements'
            );
        }

        $resourcePath = '/v3/measurements/post';
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
     * Operation updateMeasurement
     *
     * Update a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementUpdate $body The id as well as the new startTime, note, and/or value of the measurement to be updated (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CureDAO\Client\Models\CommonResponse
     */
    public function updateMeasurement($body)
    {
        list($response) = $this->updateMeasurementWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updateMeasurementWithHttpInfo
     *
     * Update a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementUpdate $body The id as well as the new startTime, note, and/or value of the measurement to be updated (required)
     *
     * @throws \CureDAO\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CureDAO\Client\Models\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMeasurementWithHttpInfo($body)
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->updateMeasurementRequest($body);

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
                        '\CureDAO\Client\Models\CommonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateMeasurementAsync
     *
     * Update a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementUpdate $body The id as well as the new startTime, note, and/or value of the measurement to be updated (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeasurementAsync($body)
    {
        return $this->updateMeasurementAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateMeasurementAsyncWithHttpInfo
     *
     * Update a measurement
     *
     * @param  \CureDAO\Client\Models\MeasurementUpdate $body The id as well as the new startTime, note, and/or value of the measurement to be updated (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMeasurementAsyncWithHttpInfo($body)
    {
        $returnType = '\CureDAO\Client\Models\CommonResponse';
        $request = $this->updateMeasurementRequest($body);

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
     * Create request for operation 'updateMeasurement'
     *
     * @param  \CureDAO\Client\Models\MeasurementUpdate $body The id as well as the new startTime, note, and/or value of the measurement to be updated (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMeasurementRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateMeasurement'
            );
        }

        $resourcePath = '/v3/measurements/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
