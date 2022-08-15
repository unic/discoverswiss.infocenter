<?php
/**
 * DsAggregateRating
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
 * DsAggregateRating Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsAggregateRating implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregateRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rating_count' => 'int',
'best_rating' => 'double',
'rating_value' => 'double',
'review_aspect' => 'string',
'worst_rating' => 'double',
'alternate_name' => 'string',
'description' => 'string',
'disambiguating_description' => 'string',
'image' => '\Infocenter\Client\Model\DsImageObjectSimplex',
'same_as' => 'string',
'url' => 'string',
'additional_type' => 'string',
'link' => '\Infocenter\Client\Model\DsLink[]',
'potential_action' => '\Infocenter\Client\Model\DsAction[]',
'name' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rating_count' => 'int32',
'best_rating' => 'double',
'rating_value' => 'double',
'review_aspect' => null,
'worst_rating' => 'double',
'alternate_name' => null,
'description' => null,
'disambiguating_description' => null,
'image' => null,
'same_as' => null,
'url' => null,
'additional_type' => null,
'link' => null,
'potential_action' => null,
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
        'rating_count' => 'ratingCount',
'best_rating' => 'bestRating',
'rating_value' => 'ratingValue',
'review_aspect' => 'reviewAspect',
'worst_rating' => 'worstRating',
'alternate_name' => 'alternateName',
'description' => 'description',
'disambiguating_description' => 'disambiguatingDescription',
'image' => 'image',
'same_as' => 'sameAs',
'url' => 'url',
'additional_type' => 'additionalType',
'link' => 'link',
'potential_action' => 'potentialAction',
'name' => 'name',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rating_count' => 'setRatingCount',
'best_rating' => 'setBestRating',
'rating_value' => 'setRatingValue',
'review_aspect' => 'setReviewAspect',
'worst_rating' => 'setWorstRating',
'alternate_name' => 'setAlternateName',
'description' => 'setDescription',
'disambiguating_description' => 'setDisambiguatingDescription',
'image' => 'setImage',
'same_as' => 'setSameAs',
'url' => 'setUrl',
'additional_type' => 'setAdditionalType',
'link' => 'setLink',
'potential_action' => 'setPotentialAction',
'name' => 'setName',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rating_count' => 'getRatingCount',
'best_rating' => 'getBestRating',
'rating_value' => 'getRatingValue',
'review_aspect' => 'getReviewAspect',
'worst_rating' => 'getWorstRating',
'alternate_name' => 'getAlternateName',
'description' => 'getDescription',
'disambiguating_description' => 'getDisambiguatingDescription',
'image' => 'getImage',
'same_as' => 'getSameAs',
'url' => 'getUrl',
'additional_type' => 'getAdditionalType',
'link' => 'getLink',
'potential_action' => 'getPotentialAction',
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
        $this->container['rating_count'] = isset($data['rating_count']) ? $data['rating_count'] : null;
        $this->container['best_rating'] = isset($data['best_rating']) ? $data['best_rating'] : null;
        $this->container['rating_value'] = isset($data['rating_value']) ? $data['rating_value'] : null;
        $this->container['review_aspect'] = isset($data['review_aspect']) ? $data['review_aspect'] : null;
        $this->container['worst_rating'] = isset($data['worst_rating']) ? $data['worst_rating'] : null;
        $this->container['alternate_name'] = isset($data['alternate_name']) ? $data['alternate_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disambiguating_description'] = isset($data['disambiguating_description']) ? $data['disambiguating_description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['same_as'] = isset($data['same_as']) ? $data['same_as'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['additional_type'] = isset($data['additional_type']) ? $data['additional_type'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['potential_action'] = isset($data['potential_action']) ? $data['potential_action'] : null;
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
     * Gets rating_count
     *
     * @return int
     */
    public function getRatingCount()
    {
        return $this->container['rating_count'];
    }

    /**
     * Sets rating_count
     *
     * @param int $rating_count rating_count
     *
     * @return $this
     */
    public function setRatingCount($rating_count)
    {
        $this->container['rating_count'] = $rating_count;

        return $this;
    }

    /**
     * Gets best_rating
     *
     * @return double
     */
    public function getBestRating()
    {
        return $this->container['best_rating'];
    }

    /**
     * Sets best_rating
     *
     * @param double $best_rating best_rating
     *
     * @return $this
     */
    public function setBestRating($best_rating)
    {
        $this->container['best_rating'] = $best_rating;

        return $this;
    }

    /**
     * Gets rating_value
     *
     * @return double
     */
    public function getRatingValue()
    {
        return $this->container['rating_value'];
    }

    /**
     * Sets rating_value
     *
     * @param double $rating_value rating_value
     *
     * @return $this
     */
    public function setRatingValue($rating_value)
    {
        $this->container['rating_value'] = $rating_value;

        return $this;
    }

    /**
     * Gets review_aspect
     *
     * @return string
     */
    public function getReviewAspect()
    {
        return $this->container['review_aspect'];
    }

    /**
     * Sets review_aspect
     *
     * @param string $review_aspect review_aspect
     *
     * @return $this
     */
    public function setReviewAspect($review_aspect)
    {
        $this->container['review_aspect'] = $review_aspect;

        return $this;
    }

    /**
     * Gets worst_rating
     *
     * @return double
     */
    public function getWorstRating()
    {
        return $this->container['worst_rating'];
    }

    /**
     * Sets worst_rating
     *
     * @param double $worst_rating worst_rating
     *
     * @return $this
     */
    public function setWorstRating($worst_rating)
    {
        $this->container['worst_rating'] = $worst_rating;

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
     * Gets potential_action
     *
     * @return \Infocenter\Client\Model\DsAction[]
     */
    public function getPotentialAction()
    {
        return $this->container['potential_action'];
    }

    /**
     * Sets potential_action
     *
     * @param \Infocenter\Client\Model\DsAction[] $potential_action potential_action
     *
     * @return $this
     */
    public function setPotentialAction($potential_action)
    {
        $this->container['potential_action'] = $potential_action;

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
