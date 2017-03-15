# Inwendo\WebDav\Common\ContactApi

All URIs are relative to *https://webdavgateway.service.inwendo.cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactItem**](ContactApi.md#deleteContactItem) | **DELETE** /contacts/{id} | Removes the Contact resource.
[**getContactCollection**](ContactApi.md#getContactCollection) | **GET** /contacts | Retrieves the collection of Contact resources.
[**getContactItem**](ContactApi.md#getContactItem) | **GET** /contacts/{id} | Retrieves a Contact resource.
[**postContactCollection**](ContactApi.md#postContactCollection) | **POST** /contacts | Creates a Contact resource.
[**putContactItem**](ContactApi.md#putContactItem) | **PUT** /contacts/{id} | Replaces the Contact resource.


# **deleteContactItem**
> deleteContactItem($id)

Removes the Contact resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\ContactApi();
$id = 56; // int | 

try {
    $api_instance->deleteContactItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContactItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactCollection**
> \Inwendo\WebDav\Common\Model\Contact[] getContactCollection()

Retrieves the collection of Contact resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\ContactApi();

try {
    $result = $api_instance->getContactCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Inwendo\WebDav\Common\Model\Contact[]**](../Model/Contact.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactItem**
> \Inwendo\WebDav\Common\Model\Contact getContactItem($id)

Retrieves a Contact resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\ContactApi();
$id = 56; // int | 

try {
    $result = $api_instance->getContactItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Inwendo\WebDav\Common\Model\Contact**](../Model/Contact.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactCollection**
> \Inwendo\WebDav\Common\Model\Contact postContactCollection($contact)

Creates a Contact resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\ContactApi();
$contact = new \Inwendo\WebDav\Common\Model\Contact(); // \Inwendo\WebDav\Common\Model\Contact | The new Contact resource

try {
    $result = $api_instance->postContactCollection($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\Inwendo\WebDav\Common\Model\Contact**](../Model/\Inwendo\WebDav\Common\Model\Contact.md)| The new Contact resource | [optional]

### Return type

[**\Inwendo\WebDav\Common\Model\Contact**](../Model/Contact.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactItem**
> \Inwendo\WebDav\Common\Model\Contact putContactItem($id, $contact)

Replaces the Contact resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\ContactApi();
$id = 56; // int | 
$contact = new \Inwendo\WebDav\Common\Model\Contact(); // \Inwendo\WebDav\Common\Model\Contact | The updated Contact resource

try {
    $result = $api_instance->putContactItem($id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->putContactItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **contact** | [**\Inwendo\WebDav\Common\Model\Contact**](../Model/\Inwendo\WebDav\Common\Model\Contact.md)| The updated Contact resource | [optional]

### Return type

[**\Inwendo\WebDav\Common\Model\Contact**](../Model/Contact.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

