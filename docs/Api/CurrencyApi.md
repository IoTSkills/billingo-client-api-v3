# BillingoClientAPIv3\Client\CurrencyApi

All URIs are relative to *https://api.billingo.hu/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConversionRate**](CurrencyApi.md#getconversionrate) | **GET** /currencies | Get currencies exchange rate.

# **getConversionRate**
> \BillingoClientAPIv3\Client\Model\ConversationRate getConversionRate($from, $to, $date)

Get currencies exchange rate.

Return with the exchange value of given currencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \BillingoClientAPIv3\Client\Model\Currency(); // \BillingoClientAPIv3\Client\Model\Currency | 
$to = new \BillingoClientAPIv3\Client\Model\Currency(); // \BillingoClientAPIv3\Client\Model\Currency | 
$date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->getConversionRate($from, $to, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->getConversionRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | [**\BillingoClientAPIv3\Client\Model\Currency**](../Model/.md)|  |
 **to** | [**\BillingoClientAPIv3\Client\Model\Currency**](../Model/.md)|  |
 **date** | **\DateTime**|  | [optional]

### Return type

[**\BillingoClientAPIv3\Client\Model\ConversationRate**](../Model/ConversationRate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

