# Inwendo\WebDav\Common\WebDavLoginApi

All URIs are relative to *https://webdavgateway.service.inwendo.cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWebDavLoginCollection**](WebDavLoginApi.md#getWebDavLoginCollection) | **GET** /web_dav_logins | Retrieves the collection of WebDavLogin resources.
[**getWebDavLoginItem**](WebDavLoginApi.md#getWebDavLoginItem) | **GET** /web_dav_logins/{id} | Retrieves a WebDavLogin resource.
[**putWebDavLoginItem**](WebDavLoginApi.md#putWebDavLoginItem) | **POST** /web_dav_logins | Creates a WebDavLogin resource.


# **getWebDavLoginCollection**
> \Inwendo\WebDav\Common\Model\WebDavLogin[] getWebDavLoginCollection()

Retrieves the collection of WebDavLogin resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\WebDavLoginApi();

try {
    $result = $api_instance->getWebDavLoginCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebDavLoginApi->getWebDavLoginCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Inwendo\WebDav\Common\Model\WebDavLogin[]**](../Model/WebDavLogin.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebDavLoginItem**
> \Inwendo\WebDav\Common\Model\WebDavLogin getWebDavLoginItem($id)

Retrieves a WebDavLogin resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\WebDavLoginApi();
$id = 56; // int | 

try {
    $result = $api_instance->getWebDavLoginItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebDavLoginApi->getWebDavLoginItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Inwendo\WebDav\Common\Model\WebDavLogin**](../Model/WebDavLogin.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWebDavLoginItem**
> \Inwendo\WebDav\Common\Model\WebDavLogin putWebDavLoginItem($web_dav_login)

Creates a WebDavLogin resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\WebDav\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\WebDav\Common\Api\WebDavLoginApi();
$web_dav_login = new \Inwendo\WebDav\Common\Model\WebDavLogin(); // \Inwendo\WebDav\Common\Model\WebDavLogin | The new WebDavLogin resource

try {
    $result = $api_instance->putWebDavLoginItem($web_dav_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebDavLoginApi->putWebDavLoginItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_dav_login** | [**\Inwendo\WebDav\Common\Model\WebDavLogin**](../Model/\Inwendo\WebDav\Common\Model\WebDavLogin.md)| The new WebDavLogin resource | [optional]

### Return type

[**\Inwendo\WebDav\Common\Model\WebDavLogin**](../Model/WebDavLogin.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

