<?php
/**
 * DsFacetValueResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infocenter-TEST
 *
 * Infocenter-TEST
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infocenter\Client\Model;

use \ArrayAccess;
use \Infocenter\Client\ObjectSerializer;

/**
 * DsFacetValueResponse Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsFacetValueResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FacetValueResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'facet_type' => '\Infocenter\Client\Model\DsFacetType',
'filter_type' => '\Infocenter\Client\Model\DsFilterType',
'value_type' => '\Infocenter\Client\Model\DsFilterValueType',
'from' => '\Infocenter\Client\Model\DsObject',
'to' => '\Infocenter\Client\Model\DsObject',
'value' => '\Infocenter\Client\Model\DsObject',
'count' => 'int',
'query' => 'string',
'additional_properties' => 'map[string,\Infocenter\Client\Model\DsObject]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'facet_type' => null,
'filter_type' => null,
'value_type' => null,
'from' => null,
'to' => null,
'value' => null,
'count' => 'int64',
'query' => null,
'additional_properties' => null    ];

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
        'facet_type' => 'facetType',
'filter_type' => 'filterType',
'value_type' => 'valueType',
'from' => 'from',
'to' => 'to',
'value' => 'value',
'count' => 'count',
'query' => 'query',
'additional_properties' => 'additionalProperties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'facet_type' => 'setFacetType',
'filter_type' => 'setFilterType',
'value_type' => 'setValueType',
'from' => 'setFrom',
'to' => 'setTo',
'value' => 'setValue',
'count' => 'setCount',
'query' => 'setQuery',
'additional_properties' => 'setAdditionalProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'facet_type' => 'getFacetType',
'filter_type' => 'getFilterType',
'value_type' => 'getValueType',
'from' => 'getFrom',
'to' => 'getTo',
'value' => 'getValue',
'count' => 'getCount',
'query' => 'getQuery',
'additional_properties' => 'getAdditionalProperties'    ];

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
        $this->container['facet_type'] = isset($data['facet_type']) ? $data['facet_type'] : null;
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['value_type'] = isset($data['value_type']) ? $data['value_type'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets facet_type
     *
     * @return \Infocenter\Client\Model\DsFacetType
     */
    public function getFacetType()
    {
        return $this->container['facet_type'];
    }

    /**
     * Sets facet_type
     *
     * @param \Infocenter\Client\Model\DsFacetType $facet_type facet_type
     *
     * @return $this
     */
    public function setFacetType($facet_type)
    {
        $this->container['facet_type'] = $facet_type;

        return $this;
    }

    /**
     * Gets filter_type
     *
     * @return \Infocenter\Client\Model\DsFilterType
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     * @param \Infocenter\Client\Model\DsFilterType $filter_type filter_type
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $this->container['filter_type'] = $filter_type;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return \Infocenter\Client\Model\DsFilterValueType
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param \Infocenter\Client\Model\DsFilterValueType $value_type value_type
     *
     * @return $this
     */
    public function setValueType($value_type)
    {
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Infocenter\Client\Model\DsObject
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Infocenter\Client\Model\DsObject $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Infocenter\Client\Model\DsObject
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Infocenter\Client\Model\DsObject $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Infocenter\Client\Model\DsObject
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Infocenter\Client\Model\DsObject $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return map[string,\Infocenter\Client\Model\DsObject]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param map[string,\Infocenter\Client\Model\DsObject] $additional_properties additional_properties
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

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
