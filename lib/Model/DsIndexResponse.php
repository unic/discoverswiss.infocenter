<?php
/**
 * DsIndexResponse
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
 * DsIndexResponse Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsIndexResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IndexResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'oua_id' => 'int',
'identifier' => 'string',
'datasource' => 'string[]',
'data_governance' => '\Infocenter\Client\Model\DsDataGovernance',
'type' => 'string',
'additional_type' => 'string',
'address' => '\Infocenter\Client\Model\DsPostalAddress',
'geo' => '\Infocenter\Client\Model\DsGeoCoordinates',
'opening_hours' => 'string',
'image' => '\Infocenter\Client\Model\DsImageObjectSimplex',
'name' => 'string',
'description' => 'string',
'contained_in_place' => 'string',
'state' => 'string',
'time' => 'int',
'rating' => '\Infocenter\Client\Model\DsTourRating',
'profile_tag' => 'string[]',
'schedule' => '\Infocenter\Client\Model\DsSchedule[]',
'next_occurrence' => '\DateTime',
'recurred_count' => 'int',
'elevation' => '\Infocenter\Client\Model\DsTourElevation',
'link' => '\Infocenter\Client\Model\DsLink[]',
'auto_translated_data' => 'bool',
'ticketing_contact' => 'string',
'price_information' => 'string',
'organizer' => '\Infocenter\Client\Model\DsOrganization',
'last_modified' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'oua_id' => 'int32',
'identifier' => null,
'datasource' => null,
'data_governance' => null,
'type' => null,
'additional_type' => null,
'address' => null,
'geo' => null,
'opening_hours' => null,
'image' => null,
'name' => null,
'description' => null,
'contained_in_place' => null,
'state' => null,
'time' => 'int32',
'rating' => null,
'profile_tag' => null,
'schedule' => null,
'next_occurrence' => 'date-time',
'recurred_count' => 'int32',
'elevation' => null,
'link' => null,
'auto_translated_data' => null,
'ticketing_contact' => null,
'price_information' => null,
'organizer' => null,
'last_modified' => 'date-time'    ];

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
        'id' => '@id',
'oua_id' => 'ouaId',
'identifier' => 'identifier',
'datasource' => 'datasource',
'data_governance' => 'dataGovernance',
'type' => 'type',
'additional_type' => 'additionalType',
'address' => 'address',
'geo' => 'geo',
'opening_hours' => 'openingHours',
'image' => 'image',
'name' => 'name',
'description' => 'description',
'contained_in_place' => 'containedInPlace',
'state' => 'state',
'time' => 'time',
'rating' => 'rating',
'profile_tag' => 'profileTag',
'schedule' => 'schedule',
'next_occurrence' => 'nextOccurrence',
'recurred_count' => 'recurredCount',
'elevation' => 'elevation',
'link' => 'link',
'auto_translated_data' => 'autoTranslatedData',
'ticketing_contact' => 'ticketingContact',
'price_information' => 'priceInformation',
'organizer' => 'organizer',
'last_modified' => 'lastModified'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'oua_id' => 'setOuaId',
'identifier' => 'setIdentifier',
'datasource' => 'setDatasource',
'data_governance' => 'setDataGovernance',
'type' => 'setType',
'additional_type' => 'setAdditionalType',
'address' => 'setAddress',
'geo' => 'setGeo',
'opening_hours' => 'setOpeningHours',
'image' => 'setImage',
'name' => 'setName',
'description' => 'setDescription',
'contained_in_place' => 'setContainedInPlace',
'state' => 'setState',
'time' => 'setTime',
'rating' => 'setRating',
'profile_tag' => 'setProfileTag',
'schedule' => 'setSchedule',
'next_occurrence' => 'setNextOccurrence',
'recurred_count' => 'setRecurredCount',
'elevation' => 'setElevation',
'link' => 'setLink',
'auto_translated_data' => 'setAutoTranslatedData',
'ticketing_contact' => 'setTicketingContact',
'price_information' => 'setPriceInformation',
'organizer' => 'setOrganizer',
'last_modified' => 'setLastModified'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'oua_id' => 'getOuaId',
'identifier' => 'getIdentifier',
'datasource' => 'getDatasource',
'data_governance' => 'getDataGovernance',
'type' => 'getType',
'additional_type' => 'getAdditionalType',
'address' => 'getAddress',
'geo' => 'getGeo',
'opening_hours' => 'getOpeningHours',
'image' => 'getImage',
'name' => 'getName',
'description' => 'getDescription',
'contained_in_place' => 'getContainedInPlace',
'state' => 'getState',
'time' => 'getTime',
'rating' => 'getRating',
'profile_tag' => 'getProfileTag',
'schedule' => 'getSchedule',
'next_occurrence' => 'getNextOccurrence',
'recurred_count' => 'getRecurredCount',
'elevation' => 'getElevation',
'link' => 'getLink',
'auto_translated_data' => 'getAutoTranslatedData',
'ticketing_contact' => 'getTicketingContact',
'price_information' => 'getPriceInformation',
'organizer' => 'getOrganizer',
'last_modified' => 'getLastModified'    ];

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
        $this->container['oua_id'] = isset($data['oua_id']) ? $data['oua_id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['additional_type'] = isset($data['additional_type']) ? $data['additional_type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['opening_hours'] = isset($data['opening_hours']) ? $data['opening_hours'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['contained_in_place'] = isset($data['contained_in_place']) ? $data['contained_in_place'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['profile_tag'] = isset($data['profile_tag']) ? $data['profile_tag'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['next_occurrence'] = isset($data['next_occurrence']) ? $data['next_occurrence'] : null;
        $this->container['recurred_count'] = isset($data['recurred_count']) ? $data['recurred_count'] : null;
        $this->container['elevation'] = isset($data['elevation']) ? $data['elevation'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['auto_translated_data'] = isset($data['auto_translated_data']) ? $data['auto_translated_data'] : null;
        $this->container['ticketing_contact'] = isset($data['ticketing_contact']) ? $data['ticketing_contact'] : null;
        $this->container['price_information'] = isset($data['price_information']) ? $data['price_information'] : null;
        $this->container['organizer'] = isset($data['organizer']) ? $data['organizer'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
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
     * Gets oua_id
     *
     * @return int
     */
    public function getOuaId()
    {
        return $this->container['oua_id'];
    }

    /**
     * Sets oua_id
     *
     * @param int $oua_id oua_id
     *
     * @return $this
     */
    public function setOuaId($oua_id)
    {
        $this->container['oua_id'] = $oua_id;

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
     * @return string[]
     */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
     * Sets datasource
     *
     * @param string[] $datasource datasource
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
     * Gets address
     *
     * @return \Infocenter\Client\Model\DsPostalAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Infocenter\Client\Model\DsPostalAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \Infocenter\Client\Model\DsGeoCoordinates
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \Infocenter\Client\Model\DsGeoCoordinates $geo geo
     *
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets opening_hours
     *
     * @return string
     */
    public function getOpeningHours()
    {
        return $this->container['opening_hours'];
    }

    /**
     * Sets opening_hours
     *
     * @param string $opening_hours opening_hours
     *
     * @return $this
     */
    public function setOpeningHours($opening_hours)
    {
        $this->container['opening_hours'] = $opening_hours;

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
     * Gets contained_in_place
     *
     * @return string
     */
    public function getContainedInPlace()
    {
        return $this->container['contained_in_place'];
    }

    /**
     * Sets contained_in_place
     *
     * @param string $contained_in_place contained_in_place
     *
     * @return $this
     */
    public function setContainedInPlace($contained_in_place)
    {
        $this->container['contained_in_place'] = $contained_in_place;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return \Infocenter\Client\Model\DsTourRating
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param \Infocenter\Client\Model\DsTourRating $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets profile_tag
     *
     * @return string[]
     */
    public function getProfileTag()
    {
        return $this->container['profile_tag'];
    }

    /**
     * Sets profile_tag
     *
     * @param string[] $profile_tag profile_tag
     *
     * @return $this
     */
    public function setProfileTag($profile_tag)
    {
        $this->container['profile_tag'] = $profile_tag;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Infocenter\Client\Model\DsSchedule[]
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Infocenter\Client\Model\DsSchedule[] $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets next_occurrence
     *
     * @return \DateTime
     */
    public function getNextOccurrence()
    {
        return $this->container['next_occurrence'];
    }

    /**
     * Sets next_occurrence
     *
     * @param \DateTime $next_occurrence next_occurrence
     *
     * @return $this
     */
    public function setNextOccurrence($next_occurrence)
    {
        $this->container['next_occurrence'] = $next_occurrence;

        return $this;
    }

    /**
     * Gets recurred_count
     *
     * @return int
     */
    public function getRecurredCount()
    {
        return $this->container['recurred_count'];
    }

    /**
     * Sets recurred_count
     *
     * @param int $recurred_count recurred_count
     *
     * @return $this
     */
    public function setRecurredCount($recurred_count)
    {
        $this->container['recurred_count'] = $recurred_count;

        return $this;
    }

    /**
     * Gets elevation
     *
     * @return \Infocenter\Client\Model\DsTourElevation
     */
    public function getElevation()
    {
        return $this->container['elevation'];
    }

    /**
     * Sets elevation
     *
     * @param \Infocenter\Client\Model\DsTourElevation $elevation elevation
     *
     * @return $this
     */
    public function setElevation($elevation)
    {
        $this->container['elevation'] = $elevation;

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
     * Gets ticketing_contact
     *
     * @return string
     */
    public function getTicketingContact()
    {
        return $this->container['ticketing_contact'];
    }

    /**
     * Sets ticketing_contact
     *
     * @param string $ticketing_contact ticketing_contact
     *
     * @return $this
     */
    public function setTicketingContact($ticketing_contact)
    {
        $this->container['ticketing_contact'] = $ticketing_contact;

        return $this;
    }

    /**
     * Gets price_information
     *
     * @return string
     */
    public function getPriceInformation()
    {
        return $this->container['price_information'];
    }

    /**
     * Sets price_information
     *
     * @param string $price_information price_information
     *
     * @return $this
     */
    public function setPriceInformation($price_information)
    {
        $this->container['price_information'] = $price_information;

        return $this;
    }

    /**
     * Gets organizer
     *
     * @return \Infocenter\Client\Model\DsOrganization
     */
    public function getOrganizer()
    {
        return $this->container['organizer'];
    }

    /**
     * Sets organizer
     *
     * @param \Infocenter\Client\Model\DsOrganization $organizer organizer
     *
     * @return $this
     */
    public function setOrganizer($organizer)
    {
        $this->container['organizer'] = $organizer;

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
