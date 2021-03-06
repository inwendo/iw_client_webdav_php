<?php
/**
 * ContactApi
 * PHP version 5
 *
 * @category Class
 * @package  Inwendo\WebDav\Common
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inwendo WebDav Service
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Inwendo\WebDav\Common\Api;

use \Inwendo\WebDav\Common\Configuration;
use \Inwendo\WebDav\Common\ApiClient;
use \Inwendo\WebDav\Common\ApiException;
use \Inwendo\WebDav\Common\ObjectSerializer;

/**
 * ContactApi Class Doc Comment
 *
 * @category Class
 * @package  Inwendo\WebDav\Common
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactApi
{

    /**
     * API Client
     *
     * @var \Inwendo\WebDav\Common\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Inwendo\WebDav\Common\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Inwendo\WebDav\Common\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://webdavgateway.service.inwendo.cloud');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Inwendo\WebDav\Common\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Inwendo\WebDav\Common\ApiClient $apiClient set the API client
     *
     * @return ContactApi
     */
    public function setApiClient(\Inwendo\WebDav\Common\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteContactItem
     *
     * Removes the Contact resource.
     *
     * @param int $id  (required)
     * @return void
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function deleteContactItem($id)
    {
        list($response) = $this->deleteContactItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteContactItemWithHttpInfo
     *
     * Removes the Contact resource.
     *
     * @param int $id  (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function deleteContactItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteContactItem');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/contacts/{id}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getContactCollection
     *
     * Retrieves the collection of Contact resources.
     *
     * @return \Inwendo\WebDav\Common\Model\Contact[]
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function getContactCollection()
    {
        list($response) = $this->getContactCollectionWithHttpInfo();
        return $response;
    }

    /**
     * Operation getContactCollectionWithHttpInfo
     *
     * Retrieves the collection of Contact resources.
     *
     * @return Array of \Inwendo\WebDav\Common\Model\Contact[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function getContactCollectionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/contacts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\WebDav\Common\Model\Contact[]',
                '/contacts'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\WebDav\Common\Model\Contact[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\WebDav\Common\Model\Contact[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getContactItem
     *
     * Retrieves a Contact resource.
     *
     * @param int $id  (required)
     * @return \Inwendo\WebDav\Common\Model\Contact
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function getContactItem($id)
    {
        list($response) = $this->getContactItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getContactItemWithHttpInfo
     *
     * Retrieves a Contact resource.
     *
     * @param int $id  (required)
     * @return Array of \Inwendo\WebDav\Common\Model\Contact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function getContactItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getContactItem');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\WebDav\Common\Model\Contact',
                '/contacts/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\WebDav\Common\Model\Contact', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\WebDav\Common\Model\Contact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postContactCollection
     *
     * Creates a Contact resource.
     *
     * @param \Inwendo\WebDav\Common\Model\Contact $contact The new Contact resource (optional)
     * @return \Inwendo\WebDav\Common\Model\Contact
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function postContactCollection($contact = null)
    {
        list($response) = $this->postContactCollectionWithHttpInfo($contact);
        return $response;
    }

    /**
     * Operation postContactCollectionWithHttpInfo
     *
     * Creates a Contact resource.
     *
     * @param \Inwendo\WebDav\Common\Model\Contact $contact The new Contact resource (optional)
     * @return Array of \Inwendo\WebDav\Common\Model\Contact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function postContactCollectionWithHttpInfo($contact = null)
    {
        // parse inputs
        $resourcePath = "/contacts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/ld+json','application/json','text/html'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($contact)) {
            $_tempBody = $contact;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\WebDav\Common\Model\Contact',
                '/contacts'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\WebDav\Common\Model\Contact', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\WebDav\Common\Model\Contact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putContactItem
     *
     * Replaces the Contact resource.
     *
     * @param int $id  (required)
     * @param \Inwendo\WebDav\Common\Model\Contact $contact The updated Contact resource (optional)
     * @return \Inwendo\WebDav\Common\Model\Contact
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function putContactItem($id, $contact = null)
    {
        list($response) = $this->putContactItemWithHttpInfo($id, $contact);
        return $response;
    }

    /**
     * Operation putContactItemWithHttpInfo
     *
     * Replaces the Contact resource.
     *
     * @param int $id  (required)
     * @param \Inwendo\WebDav\Common\Model\Contact $contact The updated Contact resource (optional)
     * @return Array of \Inwendo\WebDav\Common\Model\Contact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\WebDav\Common\ApiException on non-2xx response
     */
    public function putContactItemWithHttpInfo($id, $contact = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putContactItem');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/ld+json','application/json','text/html'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($contact)) {
            $_tempBody = $contact;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\WebDav\Common\Model\Contact',
                '/contacts/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\WebDav\Common\Model\Contact', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\WebDav\Common\Model\Contact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
