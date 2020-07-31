<?php
/**
 * Location
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * fareharbor API
 *
 * This is a simple API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: you@your-company.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Location Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pk' => 'int',
'type' => 'string',
'note' => 'string',
'note_safe_html' => 'string',
'longitude' => 'float',
'latitude' => 'float',
'google_place_id' => 'string',
'tripadvisor_url' => 'string',
'address' => '\Swagger\Client\Model\LocationAddress'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pk' => null,
'type' => null,
'note' => null,
'note_safe_html' => null,
'longitude' => 'float',
'latitude' => 'float',
'google_place_id' => null,
'tripadvisor_url' => null,
'address' => null    ];

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
        'pk' => 'pk',
'type' => 'type',
'note' => 'note',
'note_safe_html' => 'note_safe_html',
'longitude' => 'longitude',
'latitude' => 'latitude',
'google_place_id' => 'google_place_id',
'tripadvisor_url' => 'tripadvisor_url',
'address' => 'address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pk' => 'setPk',
'type' => 'setType',
'note' => 'setNote',
'note_safe_html' => 'setNoteSafeHtml',
'longitude' => 'setLongitude',
'latitude' => 'setLatitude',
'google_place_id' => 'setGooglePlaceId',
'tripadvisor_url' => 'setTripadvisorUrl',
'address' => 'setAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pk' => 'getPk',
'type' => 'getType',
'note' => 'getNote',
'note_safe_html' => 'getNoteSafeHtml',
'longitude' => 'getLongitude',
'latitude' => 'getLatitude',
'google_place_id' => 'getGooglePlaceId',
'tripadvisor_url' => 'getTripadvisorUrl',
'address' => 'getAddress'    ];

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
        $this->container['pk'] = isset($data['pk']) ? $data['pk'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['note_safe_html'] = isset($data['note_safe_html']) ? $data['note_safe_html'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['google_place_id'] = isset($data['google_place_id']) ? $data['google_place_id'] : null;
        $this->container['tripadvisor_url'] = isset($data['tripadvisor_url']) ? $data['tripadvisor_url'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets pk
     *
     * @return int
     */
    public function getPk()
    {
        return $this->container['pk'];
    }

    /**
     * Sets pk
     *
     * @param int $pk pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->container['pk'] = $pk;

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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets note_safe_html
     *
     * @return string
     */
    public function getNoteSafeHtml()
    {
        return $this->container['note_safe_html'];
    }

    /**
     * Sets note_safe_html
     *
     * @param string $note_safe_html note_safe_html
     *
     * @return $this
     */
    public function setNoteSafeHtml($note_safe_html)
    {
        $this->container['note_safe_html'] = $note_safe_html;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets google_place_id
     *
     * @return string
     */
    public function getGooglePlaceId()
    {
        return $this->container['google_place_id'];
    }

    /**
     * Sets google_place_id
     *
     * @param string $google_place_id google_place_id
     *
     * @return $this
     */
    public function setGooglePlaceId($google_place_id)
    {
        $this->container['google_place_id'] = $google_place_id;

        return $this;
    }

    /**
     * Gets tripadvisor_url
     *
     * @return string
     */
    public function getTripadvisorUrl()
    {
        return $this->container['tripadvisor_url'];
    }

    /**
     * Sets tripadvisor_url
     *
     * @param string $tripadvisor_url tripadvisor_url
     *
     * @return $this
     */
    public function setTripadvisorUrl($tripadvisor_url)
    {
        $this->container['tripadvisor_url'] = $tripadvisor_url;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\LocationAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\LocationAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
