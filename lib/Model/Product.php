<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.13
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'comment' => 'string',
'currency' => '\Swagger\Client\Model\Currency',
'vat' => '\Swagger\Client\Model\Vat',
'net_unit_price' => 'float',
'unit' => 'string',
'general_ledger_number' => 'string',
'general_ledger_taxcode' => 'string',
'entitlement' => '\Swagger\Client\Model\Entitlement'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'comment' => null,
'currency' => null,
'vat' => null,
'net_unit_price' => 'float',
'unit' => null,
'general_ledger_number' => null,
'general_ledger_taxcode' => null,
'entitlement' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'comment' => 'comment',
'currency' => 'currency',
'vat' => 'vat',
'net_unit_price' => 'net_unit_price',
'unit' => 'unit',
'general_ledger_number' => 'general_ledger_number',
'general_ledger_taxcode' => 'general_ledger_taxcode',
'entitlement' => 'entitlement'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'comment' => 'setComment',
'currency' => 'setCurrency',
'vat' => 'setVat',
'net_unit_price' => 'setNetUnitPrice',
'unit' => 'setUnit',
'general_ledger_number' => 'setGeneralLedgerNumber',
'general_ledger_taxcode' => 'setGeneralLedgerTaxcode',
'entitlement' => 'setEntitlement'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'comment' => 'getComment',
'currency' => 'getCurrency',
'vat' => 'getVat',
'net_unit_price' => 'getNetUnitPrice',
'unit' => 'getUnit',
'general_ledger_number' => 'getGeneralLedgerNumber',
'general_ledger_taxcode' => 'getGeneralLedgerTaxcode',
'entitlement' => 'getEntitlement'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['net_unit_price'] = isset($data['net_unit_price']) ? $data['net_unit_price'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['general_ledger_number'] = isset($data['general_ledger_number']) ? $data['general_ledger_number'] : null;
        $this->container['general_ledger_taxcode'] = isset($data['general_ledger_taxcode']) ? $data['general_ledger_taxcode'] : null;
        $this->container['entitlement'] = isset($data['entitlement']) ? $data['entitlement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \Swagger\Client\Model\Vat
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \Swagger\Client\Model\Vat $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets net_unit_price
     *
     * @return float
     */
    public function getNetUnitPrice()
    {
        return $this->container['net_unit_price'];
    }

    /**
     * Sets net_unit_price
     *
     * @param float $net_unit_price net_unit_price
     *
     * @return $this
     */
    public function setNetUnitPrice($net_unit_price)
    {
        $this->container['net_unit_price'] = $net_unit_price;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets general_ledger_number
     *
     * @return string
     */
    public function getGeneralLedgerNumber()
    {
        return $this->container['general_ledger_number'];
    }

    /**
     * Sets general_ledger_number
     *
     * @param string $general_ledger_number general_ledger_number
     *
     * @return $this
     */
    public function setGeneralLedgerNumber($general_ledger_number)
    {
        $this->container['general_ledger_number'] = $general_ledger_number;

        return $this;
    }

    /**
     * Gets general_ledger_taxcode
     *
     * @return string
     */
    public function getGeneralLedgerTaxcode()
    {
        return $this->container['general_ledger_taxcode'];
    }

    /**
     * Sets general_ledger_taxcode
     *
     * @param string $general_ledger_taxcode general_ledger_taxcode
     *
     * @return $this
     */
    public function setGeneralLedgerTaxcode($general_ledger_taxcode)
    {
        $this->container['general_ledger_taxcode'] = $general_ledger_taxcode;

        return $this;
    }

    /**
     * Gets entitlement
     *
     * @return \Swagger\Client\Model\Entitlement
     */
    public function getEntitlement()
    {
        return $this->container['entitlement'];
    }

    /**
     * Sets entitlement
     *
     * @param \Swagger\Client\Model\Entitlement $entitlement entitlement
     *
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->container['entitlement'] = $entitlement;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}