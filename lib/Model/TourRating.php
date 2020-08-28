<?php
/**
 * TourRating
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
 * TourRating Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TourRating implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TourRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition' => 'int',
'difficulty' => 'int',
'technique' => 'int',
'quality_of_experience' => 'int',
'landscape' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'condition' => 'int32',
'difficulty' => 'int32',
'technique' => 'int32',
'quality_of_experience' => 'int32',
'landscape' => 'int32'    ];

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
        'condition' => 'condition',
'difficulty' => 'difficulty',
'technique' => 'technique',
'quality_of_experience' => 'qualityOfExperience',
'landscape' => 'landscape'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
'difficulty' => 'setDifficulty',
'technique' => 'setTechnique',
'quality_of_experience' => 'setQualityOfExperience',
'landscape' => 'setLandscape'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
'difficulty' => 'getDifficulty',
'technique' => 'getTechnique',
'quality_of_experience' => 'getQualityOfExperience',
'landscape' => 'getLandscape'    ];

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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['difficulty'] = isset($data['difficulty']) ? $data['difficulty'] : null;
        $this->container['technique'] = isset($data['technique']) ? $data['technique'] : null;
        $this->container['quality_of_experience'] = isset($data['quality_of_experience']) ? $data['quality_of_experience'] : null;
        $this->container['landscape'] = isset($data['landscape']) ? $data['landscape'] : null;
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
     * Gets condition
     *
     * @return int
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param int $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets difficulty
     *
     * @return int
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param int $difficulty difficulty
     *
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets technique
     *
     * @return int
     */
    public function getTechnique()
    {
        return $this->container['technique'];
    }

    /**
     * Sets technique
     *
     * @param int $technique technique
     *
     * @return $this
     */
    public function setTechnique($technique)
    {
        $this->container['technique'] = $technique;

        return $this;
    }

    /**
     * Gets quality_of_experience
     *
     * @return int
     */
    public function getQualityOfExperience()
    {
        return $this->container['quality_of_experience'];
    }

    /**
     * Sets quality_of_experience
     *
     * @param int $quality_of_experience quality_of_experience
     *
     * @return $this
     */
    public function setQualityOfExperience($quality_of_experience)
    {
        $this->container['quality_of_experience'] = $quality_of_experience;

        return $this;
    }

    /**
     * Gets landscape
     *
     * @return int
     */
    public function getLandscape()
    {
        return $this->container['landscape'];
    }

    /**
     * Sets landscape
     *
     * @param int $landscape landscape
     *
     * @return $this
     */
    public function setLandscape($landscape)
    {
        $this->container['landscape'] = $landscape;

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
