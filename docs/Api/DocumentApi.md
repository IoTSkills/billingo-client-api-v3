# BillingoClientAPIv3\Client\DocumentApi

All URIs are relative to *https://api.billingo.hu/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveDocument**](DocumentApi.md#archivedocument) | **PUT** /documents/{id}/archive | Archive a proforma document.
[**cancelDocument**](DocumentApi.md#canceldocument) | **POST** /documents/{id}/cancel | Cancel a document
[**createDocument**](DocumentApi.md#createdocument) | **POST** /documents | Create a document
[**createDocumentFromProforma**](DocumentApi.md#createdocumentfromproforma) | **POST** /documents/{id}/create-from-proforma | Create a document from proforma.
[**createModificationDocument**](DocumentApi.md#createmodificationdocument) | **POST** /documents/{id}/create-modification-document | Create a modification document.
[**deleteDocument**](DocumentApi.md#deletedocument) | **DELETE** /documents/{id} | Delete a draft.
[**deletePayment**](DocumentApi.md#deletepayment) | **DELETE** /documents/{id}/payments | Delete all payment history on document
[**documentCopy**](DocumentApi.md#documentcopy) | **POST** /documents/{id}/copy | Copy a document
[**downloadDocument**](DocumentApi.md#downloaddocument) | **GET** /documents/{id}/download | Download a document in PDF format.
[**getDocument**](DocumentApi.md#getdocument) | **GET** /documents/{id} | Retrieve a document
[**getOnlineSzamlaStatus**](DocumentApi.md#getonlineszamlastatus) | **GET** /documents/{id}/online-szamla | Retrieve a document Online Számla status
[**getPayment**](DocumentApi.md#getpayment) | **GET** /documents/{id}/payments | Retrieve a payment histroy
[**getPublicUrl**](DocumentApi.md#getpublicurl) | **GET** /documents/{id}/public-url | Retrieve a document download public url.
[**listDocument**](DocumentApi.md#listdocument) | **GET** /documents | List all documents
[**posPrint**](DocumentApi.md#posprint) | **GET** /documents/{id}/print/pos | Returns a printable POS PDF
[**sendDocument**](DocumentApi.md#senddocument) | **POST** /documents/{id}/send | Send invoice to given email adresses.
[**updatePayment**](DocumentApi.md#updatepayment) | **PUT** /documents/{id}/payments | Update payment history

# **archiveDocument**
> archiveDocument($id)

Archive a proforma document.

Archive an existing proforma document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->archiveDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->archiveDocument: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelDocument**
> \BillingoClientAPIv3\Client\Model\Document cancelDocument($id)

Cancel a document

Cancel a document. Returns a cancellation document object if the cancellation is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->cancelDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->cancelDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocument**
> \BillingoClientAPIv3\Client\Model\Document createDocument($body)

Create a document

Create a new document. Returns a document object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillingoClientAPIv3\Client\Model\DocumentInsert(); // \BillingoClientAPIv3\Client\Model\DocumentInsert | DocumentInsert object that you would like to store.

try {
    $result = $apiInstance->createDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillingoClientAPIv3\Client\Model\DocumentInsert**](../Model/DocumentInsert.md)| DocumentInsert object that you would like to store. |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocumentFromProforma**
> \BillingoClientAPIv3\Client\Model\Document createDocumentFromProforma($id)

Create a document from proforma.

Create a new document from proforma. Returns a document object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->createDocumentFromProforma($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocumentFromProforma: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createModificationDocument**
> \BillingoClientAPIv3\Client\Model\Document createModificationDocument($body, $id)

Create a modification document.

Create a modification document for the given document. Returns a new document object if the create is successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillingoClientAPIv3\Client\Model\ModificationDocumentInsert(); // \BillingoClientAPIv3\Client\Model\ModificationDocumentInsert | ModificationDocumentInsert object that you would like to store.
$id = 56; // int | 

try {
    $result = $apiInstance->createModificationDocument($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createModificationDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillingoClientAPIv3\Client\Model\ModificationDocumentInsert**](../Model/ModificationDocumentInsert.md)| ModificationDocumentInsert object that you would like to store. |
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> deleteDocument($id)

Delete a draft.

Delete an existing draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePayment**
> \BillingoClientAPIv3\Client\Model\PaymentHistory[] deletePayment($id)

Delete all payment history on document

Delete all exist payment history on document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->deletePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentCopy**
> \BillingoClientAPIv3\Client\Model\Document documentCopy($id)

Copy a document

Copy a document. Returns the new document if the copy was succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->documentCopy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadDocument**
> string downloadDocument($id)

Download a document in PDF format.

Download a document. Returns a document in PDF format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->downloadDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \BillingoClientAPIv3\Client\Model\Document getDocument($id)

Retrieve a document

Retrieves the details of an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnlineSzamlaStatus**
> \BillingoClientAPIv3\Client\Model\OnlineSzamlaStatus getOnlineSzamlaStatus($id)

Retrieve a document Online Számla status

Retrieves the details of an existing document status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getOnlineSzamlaStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getOnlineSzamlaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\OnlineSzamlaStatus**](../Model/OnlineSzamlaStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayment**
> \BillingoClientAPIv3\Client\Model\PaymentHistory[] getPayment($id)

Retrieve a payment histroy

Retrieves the details of payment history an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicUrl**
> \BillingoClientAPIv3\Client\Model\DocumentPublicUrl getPublicUrl($id)

Retrieve a document download public url.

Retrieves public url to download an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getPublicUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPublicUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\DocumentPublicUrl**](../Model/DocumentPublicUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDocument**
> \BillingoClientAPIv3\Client\Model\DocumentList listDocument($page, $per_page, $block_id, $partner_id, $payment_method, $payment_status, $start_date, $end_date, $start_number, $end_number, $start_year, $end_year, $type)

List all documents

Returns a list of your documents. The documents are returned sorted by creation date, with the most recent documents appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 25; // int | 
$block_id = 56; // int | Filter documents by the identifier of your DocumentBlock.
$partner_id = 56; // int | Filter documents by the identifier of your Partner.
$payment_method = new \BillingoClientAPIv3\Client\Model\PaymentMethod(); // \BillingoClientAPIv3\Client\Model\PaymentMethod | Filter documents by PaymentMethod value.
$payment_status = new \BillingoClientAPIv3\Client\Model\PaymentStatus(); // \BillingoClientAPIv3\Client\Model\PaymentStatus | Filter documents by PaymentStatus value.
$start_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by date.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by date.
$start_number = 56; // int | Starting number of the document, should not contain year or any other formatting. Required if `start_year` given
$end_number = 56; // int | Ending number of the document, should not contain year or any other formatting. Required if `end_year` given
$start_year = 56; // int | Year for `start_number` parameter. Required if `start_number` given.
$end_year = 56; // int | Year for `end_number` parameter. Required if `end_number` given.
$type = new \BillingoClientAPIv3\Client\Model\DocumentType(); // \BillingoClientAPIv3\Client\Model\DocumentType | Filter documents by type

try {
    $result = $apiInstance->listDocument($page, $per_page, $block_id, $partner_id, $payment_method, $payment_status, $start_date, $end_date, $start_number, $end_number, $start_year, $end_year, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->listDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional] [default to 25]
 **block_id** | **int**| Filter documents by the identifier of your DocumentBlock. | [optional]
 **partner_id** | **int**| Filter documents by the identifier of your Partner. | [optional]
 **payment_method** | [**\BillingoClientAPIv3\Client\Model\PaymentMethod**](../Model/.md)| Filter documents by PaymentMethod value. | [optional]
 **payment_status** | [**\BillingoClientAPIv3\Client\Model\PaymentStatus**](../Model/.md)| Filter documents by PaymentStatus value. | [optional]
 **start_date** | **\DateTime**| Filter documents by date. | [optional]
 **end_date** | **\DateTime**| Filter documents by date. | [optional]
 **start_number** | **int**| Starting number of the document, should not contain year or any other formatting. Required if &#x60;start_year&#x60; given | [optional]
 **end_number** | **int**| Ending number of the document, should not contain year or any other formatting. Required if &#x60;end_year&#x60; given | [optional]
 **start_year** | **int**| Year for &#x60;start_number&#x60; parameter. Required if &#x60;start_number&#x60; given. | [optional]
 **end_year** | **int**| Year for &#x60;end_number&#x60; parameter. Required if &#x60;end_number&#x60; given. | [optional]
 **type** | [**\BillingoClientAPIv3\Client\Model\DocumentType**](../Model/.md)| Filter documents by type | [optional]

### Return type

[**\BillingoClientAPIv3\Client\Model\DocumentList**](../Model/DocumentList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **posPrint**
> string posPrint($id, $size)

Returns a printable POS PDF

Returns a printable POS PDF file of a particular document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$size = 3.4; // float | In which size the POS PDF should be rendered.

try {
    $result = $apiInstance->posPrint($id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->posPrint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **size** | [**float**](../Model/.md)| In which size the POS PDF should be rendered. |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendDocument**
> \BillingoClientAPIv3\Client\Model\SendDocument sendDocument($id, $body)

Send invoice to given email adresses.

Returns a list of emails, where the invoice is sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \BillingoClientAPIv3\Client\Model\SendDocument(); // \BillingoClientAPIv3\Client\Model\SendDocument | List of email-s where you want to send the invoice.

try {
    $result = $apiInstance->sendDocument($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\BillingoClientAPIv3\Client\Model\SendDocument**](../Model/SendDocument.md)| List of email-s where you want to send the invoice. | [optional]

### Return type

[**\BillingoClientAPIv3\Client\Model\SendDocument**](../Model/SendDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayment**
> \BillingoClientAPIv3\Client\Model\PaymentHistory[] updatePayment($body, $id)

Update payment history

Update payment history an existing document. Returns a payment history object if the update is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillingoClientAPIv3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new BillingoClientAPIv3\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \BillingoClientAPIv3\Client\Model\PaymentHistory()); // \BillingoClientAPIv3\Client\Model\PaymentHistory[] | Payment history object that you would like to update.
$id = 56; // int | 

try {
    $result = $apiInstance->updatePayment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillingoClientAPIv3\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)| Payment history object that you would like to update. |
 **id** | **int**|  |

### Return type

[**\BillingoClientAPIv3\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

