<?php
/**
 * SchedulingRunResponse
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
 * SchedulingRunResponse Class Doc Comment
 *
 * @category Class
 * @description Information containing details of a schedule run
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SchedulingRunResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SchedulingRunResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'runId' => 'string',
        'schedulerRunId' => 'string',
        'intradayRescheduling' => 'bool',
        'state' => 'string',
        'percentComplete' => 'double',
        'targetWeek' => 'string',
        'scheduleId' => 'string',
        'scheduleDescription' => 'string',
        'schedulingStartTime' => '\DateTime',
        'schedulingStartedBy' => '\PureCloudPlatform\Client\V2\Model\UserReference',
        'schedulingCanceledBy' => '\PureCloudPlatform\Client\V2\Model\UserReference',
        'schedulingCompletedTime' => '\DateTime',
        'reschedulingOptions' => '\PureCloudPlatform\Client\V2\Model\ReschedulingOptionsResponse',
        'reschedulingResultExpiration' => '\DateTime',
        'applied' => 'bool',
        'unscheduledAgents' => '\PureCloudPlatform\Client\V2\Model\UnscheduledAgentWarning[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'runId' => null,
        'schedulerRunId' => null,
        'intradayRescheduling' => null,
        'state' => null,
        'percentComplete' => 'double',
        'targetWeek' => null,
        'scheduleId' => null,
        'scheduleDescription' => null,
        'schedulingStartTime' => 'date-time',
        'schedulingStartedBy' => null,
        'schedulingCanceledBy' => null,
        'schedulingCompletedTime' => 'date-time',
        'reschedulingOptions' => null,
        'reschedulingResultExpiration' => 'date-time',
        'applied' => null,
        'unscheduledAgents' => null
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
        'runId' => 'runId',
        'schedulerRunId' => 'schedulerRunId',
        'intradayRescheduling' => 'intradayRescheduling',
        'state' => 'state',
        'percentComplete' => 'percentComplete',
        'targetWeek' => 'targetWeek',
        'scheduleId' => 'scheduleId',
        'scheduleDescription' => 'scheduleDescription',
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingStartedBy' => 'schedulingStartedBy',
        'schedulingCanceledBy' => 'schedulingCanceledBy',
        'schedulingCompletedTime' => 'schedulingCompletedTime',
        'reschedulingOptions' => 'reschedulingOptions',
        'reschedulingResultExpiration' => 'reschedulingResultExpiration',
        'applied' => 'applied',
        'unscheduledAgents' => 'unscheduledAgents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'runId' => 'setRunId',
        'schedulerRunId' => 'setSchedulerRunId',
        'intradayRescheduling' => 'setIntradayRescheduling',
        'state' => 'setState',
        'percentComplete' => 'setPercentComplete',
        'targetWeek' => 'setTargetWeek',
        'scheduleId' => 'setScheduleId',
        'scheduleDescription' => 'setScheduleDescription',
        'schedulingStartTime' => 'setSchedulingStartTime',
        'schedulingStartedBy' => 'setSchedulingStartedBy',
        'schedulingCanceledBy' => 'setSchedulingCanceledBy',
        'schedulingCompletedTime' => 'setSchedulingCompletedTime',
        'reschedulingOptions' => 'setReschedulingOptions',
        'reschedulingResultExpiration' => 'setReschedulingResultExpiration',
        'applied' => 'setApplied',
        'unscheduledAgents' => 'setUnscheduledAgents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'runId' => 'getRunId',
        'schedulerRunId' => 'getSchedulerRunId',
        'intradayRescheduling' => 'getIntradayRescheduling',
        'state' => 'getState',
        'percentComplete' => 'getPercentComplete',
        'targetWeek' => 'getTargetWeek',
        'scheduleId' => 'getScheduleId',
        'scheduleDescription' => 'getScheduleDescription',
        'schedulingStartTime' => 'getSchedulingStartTime',
        'schedulingStartedBy' => 'getSchedulingStartedBy',
        'schedulingCanceledBy' => 'getSchedulingCanceledBy',
        'schedulingCompletedTime' => 'getSchedulingCompletedTime',
        'reschedulingOptions' => 'getReschedulingOptions',
        'reschedulingResultExpiration' => 'getReschedulingResultExpiration',
        'applied' => 'getApplied',
        'unscheduledAgents' => 'getUnscheduledAgents'
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

    const STATE_NONE = 'None';
    const STATE_QUEUED = 'Queued';
    const STATE_SCHEDULING = 'Scheduling';
    const STATE_CANCELED = 'Canceled';
    const STATE_FAILED = 'Failed';
    const STATE_COMPLETE = 'Complete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_NONE,
            self::STATE_QUEUED,
            self::STATE_SCHEDULING,
            self::STATE_CANCELED,
            self::STATE_FAILED,
            self::STATE_COMPLETE,
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
        $this->container['runId'] = isset($data['runId']) ? $data['runId'] : null;
        $this->container['schedulerRunId'] = isset($data['schedulerRunId']) ? $data['schedulerRunId'] : null;
        $this->container['intradayRescheduling'] = isset($data['intradayRescheduling']) ? $data['intradayRescheduling'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['percentComplete'] = isset($data['percentComplete']) ? $data['percentComplete'] : null;
        $this->container['targetWeek'] = isset($data['targetWeek']) ? $data['targetWeek'] : null;
        $this->container['scheduleId'] = isset($data['scheduleId']) ? $data['scheduleId'] : null;
        $this->container['scheduleDescription'] = isset($data['scheduleDescription']) ? $data['scheduleDescription'] : null;
        $this->container['schedulingStartTime'] = isset($data['schedulingStartTime']) ? $data['schedulingStartTime'] : null;
        $this->container['schedulingStartedBy'] = isset($data['schedulingStartedBy']) ? $data['schedulingStartedBy'] : null;
        $this->container['schedulingCanceledBy'] = isset($data['schedulingCanceledBy']) ? $data['schedulingCanceledBy'] : null;
        $this->container['schedulingCompletedTime'] = isset($data['schedulingCompletedTime']) ? $data['schedulingCompletedTime'] : null;
        $this->container['reschedulingOptions'] = isset($data['reschedulingOptions']) ? $data['reschedulingOptions'] : null;
        $this->container['reschedulingResultExpiration'] = isset($data['reschedulingResultExpiration']) ? $data['reschedulingResultExpiration'] : null;
        $this->container['applied'] = isset($data['applied']) ? $data['applied'] : null;
        $this->container['unscheduledAgents'] = isset($data['unscheduledAgents']) ? $data['unscheduledAgents'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets runId
     *
     * @return string
     */
    public function getRunId()
    {
        return $this->container['runId'];
    }

    /**
     * Sets runId
     *
     * @param string $runId ID of the schedule run
     *
     * @return $this
     */
    public function setRunId($runId)
    {
        $this->container['runId'] = $runId;

        return $this;
    }

    /**
     * Gets schedulerRunId
     *
     * @return string
     */
    public function getSchedulerRunId()
    {
        return $this->container['schedulerRunId'];
    }

    /**
     * Sets schedulerRunId
     *
     * @param string $schedulerRunId The runId from scheduler service.  Useful for debugging schedule errors
     *
     * @return $this
     */
    public function setSchedulerRunId($schedulerRunId)
    {
        $this->container['schedulerRunId'] = $schedulerRunId;

        return $this;
    }

    /**
     * Gets intradayRescheduling
     *
     * @return bool
     */
    public function getIntradayRescheduling()
    {
        return $this->container['intradayRescheduling'];
    }

    /**
     * Sets intradayRescheduling
     *
     * @param bool $intradayRescheduling Whether this is the result of a rescheduling request
     *
     * @return $this
     */
    public function setIntradayRescheduling($intradayRescheduling)
    {
        $this->container['intradayRescheduling'] = $intradayRescheduling;

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
     * @param string $state Status of the schedule run
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets percentComplete
     *
     * @return double
     */
    public function getPercentComplete()
    {
        return $this->container['percentComplete'];
    }

    /**
     * Sets percentComplete
     *
     * @param double $percentComplete Completion percentage of the schedule run
     *
     * @return $this
     */
    public function setPercentComplete($percentComplete)
    {
        $this->container['percentComplete'] = $percentComplete;

        return $this;
    }

    /**
     * Gets targetWeek
     *
     * @return string
     */
    public function getTargetWeek()
    {
        return $this->container['targetWeek'];
    }

    /**
     * Sets targetWeek
     *
     * @param string $targetWeek The start date of the week for which the scheduling is done in yyyy-MM-dd format
     *
     * @return $this
     */
    public function setTargetWeek($targetWeek)
    {
        $this->container['targetWeek'] = $targetWeek;

        return $this;
    }

    /**
     * Gets scheduleId
     *
     * @return string
     */
    public function getScheduleId()
    {
        return $this->container['scheduleId'];
    }

    /**
     * Sets scheduleId
     *
     * @param string $scheduleId ID of the schedule. Does not apply to reschedule, see reschedulingOptions.existingScheduleId
     *
     * @return $this
     */
    public function setScheduleId($scheduleId)
    {
        $this->container['scheduleId'] = $scheduleId;

        return $this;
    }

    /**
     * Gets scheduleDescription
     *
     * @return string
     */
    public function getScheduleDescription()
    {
        return $this->container['scheduleDescription'];
    }

    /**
     * Sets scheduleDescription
     *
     * @param string $scheduleDescription Description of the schedule
     *
     * @return $this
     */
    public function setScheduleDescription($scheduleDescription)
    {
        $this->container['scheduleDescription'] = $scheduleDescription;

        return $this;
    }

    /**
     * Gets schedulingStartTime
     *
     * @return \DateTime
     */
    public function getSchedulingStartTime()
    {
        return $this->container['schedulingStartTime'];
    }

    /**
     * Sets schedulingStartTime
     *
     * @param \DateTime $schedulingStartTime Start time of the schedule run. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setSchedulingStartTime($schedulingStartTime)
    {
        $this->container['schedulingStartTime'] = $schedulingStartTime;

        return $this;
    }

    /**
     * Gets schedulingStartedBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\UserReference
     */
    public function getSchedulingStartedBy()
    {
        return $this->container['schedulingStartedBy'];
    }

    /**
     * Sets schedulingStartedBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\UserReference $schedulingStartedBy User that started the schedule run
     *
     * @return $this
     */
    public function setSchedulingStartedBy($schedulingStartedBy)
    {
        $this->container['schedulingStartedBy'] = $schedulingStartedBy;

        return $this;
    }

    /**
     * Gets schedulingCanceledBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\UserReference
     */
    public function getSchedulingCanceledBy()
    {
        return $this->container['schedulingCanceledBy'];
    }

    /**
     * Sets schedulingCanceledBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\UserReference $schedulingCanceledBy User that canceled the schedule run
     *
     * @return $this
     */
    public function setSchedulingCanceledBy($schedulingCanceledBy)
    {
        $this->container['schedulingCanceledBy'] = $schedulingCanceledBy;

        return $this;
    }

    /**
     * Gets schedulingCompletedTime
     *
     * @return \DateTime
     */
    public function getSchedulingCompletedTime()
    {
        return $this->container['schedulingCompletedTime'];
    }

    /**
     * Sets schedulingCompletedTime
     *
     * @param \DateTime $schedulingCompletedTime Time at which the scheduling run was completed. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setSchedulingCompletedTime($schedulingCompletedTime)
    {
        $this->container['schedulingCompletedTime'] = $schedulingCompletedTime;

        return $this;
    }

    /**
     * Gets reschedulingOptions
     *
     * @return \PureCloudPlatform\Client\V2\Model\ReschedulingOptionsResponse
     */
    public function getReschedulingOptions()
    {
        return $this->container['reschedulingOptions'];
    }

    /**
     * Sets reschedulingOptions
     *
     * @param \PureCloudPlatform\Client\V2\Model\ReschedulingOptionsResponse $reschedulingOptions The selected options for the reschedule request. Will always be null if intradayRescheduling is false
     *
     * @return $this
     */
    public function setReschedulingOptions($reschedulingOptions)
    {
        $this->container['reschedulingOptions'] = $reschedulingOptions;

        return $this;
    }

    /**
     * Gets reschedulingResultExpiration
     *
     * @return \DateTime
     */
    public function getReschedulingResultExpiration()
    {
        return $this->container['reschedulingResultExpiration'];
    }

    /**
     * Sets reschedulingResultExpiration
     *
     * @param \DateTime $reschedulingResultExpiration When the rescheduling result data will expire. Results are kept temporarily as they should be applied as soon as possible after the run finishes.  Will always be null if intradayRescheduling is false. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setReschedulingResultExpiration($reschedulingResultExpiration)
    {
        $this->container['reschedulingResultExpiration'] = $reschedulingResultExpiration;

        return $this;
    }

    /**
     * Gets applied
     *
     * @return bool
     */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
     * Sets applied
     *
     * @param bool $applied Whether the rescheduling run has been marked applied
     *
     * @return $this
     */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;

        return $this;
    }

    /**
     * Gets unscheduledAgents
     *
     * @return \PureCloudPlatform\Client\V2\Model\UnscheduledAgentWarning[]
     */
    public function getUnscheduledAgents()
    {
        return $this->container['unscheduledAgents'];
    }

    /**
     * Sets unscheduledAgents
     *
     * @param \PureCloudPlatform\Client\V2\Model\UnscheduledAgentWarning[] $unscheduledAgents Agents that were not scheduled in the rescheduling operation. Will always be null if intradayRescheduling is false
     *
     * @return $this
     */
    public function setUnscheduledAgents($unscheduledAgents)
    {
        $this->container['unscheduledAgents'] = $unscheduledAgents;

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


