<?php
/**
 * DsContactPoint
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
 * DsContactPoint Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsContactPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_language' => 'string[]',
'contact_type' => 'string',
'email' => 'string',
'fax_number' => 'string',
'telephone' => 'string',
'hours_available' => '\Infocenter\Client\Model\DsOpeningHoursSpecification[]',
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
        'available_language' => null,
'contact_type' => null,
'email' => null,
'fax_number' => null,
'telephone' => null,
'hours_available' => null,
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
        'available_language' => 'availableLanguage',
'contact_type' => 'contactType',
'email' => 'email',
'fax_number' => 'faxNumber',
'telephone' => 'telephone',
'hours_available' => 'hoursAvailable',
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
        'available_language' => 'setAvailableLanguage',
'contact_type' => 'setContactType',
'email' => 'setEmail',
'fax_number' => 'setFaxNumber',
'telephone' => 'setTelephone',
'hours_available' => 'setHoursAvailable',
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
        'available_language' => 'getAvailableLanguage',
'contact_type' => 'getContactType',
'email' => 'getEmail',
'fax_number' => 'getFaxNumber',
'telephone' => 'getTelephone',
'hours_available' => 'getHoursAvailable',
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
        $this->container['available_language'] = isset($data['available_language']) ? $data['available_language'] : null;
        $this->container['contact_type'] = isset($data['contact_type']) ? $data['contact_type'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['hours_available'] = isset($data['hours_available']) ? $data['hours_available'] : null;
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
     * Gets available_language
     *
     * @return string[]
     */
    public function getAvailableLanguage()
    {
        return $this->container['available_language'];
    }

    /**
     * Sets available_language
     *
     * @param string[] $available_language List of 2-letter-iso-code (en, de, it, ...)
     *
     * @return $this
     */
    public function setAvailableLanguage($available_language)
    {
        $this->container['available_language'] = $available_language;

        return $this;
    }

    /**
     * Gets contact_type
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param string $contact_type contact_type
     *
     * @return $this
     */
    public function setContactType($contact_type)
    {
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number fax_number
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets hours_available
     *
     * @return \Infocenter\Client\Model\DsOpeningHoursSpecification[]
     */
    public function getHoursAvailable()
    {
        return $this->container['hours_available'];
    }

    /**
     * Sets hours_available
     *
     * @param \Infocenter\Client\Model\DsOpeningHoursSpecification[] $hours_available hours_available
     *
     * @return $this
     */
    public function setHoursAvailable($hours_available)
    {
        $this->container['hours_available'] = $hours_available;

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
     * @param string $description Multilingual. It is automatically translated if the description is not provided in all languages. Translated text is trimmed to 9000 symbols. Can contain HTML
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
     * @param string $disambiguating_description Multilingual. Can contain HTML
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
     * @param string $url URL of the item
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
     * @param string $additional_type Name of the 'real', more descriptive class which has no additional properties. Examples are schema.org/Country, schema.org/State, schema.org/City
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
     * @param \Infocenter\Client\Model\DsLink[] $link Web-links and general links between things
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
     * @param string $name Multilingual. Can contain HTML
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
