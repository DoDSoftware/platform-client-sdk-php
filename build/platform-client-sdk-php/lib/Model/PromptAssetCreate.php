<?php
/**
 * PromptAssetCreate
 *
 * PHP version 5
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PureCloud Platform API
 *
 * With the PureCloud Platform API, you can control all aspects of your PureCloud environment. With the APIs you can access the system configuration, manage conversations and more.
 *
 * OpenAPI spec version: v2
 * Contact: DeveloperEvangelists@genesys.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PureCloudPlatform\Client\V2\Model;

use \ArrayAccess;
use \PureCloudPlatform\Client\V2\ObjectSerializer;

/**
 * PromptAssetCreate Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromptAssetCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromptAssetCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'promptId' => 'string',
        'language' => 'string',
        'mediaUri' => 'string',
        'ttsString' => 'string',
        'text' => 'string',
        'uploadStatus' => 'string',
        'uploadUri' => 'string',
        'languageDefault' => 'bool',
        'tags' => 'map[string,string[]]',
        'durationSeconds' => 'double',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'promptId' => null,
        'language' => null,
        'mediaUri' => null,
        'ttsString' => null,
        'text' => null,
        'uploadStatus' => null,
        'uploadUri' => null,
        'languageDefault' => null,
        'tags' => null,
        'durationSeconds' => 'double',
        'selfUri' => 'uri'
    ];

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
        'id' => 'id',
        'name' => 'name',
        'promptId' => 'promptId',
        'language' => 'language',
        'mediaUri' => 'mediaUri',
        'ttsString' => 'ttsString',
        'text' => 'text',
        'uploadStatus' => 'uploadStatus',
        'uploadUri' => 'uploadUri',
        'languageDefault' => 'languageDefault',
        'tags' => 'tags',
        'durationSeconds' => 'durationSeconds',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'promptId' => 'setPromptId',
        'language' => 'setLanguage',
        'mediaUri' => 'setMediaUri',
        'ttsString' => 'setTtsString',
        'text' => 'setText',
        'uploadStatus' => 'setUploadStatus',
        'uploadUri' => 'setUploadUri',
        'languageDefault' => 'setLanguageDefault',
        'tags' => 'setTags',
        'durationSeconds' => 'setDurationSeconds',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'promptId' => 'getPromptId',
        'language' => 'getLanguage',
        'mediaUri' => 'getMediaUri',
        'ttsString' => 'getTtsString',
        'text' => 'getText',
        'uploadStatus' => 'getUploadStatus',
        'uploadUri' => 'getUploadUri',
        'languageDefault' => 'getLanguageDefault',
        'tags' => 'getTags',
        'durationSeconds' => 'getDurationSeconds',
        'selfUri' => 'getSelfUri'
    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['promptId'] = isset($data['promptId']) ? $data['promptId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['mediaUri'] = isset($data['mediaUri']) ? $data['mediaUri'] : null;
        $this->container['ttsString'] = isset($data['ttsString']) ? $data['ttsString'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['uploadStatus'] = isset($data['uploadStatus']) ? $data['uploadStatus'] : null;
        $this->container['uploadUri'] = isset($data['uploadUri']) ? $data['uploadUri'] : null;
        $this->container['languageDefault'] = isset($data['languageDefault']) ? $data['languageDefault'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['durationSeconds'] = isset($data['durationSeconds']) ? $data['durationSeconds'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
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
     * @param string $id The globally unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets promptId
     *
     * @return string
     */
    public function getPromptId()
    {
        return $this->container['promptId'];
    }

    /**
     * Sets promptId
     *
     * @param string $promptId Associated prompt ID
     *
     * @return $this
     */
    public function setPromptId($promptId)
    {
        $this->container['promptId'] = $promptId;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The prompt language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets mediaUri
     *
     * @return string
     */
    public function getMediaUri()
    {
        return $this->container['mediaUri'];
    }

    /**
     * Sets mediaUri
     *
     * @param string $mediaUri URI of the resource audio
     *
     * @return $this
     */
    public function setMediaUri($mediaUri)
    {
        $this->container['mediaUri'] = $mediaUri;

        return $this;
    }

    /**
     * Gets ttsString
     *
     * @return string
     */
    public function getTtsString()
    {
        return $this->container['ttsString'];
    }

    /**
     * Sets ttsString
     *
     * @param string $ttsString Text to speech of the resource
     *
     * @return $this
     */
    public function setTtsString($ttsString)
    {
        $this->container['ttsString'] = $ttsString;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Text of the resource
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets uploadStatus
     *
     * @return string
     */
    public function getUploadStatus()
    {
        return $this->container['uploadStatus'];
    }

    /**
     * Sets uploadStatus
     *
     * @param string $uploadStatus Audio upload status
     *
     * @return $this
     */
    public function setUploadStatus($uploadStatus)
    {
        $this->container['uploadStatus'] = $uploadStatus;

        return $this;
    }

    /**
     * Gets uploadUri
     *
     * @return string
     */
    public function getUploadUri()
    {
        return $this->container['uploadUri'];
    }

    /**
     * Sets uploadUri
     *
     * @param string $uploadUri Upload URI for the resource audio
     *
     * @return $this
     */
    public function setUploadUri($uploadUri)
    {
        $this->container['uploadUri'] = $uploadUri;

        return $this;
    }

    /**
     * Gets languageDefault
     *
     * @return bool
     */
    public function getLanguageDefault()
    {
        return $this->container['languageDefault'];
    }

    /**
     * Sets languageDefault
     *
     * @param bool $languageDefault Whether or not this resource locale is the default for the language
     *
     * @return $this
     */
    public function setLanguageDefault($languageDefault)
    {
        $this->container['languageDefault'] = $languageDefault;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return map[string,string[]]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param map[string,string[]] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets durationSeconds
     *
     * @return double
     */
    public function getDurationSeconds()
    {
        return $this->container['durationSeconds'];
    }

    /**
     * Sets durationSeconds
     *
     * @param double $durationSeconds durationSeconds
     *
     * @return $this
     */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;

        return $this;
    }

    /**
     * Gets selfUri
     *
     * @return string
     */
    public function getSelfUri()
    {
        return $this->container['selfUri'];
    }

    /**
     * Sets selfUri
     *
     * @param string $selfUri The URI for this object
     *
     * @return $this
     */
    public function setSelfUri($selfUri)
    {
        $this->container['selfUri'] = $selfUri;

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


