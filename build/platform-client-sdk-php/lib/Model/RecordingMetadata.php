<?php
/**
 * RecordingMetadata
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
 * RecordingMetadata Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecordingMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecordingMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'conversationId' => 'string',
        'path' => 'string',
        'startTime' => 'string',
        'endTime' => 'string',
        'media' => 'string',
        'annotations' => '\PureCloudPlatform\Client\V2\Model\Annotation[]',
        'fileState' => 'string',
        'restoreExpirationTime' => '\DateTime',
        'archiveDate' => '\DateTime',
        'archiveMedium' => 'string',
        'deleteDate' => '\DateTime',
        'exportDate' => '\DateTime',
        'maxAllowedRestorationsForOrg' => 'int',
        'remainingRestorationsAllowedForOrg' => 'int',
        'sessionId' => 'string',
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
        'conversationId' => null,
        'path' => null,
        'startTime' => null,
        'endTime' => null,
        'media' => null,
        'annotations' => null,
        'fileState' => null,
        'restoreExpirationTime' => 'date-time',
        'archiveDate' => 'date-time',
        'archiveMedium' => null,
        'deleteDate' => 'date-time',
        'exportDate' => 'date-time',
        'maxAllowedRestorationsForOrg' => 'int32',
        'remainingRestorationsAllowedForOrg' => 'int32',
        'sessionId' => null,
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
        'conversationId' => 'conversationId',
        'path' => 'path',
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'media' => 'media',
        'annotations' => 'annotations',
        'fileState' => 'fileState',
        'restoreExpirationTime' => 'restoreExpirationTime',
        'archiveDate' => 'archiveDate',
        'archiveMedium' => 'archiveMedium',
        'deleteDate' => 'deleteDate',
        'exportDate' => 'exportDate',
        'maxAllowedRestorationsForOrg' => 'maxAllowedRestorationsForOrg',
        'remainingRestorationsAllowedForOrg' => 'remainingRestorationsAllowedForOrg',
        'sessionId' => 'sessionId',
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
        'conversationId' => 'setConversationId',
        'path' => 'setPath',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'media' => 'setMedia',
        'annotations' => 'setAnnotations',
        'fileState' => 'setFileState',
        'restoreExpirationTime' => 'setRestoreExpirationTime',
        'archiveDate' => 'setArchiveDate',
        'archiveMedium' => 'setArchiveMedium',
        'deleteDate' => 'setDeleteDate',
        'exportDate' => 'setExportDate',
        'maxAllowedRestorationsForOrg' => 'setMaxAllowedRestorationsForOrg',
        'remainingRestorationsAllowedForOrg' => 'setRemainingRestorationsAllowedForOrg',
        'sessionId' => 'setSessionId',
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
        'conversationId' => 'getConversationId',
        'path' => 'getPath',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'media' => 'getMedia',
        'annotations' => 'getAnnotations',
        'fileState' => 'getFileState',
        'restoreExpirationTime' => 'getRestoreExpirationTime',
        'archiveDate' => 'getArchiveDate',
        'archiveMedium' => 'getArchiveMedium',
        'deleteDate' => 'getDeleteDate',
        'exportDate' => 'getExportDate',
        'maxAllowedRestorationsForOrg' => 'getMaxAllowedRestorationsForOrg',
        'remainingRestorationsAllowedForOrg' => 'getRemainingRestorationsAllowedForOrg',
        'sessionId' => 'getSessionId',
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

    const FILE_STATE_ARCHIVED = 'ARCHIVED';
    const FILE_STATE_AVAILABLE = 'AVAILABLE';
    const FILE_STATE_DELETED = 'DELETED';
    const FILE_STATE_RESTORED = 'RESTORED';
    const FILE_STATE_RESTORING = 'RESTORING';
    const FILE_STATE_UPLOADING = 'UPLOADING';
    const FILE_STATE_ERROR = 'ERROR';
    const ARCHIVE_MEDIUM_CLOUDARCHIVE = 'CLOUDARCHIVE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileStateAllowableValues()
    {
        return [
            self::FILE_STATE_ARCHIVED,
            self::FILE_STATE_AVAILABLE,
            self::FILE_STATE_DELETED,
            self::FILE_STATE_RESTORED,
            self::FILE_STATE_RESTORING,
            self::FILE_STATE_UPLOADING,
            self::FILE_STATE_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArchiveMediumAllowableValues()
    {
        return [
            self::ARCHIVE_MEDIUM_CLOUDARCHIVE,
        ];
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
        $this->container['conversationId'] = isset($data['conversationId']) ? $data['conversationId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['fileState'] = isset($data['fileState']) ? $data['fileState'] : null;
        $this->container['restoreExpirationTime'] = isset($data['restoreExpirationTime']) ? $data['restoreExpirationTime'] : null;
        $this->container['archiveDate'] = isset($data['archiveDate']) ? $data['archiveDate'] : null;
        $this->container['archiveMedium'] = isset($data['archiveMedium']) ? $data['archiveMedium'] : null;
        $this->container['deleteDate'] = isset($data['deleteDate']) ? $data['deleteDate'] : null;
        $this->container['exportDate'] = isset($data['exportDate']) ? $data['exportDate'] : null;
        $this->container['maxAllowedRestorationsForOrg'] = isset($data['maxAllowedRestorationsForOrg']) ? $data['maxAllowedRestorationsForOrg'] : null;
        $this->container['remainingRestorationsAllowedForOrg'] = isset($data['remainingRestorationsAllowedForOrg']) ? $data['remainingRestorationsAllowedForOrg'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
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

        $allowedValues = $this->getFileStateAllowableValues();
        if (!is_null($this->container['fileState']) && !in_array($this->container['fileState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fileState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getArchiveMediumAllowableValues();
        if (!is_null($this->container['archiveMedium']) && !in_array($this->container['archiveMedium'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'archiveMedium', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets conversationId
     *
     * @return string
     */
    public function getConversationId()
    {
        return $this->container['conversationId'];
    }

    /**
     * Sets conversationId
     *
     * @param string $conversationId conversationId
     *
     * @return $this
     */
    public function setConversationId($conversationId)
    {
        $this->container['conversationId'] = $conversationId;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string $startTime The start time of the recording for screen recordings. Null for other types.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string $endTime endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string $media The type of media that the recording is. At the moment that could be audio, chat, email, or message.
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets annotations
     *
     * @return \PureCloudPlatform\Client\V2\Model\Annotation[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     *
     * @param \PureCloudPlatform\Client\V2\Model\Annotation[] $annotations Annotations that belong to the recording. Populated when recording filestate is AVAILABLE.
     *
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /**
     * Gets fileState
     *
     * @return string
     */
    public function getFileState()
    {
        return $this->container['fileState'];
    }

    /**
     * Sets fileState
     *
     * @param string $fileState Represents the current file state for a recording. Examples: Uploading, Archived, etc
     *
     * @return $this
     */
    public function setFileState($fileState)
    {
        $allowedValues = $this->getFileStateAllowableValues();
        if (!is_null($fileState) && !in_array($fileState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fileState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fileState'] = $fileState;

        return $this;
    }

    /**
     * Gets restoreExpirationTime
     *
     * @return \DateTime
     */
    public function getRestoreExpirationTime()
    {
        return $this->container['restoreExpirationTime'];
    }

    /**
     * Sets restoreExpirationTime
     *
     * @param \DateTime $restoreExpirationTime The amount of time a restored recording will remain restored before being archived again. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setRestoreExpirationTime($restoreExpirationTime)
    {
        $this->container['restoreExpirationTime'] = $restoreExpirationTime;

        return $this;
    }

    /**
     * Gets archiveDate
     *
     * @return \DateTime
     */
    public function getArchiveDate()
    {
        return $this->container['archiveDate'];
    }

    /**
     * Sets archiveDate
     *
     * @param \DateTime $archiveDate The date the recording will be archived. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setArchiveDate($archiveDate)
    {
        $this->container['archiveDate'] = $archiveDate;

        return $this;
    }

    /**
     * Gets archiveMedium
     *
     * @return string
     */
    public function getArchiveMedium()
    {
        return $this->container['archiveMedium'];
    }

    /**
     * Sets archiveMedium
     *
     * @param string $archiveMedium The type of archive medium used. Example: CloudArchive
     *
     * @return $this
     */
    public function setArchiveMedium($archiveMedium)
    {
        $allowedValues = $this->getArchiveMediumAllowableValues();
        if (!is_null($archiveMedium) && !in_array($archiveMedium, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'archiveMedium', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['archiveMedium'] = $archiveMedium;

        return $this;
    }

    /**
     * Gets deleteDate
     *
     * @return \DateTime
     */
    public function getDeleteDate()
    {
        return $this->container['deleteDate'];
    }

    /**
     * Sets deleteDate
     *
     * @param \DateTime $deleteDate The date the recording will be deleted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDeleteDate($deleteDate)
    {
        $this->container['deleteDate'] = $deleteDate;

        return $this;
    }

    /**
     * Gets exportDate
     *
     * @return \DateTime
     */
    public function getExportDate()
    {
        return $this->container['exportDate'];
    }

    /**
     * Sets exportDate
     *
     * @param \DateTime $exportDate The date the recording will be exported. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setExportDate($exportDate)
    {
        $this->container['exportDate'] = $exportDate;

        return $this;
    }

    /**
     * Gets maxAllowedRestorationsForOrg
     *
     * @return int
     */
    public function getMaxAllowedRestorationsForOrg()
    {
        return $this->container['maxAllowedRestorationsForOrg'];
    }

    /**
     * Sets maxAllowedRestorationsForOrg
     *
     * @param int $maxAllowedRestorationsForOrg How many archive restorations the organization is allowed to have.
     *
     * @return $this
     */
    public function setMaxAllowedRestorationsForOrg($maxAllowedRestorationsForOrg)
    {
        $this->container['maxAllowedRestorationsForOrg'] = $maxAllowedRestorationsForOrg;

        return $this;
    }

    /**
     * Gets remainingRestorationsAllowedForOrg
     *
     * @return int
     */
    public function getRemainingRestorationsAllowedForOrg()
    {
        return $this->container['remainingRestorationsAllowedForOrg'];
    }

    /**
     * Sets remainingRestorationsAllowedForOrg
     *
     * @param int $remainingRestorationsAllowedForOrg The remaining archive restorations the organization has.
     *
     * @return $this
     */
    public function setRemainingRestorationsAllowedForOrg($remainingRestorationsAllowedForOrg)
    {
        $this->container['remainingRestorationsAllowedForOrg'] = $remainingRestorationsAllowedForOrg;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string $sessionId The session id represents an external resource id, such as email, call, chat, etc
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

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


