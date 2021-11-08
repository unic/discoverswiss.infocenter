<?php
/**
 * DsVideoObject
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
 * DsVideoObject Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsVideoObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'caption' => 'string',
'content_size' => 'string',
'content_url' => 'string',
'embed_url' => 'string',
'height' => 'string',
'width' => 'string',
'additional_property' => '\Infocenter\Client\Model\DsPropertyValue[]',
'content_reference_time' => '\DateTime',
'copyright_year' => 'int',
'encoding_format' => 'string',
'is_accessible_for_free' => 'bool',
'thumbnail_url' => 'string',
'in_language' => 'string',
'category' => '\Infocenter\Client\Model\DsCategorySimplex[]',
'contained_in_place' => '\Infocenter\Client\Model\DsPlaceSimplex[]',
'tag' => '\Infocenter\Client\Model\DsTagSimplex[]',
'campaign_tag' => '\Infocenter\Client\Model\DsTagSimplex[]',
'profile_tag' => '\Infocenter\Client\Model\DsTagSimplex[]',
'id' => 'string',
'identifier' => 'string',
'removed' => 'bool',
'data_governance' => '\Infocenter\Client\Model\DsDataGovernance',
'last_modified' => '\DateTime',
'available_data_language' => 'string[]',
'auto_translated_data' => 'bool',
'license' => 'string',
'alternate_name' => 'string',
'description' => 'string',
'disambiguating_description' => 'string',
'image' => '\Infocenter\Client\Model\DsImageObjectSimplex',
'same_as' => 'string',
'url' => 'string',
'additional_type' => 'string',
'link' => '\Infocenter\Client\Model\DsLink[]',
'name' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'caption' => null,
'content_size' => null,
'content_url' => null,
'embed_url' => null,
'height' => null,
'width' => null,
'additional_property' => null,
'content_reference_time' => 'date-time',
'copyright_year' => 'int32',
'encoding_format' => null,
'is_accessible_for_free' => null,
'thumbnail_url' => null,
'in_language' => null,
'category' => null,
'contained_in_place' => null,
'tag' => null,
'campaign_tag' => null,
'profile_tag' => null,
'id' => null,
'identifier' => null,
'removed' => null,
'data_governance' => null,
'last_modified' => 'date-time',
'available_data_language' => null,
'auto_translated_data' => null,
'license' => null,
'alternate_name' => null,
'description' => null,
'disambiguating_description' => null,
'image' => null,
'same_as' => null,
'url' => null,
'additional_type' => null,
'link' => null,
'name' => null,
'type' => null    ];

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
'content_size' => 'contentSize',
'content_url' => 'contentUrl',
'embed_url' => 'embedUrl',
'height' => 'height',
'width' => 'width',
'additional_property' => 'additionalProperty',
'content_reference_time' => 'contentReferenceTime',
'copyright_year' => 'copyrightYear',
'encoding_format' => 'encodingFormat',
'is_accessible_for_free' => 'isAccessibleForFree',
'thumbnail_url' => 'thumbnailUrl',
'in_language' => 'inLanguage',
'category' => 'category',
'contained_in_place' => 'containedInPlace',
'tag' => 'tag',
'campaign_tag' => 'campaignTag',
'profile_tag' => 'profileTag',
'id' => '@id',
'identifier' => 'identifier',
'removed' => 'removed',
'data_governance' => 'dataGovernance',
'last_modified' => 'lastModified',
'available_data_language' => 'availableDataLanguage',
'auto_translated_data' => 'autoTranslatedData',
'license' => 'license',
'alternate_name' => 'alternateName',
'description' => 'description',
'disambiguating_description' => 'disambiguatingDescription',
'image' => 'image',
'same_as' => 'sameAs',
'url' => 'url',
'additional_type' => 'additionalType',
'link' => 'link',
'name' => 'name',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caption' => 'setCaption',
'content_size' => 'setContentSize',
'content_url' => 'setContentUrl',
'embed_url' => 'setEmbedUrl',
'height' => 'setHeight',
'width' => 'setWidth',
'additional_property' => 'setAdditionalProperty',
'content_reference_time' => 'setContentReferenceTime',
'copyright_year' => 'setCopyrightYear',
'encoding_format' => 'setEncodingFormat',
'is_accessible_for_free' => 'setIsAccessibleForFree',
'thumbnail_url' => 'setThumbnailUrl',
'in_language' => 'setInLanguage',
'category' => 'setCategory',
'contained_in_place' => 'setContainedInPlace',
'tag' => 'setTag',
'campaign_tag' => 'setCampaignTag',
'profile_tag' => 'setProfileTag',
'id' => 'setId',
'identifier' => 'setIdentifier',
'removed' => 'setRemoved',
'data_governance' => 'setDataGovernance',
'last_modified' => 'setLastModified',
'available_data_language' => 'setAvailableDataLanguage',
'auto_translated_data' => 'setAutoTranslatedData',
'license' => 'setLicense',
'alternate_name' => 'setAlternateName',
'description' => 'setDescription',
'disambiguating_description' => 'setDisambiguatingDescription',
'image' => 'setImage',
'same_as' => 'setSameAs',
'url' => 'setUrl',
'additional_type' => 'setAdditionalType',
'link' => 'setLink',
'name' => 'setName',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caption' => 'getCaption',
'content_size' => 'getContentSize',
'content_url' => 'getContentUrl',
'embed_url' => 'getEmbedUrl',
'height' => 'getHeight',
'width' => 'getWidth',
'additional_property' => 'getAdditionalProperty',
'content_reference_time' => 'getContentReferenceTime',
'copyright_year' => 'getCopyrightYear',
'encoding_format' => 'getEncodingFormat',
'is_accessible_for_free' => 'getIsAccessibleForFree',
'thumbnail_url' => 'getThumbnailUrl',
'in_language' => 'getInLanguage',
'category' => 'getCategory',
'contained_in_place' => 'getContainedInPlace',
'tag' => 'getTag',
'campaign_tag' => 'getCampaignTag',
'profile_tag' => 'getProfileTag',
'id' => 'getId',
'identifier' => 'getIdentifier',
'removed' => 'getRemoved',
'data_governance' => 'getDataGovernance',
'last_modified' => 'getLastModified',
'available_data_language' => 'getAvailableDataLanguage',
'auto_translated_data' => 'getAutoTranslatedData',
'license' => 'getLicense',
'alternate_name' => 'getAlternateName',
'description' => 'getDescription',
'disambiguating_description' => 'getDisambiguatingDescription',
'image' => 'getImage',
'same_as' => 'getSameAs',
'url' => 'getUrl',
'additional_type' => 'getAdditionalType',
'link' => 'getLink',
'name' => 'getName',
'type' => 'getType'    ];

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
        $this->container['content_size'] = isset($data['content_size']) ? $data['content_size'] : null;
        $this->container['content_url'] = isset($data['content_url']) ? $data['content_url'] : null;
        $this->container['embed_url'] = isset($data['embed_url']) ? $data['embed_url'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['additional_property'] = isset($data['additional_property']) ? $data['additional_property'] : null;
        $this->container['content_reference_time'] = isset($data['content_reference_time']) ? $data['content_reference_time'] : null;
        $this->container['copyright_year'] = isset($data['copyright_year']) ? $data['copyright_year'] : null;
        $this->container['encoding_format'] = isset($data['encoding_format']) ? $data['encoding_format'] : null;
        $this->container['is_accessible_for_free'] = isset($data['is_accessible_for_free']) ? $data['is_accessible_for_free'] : null;
        $this->container['thumbnail_url'] = isset($data['thumbnail_url']) ? $data['thumbnail_url'] : null;
        $this->container['in_language'] = isset($data['in_language']) ? $data['in_language'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['contained_in_place'] = isset($data['contained_in_place']) ? $data['contained_in_place'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['campaign_tag'] = isset($data['campaign_tag']) ? $data['campaign_tag'] : null;
        $this->container['profile_tag'] = isset($data['profile_tag']) ? $data['profile_tag'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['available_data_language'] = isset($data['available_data_language']) ? $data['available_data_language'] : null;
        $this->container['auto_translated_data'] = isset($data['auto_translated_data']) ? $data['auto_translated_data'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['alternate_name'] = isset($data['alternate_name']) ? $data['alternate_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disambiguating_description'] = isset($data['disambiguating_description']) ? $data['disambiguating_description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['same_as'] = isset($data['same_as']) ? $data['same_as'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['additional_type'] = isset($data['additional_type']) ? $data['additional_type'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets content_size
     *
     * @return string
     */
    public function getContentSize()
    {
        return $this->container['content_size'];
    }

    /**
     * Sets content_size
     *
     * @param string $content_size content_size
     *
     * @return $this
     */
    public function setContentSize($content_size)
    {
        $this->container['content_size'] = $content_size;

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
     * Gets embed_url
     *
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->container['embed_url'];
    }

    /**
     * Sets embed_url
     *
     * @param string $embed_url embed_url
     *
     * @return $this
     */
    public function setEmbedUrl($embed_url)
    {
        $this->container['embed_url'] = $embed_url;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
     * @return int
     */
    public function getCopyrightYear()
    {
        return $this->container['copyright_year'];
    }

    /**
     * Sets copyright_year
     *
     * @param int $copyright_year copyright_year
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
     * Gets category
     *
     * @return \Infocenter\Client\Model\DsCategorySimplex[]
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Infocenter\Client\Model\DsCategorySimplex[] $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets contained_in_place
     *
     * @return \Infocenter\Client\Model\DsPlaceSimplex[]
     */
    public function getContainedInPlace()
    {
        return $this->container['contained_in_place'];
    }

    /**
     * Sets contained_in_place
     *
     * @param \Infocenter\Client\Model\DsPlaceSimplex[] $contained_in_place contained_in_place
     *
     * @return $this
     */
    public function setContainedInPlace($contained_in_place)
    {
        $this->container['contained_in_place'] = $contained_in_place;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return \Infocenter\Client\Model\DsTagSimplex[]
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \Infocenter\Client\Model\DsTagSimplex[] $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets campaign_tag
     *
     * @return \Infocenter\Client\Model\DsTagSimplex[]
     */
    public function getCampaignTag()
    {
        return $this->container['campaign_tag'];
    }

    /**
     * Sets campaign_tag
     *
     * @param \Infocenter\Client\Model\DsTagSimplex[] $campaign_tag campaign_tag
     *
     * @return $this
     */
    public function setCampaignTag($campaign_tag)
    {
        $this->container['campaign_tag'] = $campaign_tag;

        return $this;
    }

    /**
     * Gets profile_tag
     *
     * @return \Infocenter\Client\Model\DsTagSimplex[]
     */
    public function getProfileTag()
    {
        return $this->container['profile_tag'];
    }

    /**
     * Sets profile_tag
     *
     * @param \Infocenter\Client\Model\DsTagSimplex[] $profile_tag profile_tag
     *
     * @return $this
     */
    public function setProfileTag($profile_tag)
    {
        $this->container['profile_tag'] = $profile_tag;

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
     * Gets removed
     *
     * @return bool
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     *
     * @param bool $removed removed
     *
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

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
     * Gets auto_translated_data
     *
     * @return bool
     */
    public function getAutoTranslatedData()
    {
        return $this->container['auto_translated_data'];
    }

    /**
     * Sets auto_translated_data
     *
     * @param bool $auto_translated_data auto_translated_data
     *
     * @return $this
     */
    public function setAutoTranslatedData($auto_translated_data)
    {
        $this->container['auto_translated_data'] = $auto_translated_data;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string $license license
     *
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

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
     * @return \Infocenter\Client\Model\DsImageObjectSimplex
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Infocenter\Client\Model\DsImageObjectSimplex $image image
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
     * Gets link
     *
     * @return \Infocenter\Client\Model\DsLink[]
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \Infocenter\Client\Model\DsLink[] $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
