<?php
/**
 * DsWeather
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
 * DsWeather Class Doc Comment
 *
 * @category Class
 * @package  Infocenter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsWeather implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Weather';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_time' => '\DateTime',
'phrase' => 'string',
'icon_code' => 'int',
'has_precipitation' => 'bool',
'precipitation_type' => 'string',
'is_day_time' => 'bool',
'apparent_temperature' => '\Infocenter\Client\Model\DsUnitValue',
'real_feel_temperature' => '\Infocenter\Client\Model\DsUnitValue',
'real_feel_temperature_shade' => '\Infocenter\Client\Model\DsUnitValue',
'relative_humidity' => 'int',
'dew_point' => '\Infocenter\Client\Model\DsUnitValue',
'wind' => '\Infocenter\Client\Model\DsWind',
'wind_gust' => '\Infocenter\Client\Model\DsWind',
'uv_index' => 'int',
'uv_index_phrase' => 'string',
'visibility' => '\Infocenter\Client\Model\DsUnitValue',
'obstructions_to_visibility' => 'string',
'cloud_cover' => 'int',
'ceiling' => '\Infocenter\Client\Model\DsUnitValue',
'pressure' => '\Infocenter\Client\Model\DsUnitValue',
'pressure_tendency' => '\Infocenter\Client\Model\DsPressureTendency',
'past24_hour_temperature_departure' => '\Infocenter\Client\Model\DsUnitValue',
'temperature' => '\Infocenter\Client\Model\DsUnitValue',
'wind_chill_temperature' => '\Infocenter\Client\Model\DsUnitValue',
'wet_bulb_temperature' => '\Infocenter\Client\Model\DsUnitValue',
'precipitation_summary' => '\Infocenter\Client\Model\DsPrecipitationSummary',
'temperature_summary' => '\Infocenter\Client\Model\DsTemperatureSummary'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_time' => 'date-time',
'phrase' => null,
'icon_code' => 'int32',
'has_precipitation' => null,
'precipitation_type' => null,
'is_day_time' => null,
'apparent_temperature' => null,
'real_feel_temperature' => null,
'real_feel_temperature_shade' => null,
'relative_humidity' => 'int32',
'dew_point' => null,
'wind' => null,
'wind_gust' => null,
'uv_index' => 'int32',
'uv_index_phrase' => null,
'visibility' => null,
'obstructions_to_visibility' => null,
'cloud_cover' => 'int32',
'ceiling' => null,
'pressure' => null,
'pressure_tendency' => null,
'past24_hour_temperature_departure' => null,
'temperature' => null,
'wind_chill_temperature' => null,
'wet_bulb_temperature' => null,
'precipitation_summary' => null,
'temperature_summary' => null    ];

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
        'date_time' => 'dateTime',
'phrase' => 'phrase',
'icon_code' => 'iconCode',
'has_precipitation' => 'hasPrecipitation',
'precipitation_type' => 'precipitationType',
'is_day_time' => 'isDayTime',
'apparent_temperature' => 'apparentTemperature',
'real_feel_temperature' => 'realFeelTemperature',
'real_feel_temperature_shade' => 'realFeelTemperatureShade',
'relative_humidity' => 'relativeHumidity',
'dew_point' => 'dewPoint',
'wind' => 'wind',
'wind_gust' => 'windGust',
'uv_index' => 'uvIndex',
'uv_index_phrase' => 'uvIndexPhrase',
'visibility' => 'visibility',
'obstructions_to_visibility' => 'obstructionsToVisibility',
'cloud_cover' => 'cloudCover',
'ceiling' => 'ceiling',
'pressure' => 'pressure',
'pressure_tendency' => 'pressureTendency',
'past24_hour_temperature_departure' => 'past24HourTemperatureDeparture',
'temperature' => 'temperature',
'wind_chill_temperature' => 'windChillTemperature',
'wet_bulb_temperature' => 'wetBulbTemperature',
'precipitation_summary' => 'precipitationSummary',
'temperature_summary' => 'temperatureSummary'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time' => 'setDateTime',
'phrase' => 'setPhrase',
'icon_code' => 'setIconCode',
'has_precipitation' => 'setHasPrecipitation',
'precipitation_type' => 'setPrecipitationType',
'is_day_time' => 'setIsDayTime',
'apparent_temperature' => 'setApparentTemperature',
'real_feel_temperature' => 'setRealFeelTemperature',
'real_feel_temperature_shade' => 'setRealFeelTemperatureShade',
'relative_humidity' => 'setRelativeHumidity',
'dew_point' => 'setDewPoint',
'wind' => 'setWind',
'wind_gust' => 'setWindGust',
'uv_index' => 'setUvIndex',
'uv_index_phrase' => 'setUvIndexPhrase',
'visibility' => 'setVisibility',
'obstructions_to_visibility' => 'setObstructionsToVisibility',
'cloud_cover' => 'setCloudCover',
'ceiling' => 'setCeiling',
'pressure' => 'setPressure',
'pressure_tendency' => 'setPressureTendency',
'past24_hour_temperature_departure' => 'setPast24HourTemperatureDeparture',
'temperature' => 'setTemperature',
'wind_chill_temperature' => 'setWindChillTemperature',
'wet_bulb_temperature' => 'setWetBulbTemperature',
'precipitation_summary' => 'setPrecipitationSummary',
'temperature_summary' => 'setTemperatureSummary'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time' => 'getDateTime',
'phrase' => 'getPhrase',
'icon_code' => 'getIconCode',
'has_precipitation' => 'getHasPrecipitation',
'precipitation_type' => 'getPrecipitationType',
'is_day_time' => 'getIsDayTime',
'apparent_temperature' => 'getApparentTemperature',
'real_feel_temperature' => 'getRealFeelTemperature',
'real_feel_temperature_shade' => 'getRealFeelTemperatureShade',
'relative_humidity' => 'getRelativeHumidity',
'dew_point' => 'getDewPoint',
'wind' => 'getWind',
'wind_gust' => 'getWindGust',
'uv_index' => 'getUvIndex',
'uv_index_phrase' => 'getUvIndexPhrase',
'visibility' => 'getVisibility',
'obstructions_to_visibility' => 'getObstructionsToVisibility',
'cloud_cover' => 'getCloudCover',
'ceiling' => 'getCeiling',
'pressure' => 'getPressure',
'pressure_tendency' => 'getPressureTendency',
'past24_hour_temperature_departure' => 'getPast24HourTemperatureDeparture',
'temperature' => 'getTemperature',
'wind_chill_temperature' => 'getWindChillTemperature',
'wet_bulb_temperature' => 'getWetBulbTemperature',
'precipitation_summary' => 'getPrecipitationSummary',
'temperature_summary' => 'getTemperatureSummary'    ];

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
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['phrase'] = isset($data['phrase']) ? $data['phrase'] : null;
        $this->container['icon_code'] = isset($data['icon_code']) ? $data['icon_code'] : null;
        $this->container['has_precipitation'] = isset($data['has_precipitation']) ? $data['has_precipitation'] : null;
        $this->container['precipitation_type'] = isset($data['precipitation_type']) ? $data['precipitation_type'] : null;
        $this->container['is_day_time'] = isset($data['is_day_time']) ? $data['is_day_time'] : null;
        $this->container['apparent_temperature'] = isset($data['apparent_temperature']) ? $data['apparent_temperature'] : null;
        $this->container['real_feel_temperature'] = isset($data['real_feel_temperature']) ? $data['real_feel_temperature'] : null;
        $this->container['real_feel_temperature_shade'] = isset($data['real_feel_temperature_shade']) ? $data['real_feel_temperature_shade'] : null;
        $this->container['relative_humidity'] = isset($data['relative_humidity']) ? $data['relative_humidity'] : null;
        $this->container['dew_point'] = isset($data['dew_point']) ? $data['dew_point'] : null;
        $this->container['wind'] = isset($data['wind']) ? $data['wind'] : null;
        $this->container['wind_gust'] = isset($data['wind_gust']) ? $data['wind_gust'] : null;
        $this->container['uv_index'] = isset($data['uv_index']) ? $data['uv_index'] : null;
        $this->container['uv_index_phrase'] = isset($data['uv_index_phrase']) ? $data['uv_index_phrase'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['obstructions_to_visibility'] = isset($data['obstructions_to_visibility']) ? $data['obstructions_to_visibility'] : null;
        $this->container['cloud_cover'] = isset($data['cloud_cover']) ? $data['cloud_cover'] : null;
        $this->container['ceiling'] = isset($data['ceiling']) ? $data['ceiling'] : null;
        $this->container['pressure'] = isset($data['pressure']) ? $data['pressure'] : null;
        $this->container['pressure_tendency'] = isset($data['pressure_tendency']) ? $data['pressure_tendency'] : null;
        $this->container['past24_hour_temperature_departure'] = isset($data['past24_hour_temperature_departure']) ? $data['past24_hour_temperature_departure'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
        $this->container['wind_chill_temperature'] = isset($data['wind_chill_temperature']) ? $data['wind_chill_temperature'] : null;
        $this->container['wet_bulb_temperature'] = isset($data['wet_bulb_temperature']) ? $data['wet_bulb_temperature'] : null;
        $this->container['precipitation_summary'] = isset($data['precipitation_summary']) ? $data['precipitation_summary'] : null;
        $this->container['temperature_summary'] = isset($data['temperature_summary']) ? $data['temperature_summary'] : null;
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
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time date_time
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets phrase
     *
     * @return string
     */
    public function getPhrase()
    {
        return $this->container['phrase'];
    }

    /**
     * Sets phrase
     *
     * @param string $phrase phrase
     *
     * @return $this
     */
    public function setPhrase($phrase)
    {
        $this->container['phrase'] = $phrase;

        return $this;
    }

    /**
     * Gets icon_code
     *
     * @return int
     */
    public function getIconCode()
    {
        return $this->container['icon_code'];
    }

    /**
     * Sets icon_code
     *
     * @param int $icon_code icon_code
     *
     * @return $this
     */
    public function setIconCode($icon_code)
    {
        $this->container['icon_code'] = $icon_code;

        return $this;
    }

    /**
     * Gets has_precipitation
     *
     * @return bool
     */
    public function getHasPrecipitation()
    {
        return $this->container['has_precipitation'];
    }

    /**
     * Sets has_precipitation
     *
     * @param bool $has_precipitation has_precipitation
     *
     * @return $this
     */
    public function setHasPrecipitation($has_precipitation)
    {
        $this->container['has_precipitation'] = $has_precipitation;

        return $this;
    }

    /**
     * Gets precipitation_type
     *
     * @return string
     */
    public function getPrecipitationType()
    {
        return $this->container['precipitation_type'];
    }

    /**
     * Sets precipitation_type
     *
     * @param string $precipitation_type precipitation_type
     *
     * @return $this
     */
    public function setPrecipitationType($precipitation_type)
    {
        $this->container['precipitation_type'] = $precipitation_type;

        return $this;
    }

    /**
     * Gets is_day_time
     *
     * @return bool
     */
    public function getIsDayTime()
    {
        return $this->container['is_day_time'];
    }

    /**
     * Sets is_day_time
     *
     * @param bool $is_day_time is_day_time
     *
     * @return $this
     */
    public function setIsDayTime($is_day_time)
    {
        $this->container['is_day_time'] = $is_day_time;

        return $this;
    }

    /**
     * Gets apparent_temperature
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getApparentTemperature()
    {
        return $this->container['apparent_temperature'];
    }

    /**
     * Sets apparent_temperature
     *
     * @param \Infocenter\Client\Model\DsUnitValue $apparent_temperature apparent_temperature
     *
     * @return $this
     */
    public function setApparentTemperature($apparent_temperature)
    {
        $this->container['apparent_temperature'] = $apparent_temperature;

        return $this;
    }

    /**
     * Gets real_feel_temperature
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getRealFeelTemperature()
    {
        return $this->container['real_feel_temperature'];
    }

    /**
     * Sets real_feel_temperature
     *
     * @param \Infocenter\Client\Model\DsUnitValue $real_feel_temperature real_feel_temperature
     *
     * @return $this
     */
    public function setRealFeelTemperature($real_feel_temperature)
    {
        $this->container['real_feel_temperature'] = $real_feel_temperature;

        return $this;
    }

    /**
     * Gets real_feel_temperature_shade
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getRealFeelTemperatureShade()
    {
        return $this->container['real_feel_temperature_shade'];
    }

    /**
     * Sets real_feel_temperature_shade
     *
     * @param \Infocenter\Client\Model\DsUnitValue $real_feel_temperature_shade real_feel_temperature_shade
     *
     * @return $this
     */
    public function setRealFeelTemperatureShade($real_feel_temperature_shade)
    {
        $this->container['real_feel_temperature_shade'] = $real_feel_temperature_shade;

        return $this;
    }

    /**
     * Gets relative_humidity
     *
     * @return int
     */
    public function getRelativeHumidity()
    {
        return $this->container['relative_humidity'];
    }

    /**
     * Sets relative_humidity
     *
     * @param int $relative_humidity relative_humidity
     *
     * @return $this
     */
    public function setRelativeHumidity($relative_humidity)
    {
        $this->container['relative_humidity'] = $relative_humidity;

        return $this;
    }

    /**
     * Gets dew_point
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getDewPoint()
    {
        return $this->container['dew_point'];
    }

    /**
     * Sets dew_point
     *
     * @param \Infocenter\Client\Model\DsUnitValue $dew_point dew_point
     *
     * @return $this
     */
    public function setDewPoint($dew_point)
    {
        $this->container['dew_point'] = $dew_point;

        return $this;
    }

    /**
     * Gets wind
     *
     * @return \Infocenter\Client\Model\DsWind
     */
    public function getWind()
    {
        return $this->container['wind'];
    }

    /**
     * Sets wind
     *
     * @param \Infocenter\Client\Model\DsWind $wind wind
     *
     * @return $this
     */
    public function setWind($wind)
    {
        $this->container['wind'] = $wind;

        return $this;
    }

    /**
     * Gets wind_gust
     *
     * @return \Infocenter\Client\Model\DsWind
     */
    public function getWindGust()
    {
        return $this->container['wind_gust'];
    }

    /**
     * Sets wind_gust
     *
     * @param \Infocenter\Client\Model\DsWind $wind_gust wind_gust
     *
     * @return $this
     */
    public function setWindGust($wind_gust)
    {
        $this->container['wind_gust'] = $wind_gust;

        return $this;
    }

    /**
     * Gets uv_index
     *
     * @return int
     */
    public function getUvIndex()
    {
        return $this->container['uv_index'];
    }

    /**
     * Sets uv_index
     *
     * @param int $uv_index uv_index
     *
     * @return $this
     */
    public function setUvIndex($uv_index)
    {
        $this->container['uv_index'] = $uv_index;

        return $this;
    }

    /**
     * Gets uv_index_phrase
     *
     * @return string
     */
    public function getUvIndexPhrase()
    {
        return $this->container['uv_index_phrase'];
    }

    /**
     * Sets uv_index_phrase
     *
     * @param string $uv_index_phrase uv_index_phrase
     *
     * @return $this
     */
    public function setUvIndexPhrase($uv_index_phrase)
    {
        $this->container['uv_index_phrase'] = $uv_index_phrase;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \Infocenter\Client\Model\DsUnitValue $visibility visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets obstructions_to_visibility
     *
     * @return string
     */
    public function getObstructionsToVisibility()
    {
        return $this->container['obstructions_to_visibility'];
    }

    /**
     * Sets obstructions_to_visibility
     *
     * @param string $obstructions_to_visibility obstructions_to_visibility
     *
     * @return $this
     */
    public function setObstructionsToVisibility($obstructions_to_visibility)
    {
        $this->container['obstructions_to_visibility'] = $obstructions_to_visibility;

        return $this;
    }

    /**
     * Gets cloud_cover
     *
     * @return int
     */
    public function getCloudCover()
    {
        return $this->container['cloud_cover'];
    }

    /**
     * Sets cloud_cover
     *
     * @param int $cloud_cover cloud_cover
     *
     * @return $this
     */
    public function setCloudCover($cloud_cover)
    {
        $this->container['cloud_cover'] = $cloud_cover;

        return $this;
    }

    /**
     * Gets ceiling
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getCeiling()
    {
        return $this->container['ceiling'];
    }

    /**
     * Sets ceiling
     *
     * @param \Infocenter\Client\Model\DsUnitValue $ceiling ceiling
     *
     * @return $this
     */
    public function setCeiling($ceiling)
    {
        $this->container['ceiling'] = $ceiling;

        return $this;
    }

    /**
     * Gets pressure
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPressure()
    {
        return $this->container['pressure'];
    }

    /**
     * Sets pressure
     *
     * @param \Infocenter\Client\Model\DsUnitValue $pressure pressure
     *
     * @return $this
     */
    public function setPressure($pressure)
    {
        $this->container['pressure'] = $pressure;

        return $this;
    }

    /**
     * Gets pressure_tendency
     *
     * @return \Infocenter\Client\Model\DsPressureTendency
     */
    public function getPressureTendency()
    {
        return $this->container['pressure_tendency'];
    }

    /**
     * Sets pressure_tendency
     *
     * @param \Infocenter\Client\Model\DsPressureTendency $pressure_tendency pressure_tendency
     *
     * @return $this
     */
    public function setPressureTendency($pressure_tendency)
    {
        $this->container['pressure_tendency'] = $pressure_tendency;

        return $this;
    }

    /**
     * Gets past24_hour_temperature_departure
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getPast24HourTemperatureDeparture()
    {
        return $this->container['past24_hour_temperature_departure'];
    }

    /**
     * Sets past24_hour_temperature_departure
     *
     * @param \Infocenter\Client\Model\DsUnitValue $past24_hour_temperature_departure past24_hour_temperature_departure
     *
     * @return $this
     */
    public function setPast24HourTemperatureDeparture($past24_hour_temperature_departure)
    {
        $this->container['past24_hour_temperature_departure'] = $past24_hour_temperature_departure;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param \Infocenter\Client\Model\DsUnitValue $temperature temperature
     *
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets wind_chill_temperature
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getWindChillTemperature()
    {
        return $this->container['wind_chill_temperature'];
    }

    /**
     * Sets wind_chill_temperature
     *
     * @param \Infocenter\Client\Model\DsUnitValue $wind_chill_temperature wind_chill_temperature
     *
     * @return $this
     */
    public function setWindChillTemperature($wind_chill_temperature)
    {
        $this->container['wind_chill_temperature'] = $wind_chill_temperature;

        return $this;
    }

    /**
     * Gets wet_bulb_temperature
     *
     * @return \Infocenter\Client\Model\DsUnitValue
     */
    public function getWetBulbTemperature()
    {
        return $this->container['wet_bulb_temperature'];
    }

    /**
     * Sets wet_bulb_temperature
     *
     * @param \Infocenter\Client\Model\DsUnitValue $wet_bulb_temperature wet_bulb_temperature
     *
     * @return $this
     */
    public function setWetBulbTemperature($wet_bulb_temperature)
    {
        $this->container['wet_bulb_temperature'] = $wet_bulb_temperature;

        return $this;
    }

    /**
     * Gets precipitation_summary
     *
     * @return \Infocenter\Client\Model\DsPrecipitationSummary
     */
    public function getPrecipitationSummary()
    {
        return $this->container['precipitation_summary'];
    }

    /**
     * Sets precipitation_summary
     *
     * @param \Infocenter\Client\Model\DsPrecipitationSummary $precipitation_summary precipitation_summary
     *
     * @return $this
     */
    public function setPrecipitationSummary($precipitation_summary)
    {
        $this->container['precipitation_summary'] = $precipitation_summary;

        return $this;
    }

    /**
     * Gets temperature_summary
     *
     * @return \Infocenter\Client\Model\DsTemperatureSummary
     */
    public function getTemperatureSummary()
    {
        return $this->container['temperature_summary'];
    }

    /**
     * Sets temperature_summary
     *
     * @param \Infocenter\Client\Model\DsTemperatureSummary $temperature_summary temperature_summary
     *
     * @return $this
     */
    public function setTemperatureSummary($temperature_summary)
    {
        $this->container['temperature_summary'] = $temperature_summary;

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
