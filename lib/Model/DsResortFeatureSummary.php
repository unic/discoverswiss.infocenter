<?php
/**
 * DsResortFeatureSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infocenter-TEST-V2
 *
 * Infocenter API test-v2
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
 * DsResortFeatureSummary Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsResortFeatureSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResortFeatureSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'phone' => 'string',
'opening_hours_specification' => '\Infocenter\Client\Model\DsOpeningHoursSpecification[]',
'min_elevation' => 'double',
'max_elevation' => 'double',
'total_features' => '\Infocenter\Client\Model\DsQuantitativeValue',
'total_features_open' => '\Infocenter\Client\Model\DsQuantitativeValue',
'length' => '\Infocenter\Client\Model\DsQuantitativeValue',
'area' => '\Infocenter\Client\Model\DsQuantitativeValue',
'condition' => '\Infocenter\Client\Model\DsQuantitativeValue',
'additional_property' => '\Infocenter\Client\Model\DsPropertyValue[]',
'report' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'phone' => null,
'opening_hours_specification' => null,
'min_elevation' => 'double',
'max_elevation' => 'double',
'total_features' => null,
'total_features_open' => null,
'length' => null,
'area' => null,
'condition' => null,
'additional_property' => null,
'report' => null    ];

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
        'name' => 'name',
'phone' => 'phone',
'opening_hours_specification' => 'openingHoursSpecification',
'min_elevation' => 'minElevation',
'max_elevation' => 'maxElevation',
'total_features' => 'totalFeatures',
'total_features_open' => 'totalFeaturesOpen',
'length' => 'length',
'area' => 'area',
'condition' => 'condition',
'additional_property' => 'additionalProperty',
'report' => 'report'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'phone' => 'setPhone',
'opening_hours_specification' => 'setOpeningHoursSpecification',
'min_elevation' => 'setMinElevation',
'max_elevation' => 'setMaxElevation',
'total_features' => 'setTotalFeatures',
'total_features_open' => 'setTotalFeaturesOpen',
'length' => 'setLength',
'area' => 'setArea',
'condition' => 'setCondition',
'additional_property' => 'setAdditionalProperty',
'report' => 'setReport'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'phone' => 'getPhone',
'opening_hours_specification' => 'getOpeningHoursSpecification',
'min_elevation' => 'getMinElevation',
'max_elevation' => 'getMaxElevation',
'total_features' => 'getTotalFeatures',
'total_features_open' => 'getTotalFeaturesOpen',
'length' => 'getLength',
'area' => 'getArea',
'condition' => 'getCondition',
'additional_property' => 'getAdditionalProperty',
'report' => 'getReport'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['opening_hours_specification'] = isset($data['opening_hours_specification']) ? $data['opening_hours_specification'] : null;
        $this->container['min_elevation'] = isset($data['min_elevation']) ? $data['min_elevation'] : null;
        $this->container['max_elevation'] = isset($data['max_elevation']) ? $data['max_elevation'] : null;
        $this->container['total_features'] = isset($data['total_features']) ? $data['total_features'] : null;
        $this->container['total_features_open'] = isset($data['total_features_open']) ? $data['total_features_open'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['additional_property'] = isset($data['additional_property']) ? $data['additional_property'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
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
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets opening_hours_specification
     *
     * @return \Infocenter\Client\Model\DsOpeningHoursSpecification[]
     */
    public function getOpeningHoursSpecification()
    {
        return $this->container['opening_hours_specification'];
    }

    /**
     * Sets opening_hours_specification
     *
     * @param \Infocenter\Client\Model\DsOpeningHoursSpecification[] $opening_hours_specification opening_hours_specification
     *
     * @return $this
     */
    public function setOpeningHoursSpecification($opening_hours_specification)
    {
        $this->container['opening_hours_specification'] = $opening_hours_specification;

        return $this;
    }

    /**
     * Gets min_elevation
     *
     * @return double
     */
    public function getMinElevation()
    {
        return $this->container['min_elevation'];
    }

    /**
     * Sets min_elevation
     *
     * @param double $min_elevation min_elevation
     *
     * @return $this
     */
    public function setMinElevation($min_elevation)
    {
        $this->container['min_elevation'] = $min_elevation;

        return $this;
    }

    /**
     * Gets max_elevation
     *
     * @return double
     */
    public function getMaxElevation()
    {
        return $this->container['max_elevation'];
    }

    /**
     * Sets max_elevation
     *
     * @param double $max_elevation max_elevation
     *
     * @return $this
     */
    public function setMaxElevation($max_elevation)
    {
        $this->container['max_elevation'] = $max_elevation;

        return $this;
    }

    /**
     * Gets total_features
     *
     * @return \Infocenter\Client\Model\DsQuantitativeValue
     */
    public function getTotalFeatures()
    {
        return $this->container['total_features'];
    }

    /**
     * Sets total_features
     *
     * @param \Infocenter\Client\Model\DsQuantitativeValue $total_features total_features
     *
     * @return $this
     */
    public function setTotalFeatures($total_features)
    {
        $this->container['total_features'] = $total_features;

        return $this;
    }

    /**
     * Gets total_features_open
     *
     * @return \Infocenter\Client\Model\DsQuantitativeValue
     */
    public function getTotalFeaturesOpen()
    {
        return $this->container['total_features_open'];
    }

    /**
     * Sets total_features_open
     *
     * @param \Infocenter\Client\Model\DsQuantitativeValue $total_features_open total_features_open
     *
     * @return $this
     */
    public function setTotalFeaturesOpen($total_features_open)
    {
        $this->container['total_features_open'] = $total_features_open;

        return $this;
    }

    /**
     * Gets length
     *
     * @return \Infocenter\Client\Model\DsQuantitativeValue
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param \Infocenter\Client\Model\DsQuantitativeValue $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets area
     *
     * @return \Infocenter\Client\Model\DsQuantitativeValue
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \Infocenter\Client\Model\DsQuantitativeValue $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Infocenter\Client\Model\DsQuantitativeValue
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Infocenter\Client\Model\DsQuantitativeValue $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets additional_property
     *
     * @return \Infocenter\Client\Model\DsPropertyValue[]
     */
    public function getAdditionalProperty()
    {
        return $this->container['additional_property'];
    }

    /**
     * Sets additional_property
     *
     * @param \Infocenter\Client\Model\DsPropertyValue[] $additional_property additional_property
     *
     * @return $this
     */
    public function setAdditionalProperty($additional_property)
    {
        $this->container['additional_property'] = $additional_property;

        return $this;
    }

    /**
     * Gets report
     *
     * @return string
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param string $report report
     *
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

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