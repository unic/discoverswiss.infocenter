<?php
/**
 * DsPropertyValue
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
 * OpenAPI spec version: 1.0
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
 * DsPropertyValue Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsPropertyValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_value' => 'double',
'min_value' => 'double',
'unit_code' => 'string',
'unit_text' => 'string',
'value' => '\Infocenter\Client\Model\DsObject',
'property_id' => 'string',
'value_type' => 'string',
'alternate_name' => 'string',
'description' => 'string',
'disambiguating_description' => 'string',
'image' => '\Infocenter\Client\Model\DsImageObject',
'same_as' => 'string',
'url' => 'string',
'additional_type' => 'string',
'links' => '\Infocenter\Client\Model\DsLink[]',
'labels' => '\Infocenter\Client\Model\DsTag[]',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_value' => 'double',
'min_value' => 'double',
'unit_code' => null,
'unit_text' => null,
'value' => null,
'property_id' => null,
'value_type' => null,
'alternate_name' => null,
'description' => null,
'disambiguating_description' => null,
'image' => null,
'same_as' => null,
'url' => null,
'additional_type' => null,
'links' => null,
'labels' => null,
'name' => null    ];

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
        'max_value' => 'maxValue',
'min_value' => 'minValue',
'unit_code' => 'unitCode',
'unit_text' => 'unitText',
'value' => 'value',
'property_id' => 'propertyId',
'value_type' => 'valueType',
'alternate_name' => 'alternateName',
'description' => 'description',
'disambiguating_description' => 'disambiguatingDescription',
'image' => 'image',
'same_as' => 'sameAs',
'url' => 'url',
'additional_type' => 'additionalType',
'links' => 'links',
'labels' => 'labels',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_value' => 'setMaxValue',
'min_value' => 'setMinValue',
'unit_code' => 'setUnitCode',
'unit_text' => 'setUnitText',
'value' => 'setValue',
'property_id' => 'setPropertyId',
'value_type' => 'setValueType',
'alternate_name' => 'setAlternateName',
'description' => 'setDescription',
'disambiguating_description' => 'setDisambiguatingDescription',
'image' => 'setImage',
'same_as' => 'setSameAs',
'url' => 'setUrl',
'additional_type' => 'setAdditionalType',
'links' => 'setLinks',
'labels' => 'setLabels',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_value' => 'getMaxValue',
'min_value' => 'getMinValue',
'unit_code' => 'getUnitCode',
'unit_text' => 'getUnitText',
'value' => 'getValue',
'property_id' => 'getPropertyId',
'value_type' => 'getValueType',
'alternate_name' => 'getAlternateName',
'description' => 'getDescription',
'disambiguating_description' => 'getDisambiguatingDescription',
'image' => 'getImage',
'same_as' => 'getSameAs',
'url' => 'getUrl',
'additional_type' => 'getAdditionalType',
'links' => 'getLinks',
'labels' => 'getLabels',
'name' => 'getName'    ];

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
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['unit_code'] = isset($data['unit_code']) ? $data['unit_code'] : null;
        $this->container['unit_text'] = isset($data['unit_text']) ? $data['unit_text'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['value_type'] = isset($data['value_type']) ? $data['value_type'] : null;
        $this->container['alternate_name'] = isset($data['alternate_name']) ? $data['alternate_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disambiguating_description'] = isset($data['disambiguating_description']) ? $data['disambiguating_description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['same_as'] = isset($data['same_as']) ? $data['same_as'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['additional_type'] = isset($data['additional_type']) ? $data['additional_type'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets max_value
     *
     * @return double
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param double $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return double
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param double $min_value min_value
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets unit_code
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->container['unit_code'];
    }

    /**
     * Sets unit_code
     *
     * @param string $unit_code unit_code
     *
     * @return $this
     */
    public function setUnitCode($unit_code)
    {
        $this->container['unit_code'] = $unit_code;

        return $this;
    }

    /**
     * Gets unit_text
     *
     * @return string
     */
    public function getUnitText()
    {
        return $this->container['unit_text'];
    }

    /**
     * Sets unit_text
     *
     * @param string $unit_text unit_text
     *
     * @return $this
     */
    public function setUnitText($unit_text)
    {
        $this->container['unit_text'] = $unit_text;

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
     * Gets property_id
     *
     * @return string
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param string $property_id property_id
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param string $value_type value_type
     *
     * @return $this
     */
    public function setValueType($value_type)
    {
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets alternate_name
     *
     * @return string
     */
    public function getAlternateName()
    {
        return $this->container['alternate_name'];
    }

    /**
     * Sets alternate_name
     *
     * @param string $alternate_name alternate_name
     *
     * @return $this
     */
    public function setAlternateName($alternate_name)
    {
        $this->container['alternate_name'] = $alternate_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disambiguating_description
     *
     * @return string
     */
    public function getDisambiguatingDescription()
    {
        return $this->container['disambiguating_description'];
    }

    /**
     * Sets disambiguating_description
     *
     * @param string $disambiguating_description disambiguating_description
     *
     * @return $this
     */
    public function setDisambiguatingDescription($disambiguating_description)
    {
        $this->container['disambiguating_description'] = $disambiguating_description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Infocenter\Client\Model\DsImageObject
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Infocenter\Client\Model\DsImageObject $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets same_as
     *
     * @return string
     */
    public function getSameAs()
    {
        return $this->container['same_as'];
    }

    /**
     * Sets same_as
     *
     * @param string $same_as same_as
     *
     * @return $this
     */
    public function setSameAs($same_as)
    {
        $this->container['same_as'] = $same_as;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets additional_type
     *
     * @return string
     */
    public function getAdditionalType()
    {
        return $this->container['additional_type'];
    }

    /**
     * Sets additional_type
     *
     * @param string $additional_type additional_type
     *
     * @return $this
     */
    public function setAdditionalType($additional_type)
    {
        $this->container['additional_type'] = $additional_type;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Infocenter\Client\Model\DsLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Infocenter\Client\Model\DsLink[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Infocenter\Client\Model\DsTag[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Infocenter\Client\Model\DsTag[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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