<?php
/**
 * Evaluation
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
 * Evaluation Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Evaluation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Evaluation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'conversation' => '\PureCloudPlatform\Client\V2\Model\Conversation',
        'evaluationForm' => '\PureCloudPlatform\Client\V2\Model\EvaluationForm',
        'evaluator' => '\PureCloudPlatform\Client\V2\Model\User',
        'agent' => '\PureCloudPlatform\Client\V2\Model\User',
        'calibration' => '\PureCloudPlatform\Client\V2\Model\Calibration',
        'status' => 'string',
        'answers' => '\PureCloudPlatform\Client\V2\Model\EvaluationScoringSet',
        'agentHasRead' => 'bool',
        'releaseDate' => '\DateTime',
        'assignedDate' => '\DateTime',
        'changedDate' => '\DateTime',
        'queue' => '\PureCloudPlatform\Client\V2\Model\Queue',
        'mediaType' => 'string[]',
        'rescore' => 'bool',
        'conversationDate' => '\DateTime',
        'neverRelease' => 'bool',
        'resourceId' => 'string',
        'resourceType' => 'string',
        'redacted' => 'bool',
        'isScoringIndex' => 'bool',
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
        'conversation' => null,
        'evaluationForm' => null,
        'evaluator' => null,
        'agent' => null,
        'calibration' => null,
        'status' => null,
        'answers' => null,
        'agentHasRead' => null,
        'releaseDate' => 'date-time',
        'assignedDate' => 'date-time',
        'changedDate' => 'date-time',
        'queue' => null,
        'mediaType' => null,
        'rescore' => null,
        'conversationDate' => 'date-time',
        'neverRelease' => null,
        'resourceId' => null,
        'resourceType' => null,
        'redacted' => null,
        'isScoringIndex' => null,
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
        'conversation' => 'conversation',
        'evaluationForm' => 'evaluationForm',
        'evaluator' => 'evaluator',
        'agent' => 'agent',
        'calibration' => 'calibration',
        'status' => 'status',
        'answers' => 'answers',
        'agentHasRead' => 'agentHasRead',
        'releaseDate' => 'releaseDate',
        'assignedDate' => 'assignedDate',
        'changedDate' => 'changedDate',
        'queue' => 'queue',
        'mediaType' => 'mediaType',
        'rescore' => 'rescore',
        'conversationDate' => 'conversationDate',
        'neverRelease' => 'neverRelease',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'redacted' => 'redacted',
        'isScoringIndex' => 'isScoringIndex',
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
        'conversation' => 'setConversation',
        'evaluationForm' => 'setEvaluationForm',
        'evaluator' => 'setEvaluator',
        'agent' => 'setAgent',
        'calibration' => 'setCalibration',
        'status' => 'setStatus',
        'answers' => 'setAnswers',
        'agentHasRead' => 'setAgentHasRead',
        'releaseDate' => 'setReleaseDate',
        'assignedDate' => 'setAssignedDate',
        'changedDate' => 'setChangedDate',
        'queue' => 'setQueue',
        'mediaType' => 'setMediaType',
        'rescore' => 'setRescore',
        'conversationDate' => 'setConversationDate',
        'neverRelease' => 'setNeverRelease',
        'resourceId' => 'setResourceId',
        'resourceType' => 'setResourceType',
        'redacted' => 'setRedacted',
        'isScoringIndex' => 'setIsScoringIndex',
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
        'conversation' => 'getConversation',
        'evaluationForm' => 'getEvaluationForm',
        'evaluator' => 'getEvaluator',
        'agent' => 'getAgent',
        'calibration' => 'getCalibration',
        'status' => 'getStatus',
        'answers' => 'getAnswers',
        'agentHasRead' => 'getAgentHasRead',
        'releaseDate' => 'getReleaseDate',
        'assignedDate' => 'getAssignedDate',
        'changedDate' => 'getChangedDate',
        'queue' => 'getQueue',
        'mediaType' => 'getMediaType',
        'rescore' => 'getRescore',
        'conversationDate' => 'getConversationDate',
        'neverRelease' => 'getNeverRelease',
        'resourceId' => 'getResourceId',
        'resourceType' => 'getResourceType',
        'redacted' => 'getRedacted',
        'isScoringIndex' => 'getIsScoringIndex',
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

    const STATUS_PENDING = 'PENDING';
    const STATUS_INPROGRESS = 'INPROGRESS';
    const STATUS_FINISHED = 'FINISHED';
    const MEDIA_TYPE_CALL = 'CALL';
    const MEDIA_TYPE_CALLBACK = 'CALLBACK';
    const MEDIA_TYPE_CHAT = 'CHAT';
    const MEDIA_TYPE_COBROWSE = 'COBROWSE';
    const MEDIA_TYPE_EMAIL = 'EMAIL';
    const MEDIA_TYPE_MESSAGE = 'MESSAGE';
    const MEDIA_TYPE_SOCIAL_EXPRESSION = 'SOCIAL_EXPRESSION';
    const MEDIA_TYPE_VIDEO = 'VIDEO';
    const MEDIA_TYPE_SCREENSHARE = 'SCREENSHARE';
    const RESOURCE_TYPE_EMAIL = 'EMAIL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_INPROGRESS,
            self::STATUS_FINISHED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_CALL,
            self::MEDIA_TYPE_CALLBACK,
            self::MEDIA_TYPE_CHAT,
            self::MEDIA_TYPE_COBROWSE,
            self::MEDIA_TYPE_EMAIL,
            self::MEDIA_TYPE_MESSAGE,
            self::MEDIA_TYPE_SOCIAL_EXPRESSION,
            self::MEDIA_TYPE_VIDEO,
            self::MEDIA_TYPE_SCREENSHARE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_EMAIL,
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
        $this->container['conversation'] = isset($data['conversation']) ? $data['conversation'] : null;
        $this->container['evaluationForm'] = isset($data['evaluationForm']) ? $data['evaluationForm'] : null;
        $this->container['evaluator'] = isset($data['evaluator']) ? $data['evaluator'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['calibration'] = isset($data['calibration']) ? $data['calibration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['agentHasRead'] = isset($data['agentHasRead']) ? $data['agentHasRead'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
        $this->container['assignedDate'] = isset($data['assignedDate']) ? $data['assignedDate'] : null;
        $this->container['changedDate'] = isset($data['changedDate']) ? $data['changedDate'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['rescore'] = isset($data['rescore']) ? $data['rescore'] : null;
        $this->container['conversationDate'] = isset($data['conversationDate']) ? $data['conversationDate'] : null;
        $this->container['neverRelease'] = isset($data['neverRelease']) ? $data['neverRelease'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['redacted'] = isset($data['redacted']) ? $data['redacted'] : null;
        $this->container['isScoringIndex'] = isset($data['isScoringIndex']) ? $data['isScoringIndex'] : null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
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
     * Gets conversation
     *
     * @return \PureCloudPlatform\Client\V2\Model\Conversation
     */
    public function getConversation()
    {
        return $this->container['conversation'];
    }

    /**
     * Sets conversation
     *
     * @param \PureCloudPlatform\Client\V2\Model\Conversation $conversation conversation
     *
     * @return $this
     */
    public function setConversation($conversation)
    {
        $this->container['conversation'] = $conversation;

        return $this;
    }

    /**
     * Gets evaluationForm
     *
     * @return \PureCloudPlatform\Client\V2\Model\EvaluationForm
     */
    public function getEvaluationForm()
    {
        return $this->container['evaluationForm'];
    }

    /**
     * Sets evaluationForm
     *
     * @param \PureCloudPlatform\Client\V2\Model\EvaluationForm $evaluationForm Evaluation form used for evaluation.
     *
     * @return $this
     */
    public function setEvaluationForm($evaluationForm)
    {
        $this->container['evaluationForm'] = $evaluationForm;

        return $this;
    }

    /**
     * Gets evaluator
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getEvaluator()
    {
        return $this->container['evaluator'];
    }

    /**
     * Sets evaluator
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $evaluator evaluator
     *
     * @return $this
     */
    public function setEvaluator($evaluator)
    {
        $this->container['evaluator'] = $evaluator;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets calibration
     *
     * @return \PureCloudPlatform\Client\V2\Model\Calibration
     */
    public function getCalibration()
    {
        return $this->container['calibration'];
    }

    /**
     * Sets calibration
     *
     * @param \PureCloudPlatform\Client\V2\Model\Calibration $calibration calibration
     *
     * @return $this
     */
    public function setCalibration($calibration)
    {
        $this->container['calibration'] = $calibration;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return \PureCloudPlatform\Client\V2\Model\EvaluationScoringSet
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param \PureCloudPlatform\Client\V2\Model\EvaluationScoringSet $answers answers
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets agentHasRead
     *
     * @return bool
     */
    public function getAgentHasRead()
    {
        return $this->container['agentHasRead'];
    }

    /**
     * Sets agentHasRead
     *
     * @param bool $agentHasRead agentHasRead
     *
     * @return $this
     */
    public function setAgentHasRead($agentHasRead)
    {
        $this->container['agentHasRead'] = $agentHasRead;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param \DateTime $releaseDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * Gets assignedDate
     *
     * @return \DateTime
     */
    public function getAssignedDate()
    {
        return $this->container['assignedDate'];
    }

    /**
     * Sets assignedDate
     *
     * @param \DateTime $assignedDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setAssignedDate($assignedDate)
    {
        $this->container['assignedDate'] = $assignedDate;

        return $this;
    }

    /**
     * Gets changedDate
     *
     * @return \DateTime
     */
    public function getChangedDate()
    {
        return $this->container['changedDate'];
    }

    /**
     * Sets changedDate
     *
     * @param \DateTime $changedDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setChangedDate($changedDate)
    {
        $this->container['changedDate'] = $changedDate;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return \PureCloudPlatform\Client\V2\Model\Queue
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param \PureCloudPlatform\Client\V2\Model\Queue $queue queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets mediaType
     *
     * @return string[]
     */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
     * Sets mediaType
     *
     * @param string[] $mediaType List of different communication types used in conversation.
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($mediaType) && array_diff($mediaType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mediaType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mediaType'] = $mediaType;

        return $this;
    }

    /**
     * Gets rescore
     *
     * @return bool
     */
    public function getRescore()
    {
        return $this->container['rescore'];
    }

    /**
     * Sets rescore
     *
     * @param bool $rescore Is only true when evaluation is re-scored.
     *
     * @return $this
     */
    public function setRescore($rescore)
    {
        $this->container['rescore'] = $rescore;

        return $this;
    }

    /**
     * Gets conversationDate
     *
     * @return \DateTime
     */
    public function getConversationDate()
    {
        return $this->container['conversationDate'];
    }

    /**
     * Sets conversationDate
     *
     * @param \DateTime $conversationDate Date of conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setConversationDate($conversationDate)
    {
        $this->container['conversationDate'] = $conversationDate;

        return $this;
    }

    /**
     * Gets neverRelease
     *
     * @return bool
     */
    public function getNeverRelease()
    {
        return $this->container['neverRelease'];
    }

    /**
     * Sets neverRelease
     *
     * @param bool $neverRelease Signifies if the evaluation is never to be released. This cannot be set true if release date is also set.
     *
     * @return $this
     */
    public function setNeverRelease($neverRelease)
    {
        $this->container['neverRelease'] = $neverRelease;

        return $this;
    }

    /**
     * Gets resourceId
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param string $resourceId Only used for email evaluations. Will be null for all other evaluations.
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;

        return $this;
    }

    /**
     * Gets resourceType
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     *
     * @param string $resourceType The type of resource. Only used for email evaluations. Will be null for evaluations on all other resources.
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($resourceType) && !in_array($resourceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resourceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resourceType'] = $resourceType;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool $redacted Is only true when the user making the request does not have sufficient permissions to see evaluation
     *
     * @return $this
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

        return $this;
    }

    /**
     * Gets isScoringIndex
     *
     * @return bool
     */
    public function getIsScoringIndex()
    {
        return $this->container['isScoringIndex'];
    }

    /**
     * Sets isScoringIndex
     *
     * @param bool $isScoringIndex isScoringIndex
     *
     * @return $this
     */
    public function setIsScoringIndex($isScoringIndex)
    {
        $this->container['isScoringIndex'] = $isScoringIndex;

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

