<?php
/**
 * DsImageObject
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
 * DsImageObject Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsImageObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'caption' => 'string',
'data_governance' => '\Infocenter\Client\Model\DsDataGovernance',
'content_url' => 'string',
'in_language' => 'string',
'thumbnail_url' => 'string',
'id' => 'string',
'identifier' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'caption' => null,
'data_governance' => null,
'content_url' => null,
'in_language' => null,
'thumbnail_url' => null,
'id' => null,
'identifier' => null    ];

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
        'caption' => 'caption',
'data_governance' => 'dataGovernance',
'content_url' => 'contentUrl',
'in_language' => 'inLanguage',
'thumbnail_url' => 'thumbnailUrl',
'id' => 'id',
'identifier' => 'identifier'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caption' => 'setCaption',
'data_governance' => 'setDataGovernance',
'content_url' => 'setContentUrl',
'in_language' => 'setInLanguage',
'thumbnail_url' => 'setThumbnailUrl',
'id' => 'setId',
'identifier' => 'setIdentifier'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caption' => 'getCaption',
'data_governance' => 'getDataGovernance',
'content_url' => 'getContentUrl',
'in_language' => 'getInLanguage',
'thumbnail_url' => 'getThumbnailUrl',
'id' => 'getId',
'identifier' => 'getIdentifier'    ];

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
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['content_url'] = isset($data['content_url']) ? $data['content_url'] : null;
        $this->container['in_language'] = isset($data['in_language']) ? $data['in_language'] : null;
        $this->container['thumbnail_url'] = isset($data['thumbnail_url']) ? $data['thumbnail_url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
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
     * Gets caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets data_governance
     *
     * @return \Infocenter\Client\Model\DsDataGovernance
     */
    public function getDataGovernance()
    {
        return $this->container['data_governance'];
    }

    /**
     * Sets data_governance
     *
     * @param \Infocenter\Client\Model\DsDataGovernance $data_governance data_governance
     *
     * @return $this
     */
    public function setDataGovernance($data_governance)
    {
        $this->container['data_governance'] = $data_governance;

        return $this;
    }

    /**
     * Gets content_url
     *
     * @return string
     */
    public function getContentUrl()
    {
        return $this->container['content_url'];
    }

    /**
     * Sets content_url
     *
     * @param string $content_url content_url
     *
     * @return $this
     */
    public function setContentUrl($content_url)
    {
        $this->container['content_url'] = $content_url;

        return $this;
    }

    /**
     * Gets in_language
     *
     * @return string
     */
    public function getInLanguage()
    {
        return $this->container['in_language'];
    }

    /**
     * Sets in_language
     *
     * @param string $in_language in_language
     *
     * @return $this
     */
    public function setInLanguage($in_language)
    {
        $this->container['in_language'] = $in_language;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string $thumbnail_url thumbnail_url
     *
     * @return $this
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        $this->container['thumbnail_url'] = $thumbnail_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
