<?php
/**
 * CreativeWork
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
 * CreativeWork Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreativeWork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreativeWork';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_reference_time' => '\DateTime',
'copyright_year' => 'double',
'encoding_format' => 'string',
'is_accessible_for_free' => 'bool',
'thumbnail_url' => 'string',
'in_language' => 'string',
'type' => 'string',
'id' => 'string',
'identifier' => 'string',
'datasource' => 'string',
'data_governance' => '\Infocenter\Client\Model\DataGovernance',
'last_modified' => '\DateTime',
'available_data_language' => 'string[]',
'alternate_name' => 'string',
'description' => 'string',
'disambiguating_description' => 'string',
'image' => '\Infocenter\Client\Model\ImageObject',
'same_as' => 'string',
'url' => 'string',
'additional_type' => 'string',
'links' => '\Infocenter\Client\Model\Link[]',
'labels' => '\Infocenter\Client\Model\Tag[]',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content_reference_time' => 'date-time',
'copyright_year' => 'double',
'encoding_format' => null,
'is_accessible_for_free' => null,
'thumbnail_url' => null,
'in_language' => null,
'type' => null,
'id' => null,
'identifier' => null,
'datasource' => null,
'data_governance' => null,
'last_modified' => 'date-time',
'available_data_language' => null,
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
        'content_reference_time' => 'contentReferenceTime',
'copyright_year' => 'copyrightYear',
'encoding_format' => 'encodingFormat',
'is_accessible_for_free' => 'isAccessibleForFree',
'thumbnail_url' => 'thumbnailUrl',
'in_language' => 'inLanguage',
'type' => 'type',
'id' => '@id',
'identifier' => 'identifier',
'datasource' => 'datasource',
'data_governance' => 'dataGovernance',
'last_modified' => 'lastModified',
'available_data_language' => 'availableDataLanguage',
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
        'content_reference_time' => 'setContentReferenceTime',
'copyright_year' => 'setCopyrightYear',
'encoding_format' => 'setEncodingFormat',
'is_accessible_for_free' => 'setIsAccessibleForFree',
'thumbnail_url' => 'setThumbnailUrl',
'in_language' => 'setInLanguage',
'type' => 'setType',
'id' => 'setId',
'identifier' => 'setIdentifier',
'datasource' => 'setDatasource',
'data_governance' => 'setDataGovernance',
'last_modified' => 'setLastModified',
'available_data_language' => 'setAvailableDataLanguage',
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
        'content_reference_time' => 'getContentReferenceTime',
'copyright_year' => 'getCopyrightYear',
'encoding_format' => 'getEncodingFormat',
'is_accessible_for_free' => 'getIsAccessibleForFree',
'thumbnail_url' => 'getThumbnailUrl',
'in_language' => 'getInLanguage',
'type' => 'getType',
'id' => 'getId',
'identifier' => 'getIdentifier',
'datasource' => 'getDatasource',
'data_governance' => 'getDataGovernance',
'last_modified' => 'getLastModified',
'available_data_language' => 'getAvailableDataLanguage',
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
        $this->container['content_reference_time'] = isset($data['content_reference_time']) ? $data['content_reference_time'] : null;
        $this->container['copyright_year'] = isset($data['copyright_year']) ? $data['copyright_year'] : null;
        $this->container['encoding_format'] = isset($data['encoding_format']) ? $data['encoding_format'] : null;
        $this->container['is_accessible_for_free'] = isset($data['is_accessible_for_free']) ? $data['is_accessible_for_free'] : null;
        $this->container['thumbnail_url'] = isset($data['thumbnail_url']) ? $data['thumbnail_url'] : null;
        $this->container['in_language'] = isset($data['in_language']) ? $data['in_language'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['available_data_language'] = isset($data['available_data_language']) ? $data['available_data_language'] : null;
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
     * Gets content_reference_time
     *
     * @return \DateTime
     */
    public function getContentReferenceTime()
    {
        return $this->container['content_reference_time'];
    }

    /**
     * Sets content_reference_time
     *
     * @param \DateTime $content_reference_time content_reference_time
     *
     * @return $this
     */
    public function setContentReferenceTime($content_reference_time)
    {
        $this->container['content_reference_time'] = $content_reference_time;

        return $this;
    }

    /**
     * Gets copyright_year
     *
     * @return double
     */
    public function getCopyrightYear()
    {
        return $this->container['copyright_year'];
    }

    /**
     * Sets copyright_year
     *
     * @param double $copyright_year copyright_year
     *
     * @return $this
     */
    public function setCopyrightYear($copyright_year)
    {
        $this->container['copyright_year'] = $copyright_year;

        return $this;
    }

    /**
     * Gets encoding_format
     *
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->container['encoding_format'];
    }

    /**
     * Sets encoding_format
     *
     * @param string $encoding_format encoding_format
     *
     * @return $this
     */
    public function setEncodingFormat($encoding_format)
    {
        $this->container['encoding_format'] = $encoding_format;

        return $this;
    }

    /**
     * Gets is_accessible_for_free
     *
     * @return bool
     */
    public function getIsAccessibleForFree()
    {
        return $this->container['is_accessible_for_free'];
    }

    /**
     * Sets is_accessible_for_free
     *
     * @param bool $is_accessible_for_free is_accessible_for_free
     *
     * @return $this
     */
    public function setIsAccessibleForFree($is_accessible_for_free)
    {
        $this->container['is_accessible_for_free'] = $is_accessible_for_free;

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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets datasource
     *
     * @return string
     */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
     * Sets datasource
     *
     * @param string $datasource datasource
     *
     * @return $this
     */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;

        return $this;
    }

    /**
     * Gets data_governance
     *
     * @return \Infocenter\Client\Model\DataGovernance
     */
    public function getDataGovernance()
    {
        return $this->container['data_governance'];
    }

    /**
     * Sets data_governance
     *
     * @param \Infocenter\Client\Model\DataGovernance $data_governance data_governance
     *
     * @return $this
     */
    public function setDataGovernance($data_governance)
    {
        $this->container['data_governance'] = $data_governance;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets available_data_language
     *
     * @return string[]
     */
    public function getAvailableDataLanguage()
    {
        return $this->container['available_data_language'];
    }

    /**
     * Sets available_data_language
     *
     * @param string[] $available_data_language available_data_language
     *
     * @return $this
     */
    public function setAvailableDataLanguage($available_data_language)
    {
        $this->container['available_data_language'] = $available_data_language;

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
     * @return \Infocenter\Client\Model\ImageObject
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Infocenter\Client\Model\ImageObject $image image
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
     * @return \Infocenter\Client\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Infocenter\Client\Model\Link[] $links links
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
     * @return \Infocenter\Client\Model\Tag[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Infocenter\Client\Model\Tag[] $labels labels
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
