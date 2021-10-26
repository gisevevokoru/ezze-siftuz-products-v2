# EzzeSiftuz\ProductsV2\BrandsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBrands**](BrandsApi.md#getbrands) | **GET** /v2/products/brands | Read the list of brands that are known on the Otto market place.

# **getBrands**
> \EzzeSiftuz\ProductsV2\Model\Brand[] getBrands()

Read the list of brands that are known on the Otto market place.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV2\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->getBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\EzzeSiftuz\ProductsV2\Model\Brand[]**](../Model/Brand.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

