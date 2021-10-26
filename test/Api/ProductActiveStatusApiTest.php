<?php
/**
 * ProductActiveStatusApiTest
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * OpenAPI spec version: V2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace EzzeSiftuz\ProductsV2;

use EzzeSiftuz\ProductsV2\Configuration;
use EzzeSiftuz\ProductsV2\ApiException;
use EzzeSiftuz\ProductsV2\ObjectSerializer;

/**
 * ProductActiveStatusApiTest Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductActiveStatusApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for getActiveStatus
     *
     * Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated..
     *
     */
    public function testGetActiveStatus()
    {
    }

    /**
     * Test case for getVariationActiveStatus
     *
     * Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated..
     *
     */
    public function testGetVariationActiveStatus()
    {
    }

    /**
     * Test case for updateActiveStatus
     *
     * Update the active status of your product variations and get a process-id to query results..
     *
     */
    public function testUpdateActiveStatus()
    {
    }
}
