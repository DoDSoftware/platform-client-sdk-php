<?php
/**
 * UserScheduleAdherence
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
 * UserScheduleAdherence Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserScheduleAdherence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserScheduleAdherence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'user' => '\PureCloudPlatform\Client\V2\Model\User',
        'managementUnit' => '\PureCloudPlatform\Client\V2\Model\ManagementUnit',
        'scheduledActivityCategory' => 'string',
        'systemPresence' => 'string',
        'organizationSecondaryPresenceId' => 'string',
        'routingStatus' => 'string',
        'actualActivityCategory' => 'string',
        'isOutOfOffice' => 'bool',
        'adherenceState' => 'string',
        'impact' => 'string',
        'timeOfAdherenceChange' => '\DateTime',
        'presenceUpdateTime' => '\DateTime',
        'activeQueues' => '\PureCloudPlatform\Client\V2\Model\QueueReference[]',
        'activeQueuesModifiedTime' => '\DateTime',
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
        'user' => null,
        'managementUnit' => null,
        'scheduledActivityCategory' => null,
        'systemPresence' => null,
        'organizationSecondaryPresenceId' => null,
        'routingStatus' => null,
        'actualActivityCategory' => null,
        'isOutOfOffice' => null,
        'adherenceState' => null,
        'impact' => null,
        'timeOfAdherenceChange' => 'date-time',
        'presenceUpdateTime' => 'date-time',
        'activeQueues' => null,
        'activeQueuesModifiedTime' => 'date-time',
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
        'user' => 'user',
        'managementUnit' => 'managementUnit',
        'scheduledActivityCategory' => 'scheduledActivityCategory',
        'systemPresence' => 'systemPresence',
        'organizationSecondaryPresenceId' => 'organizationSecondaryPresenceId',
        'routingStatus' => 'routingStatus',
        'actualActivityCategory' => 'actualActivityCategory',
        'isOutOfOffice' => 'isOutOfOffice',
        'adherenceState' => 'adherenceState',
        'impact' => 'impact',
        'timeOfAdherenceChange' => 'timeOfAdherenceChange',
        'presenceUpdateTime' => 'presenceUpdateTime',
        'activeQueues' => 'activeQueues',
        'activeQueuesModifiedTime' => 'activeQueuesModifiedTime',
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
        'user' => 'setUser',
        'managementUnit' => 'setManagementUnit',
        'scheduledActivityCategory' => 'setScheduledActivityCategory',
        'systemPresence' => 'setSystemPresence',
        'organizationSecondaryPresenceId' => 'setOrganizationSecondaryPresenceId',
        'routingStatus' => 'setRoutingStatus',
        'actualActivityCategory' => 'setActualActivityCategory',
        'isOutOfOffice' => 'setIsOutOfOffice',
        'adherenceState' => 'setAdherenceState',
        'impact' => 'setImpact',
        'timeOfAdherenceChange' => 'setTimeOfAdherenceChange',
        'presenceUpdateTime' => 'setPresenceUpdateTime',
        'activeQueues' => 'setActiveQueues',
        'activeQueuesModifiedTime' => 'setActiveQueuesModifiedTime',
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
        'user' => 'getUser',
        'managementUnit' => 'getManagementUnit',
        'scheduledActivityCategory' => 'getScheduledActivityCategory',
        'systemPresence' => 'getSystemPresence',
        'organizationSecondaryPresenceId' => 'getOrganizationSecondaryPresenceId',
        'routingStatus' => 'getRoutingStatus',
        'actualActivityCategory' => 'getActualActivityCategory',
        'isOutOfOffice' => 'getIsOutOfOffice',
        'adherenceState' => 'getAdherenceState',
        'impact' => 'getImpact',
        'timeOfAdherenceChange' => 'getTimeOfAdherenceChange',
        'presenceUpdateTime' => 'getPresenceUpdateTime',
        'activeQueues' => 'getActiveQueues',
        'activeQueuesModifiedTime' => 'getActiveQueuesModifiedTime',
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

    const SCHEDULED_ACTIVITY_CATEGORY_ON_QUEUE_WORK = 'OnQueueWork';
    const SCHEDULED_ACTIVITY_CATEGORY__BREAK = 'Break';
    const SCHEDULED_ACTIVITY_CATEGORY_MEAL = 'Meal';
    const SCHEDULED_ACTIVITY_CATEGORY_MEETING = 'Meeting';
    const SCHEDULED_ACTIVITY_CATEGORY_OFF_QUEUE_WORK = 'OffQueueWork';
    const SCHEDULED_ACTIVITY_CATEGORY_TIME_OFF = 'TimeOff';
    const SCHEDULED_ACTIVITY_CATEGORY_TRAINING = 'Training';
    const SCHEDULED_ACTIVITY_CATEGORY_UNAVAILABLE = 'Unavailable';
    const SCHEDULED_ACTIVITY_CATEGORY_UNSCHEDULED = 'Unscheduled';
    const SYSTEM_PRESENCE_AVAILABLE = 'Available';
    const SYSTEM_PRESENCE_AWAY = 'Away';
    const SYSTEM_PRESENCE_BUSY = 'Busy';
    const SYSTEM_PRESENCE_OFFLINE = 'Offline';
    const SYSTEM_PRESENCE_IDLE = 'Idle';
    const SYSTEM_PRESENCE_ON_QUEUE = 'OnQueue';
    const SYSTEM_PRESENCE_MEAL = 'Meal';
    const SYSTEM_PRESENCE_TRAINING = 'Training';
    const SYSTEM_PRESENCE_MEETING = 'Meeting';
    const SYSTEM_PRESENCE__BREAK = 'Break';
    const ROUTING_STATUS_OFF_QUEUE = 'OFF_QUEUE';
    const ROUTING_STATUS_IDLE = 'IDLE';
    const ROUTING_STATUS_INTERACTING = 'INTERACTING';
    const ROUTING_STATUS_NOT_RESPONDING = 'NOT_RESPONDING';
    const ROUTING_STATUS_COMMUNICATING = 'COMMUNICATING';
    const ACTUAL_ACTIVITY_CATEGORY_ON_QUEUE_WORK = 'OnQueueWork';
    const ACTUAL_ACTIVITY_CATEGORY__BREAK = 'Break';
    const ACTUAL_ACTIVITY_CATEGORY_MEAL = 'Meal';
    const ACTUAL_ACTIVITY_CATEGORY_MEETING = 'Meeting';
    const ACTUAL_ACTIVITY_CATEGORY_OFF_QUEUE_WORK = 'OffQueueWork';
    const ACTUAL_ACTIVITY_CATEGORY_TIME_OFF = 'TimeOff';
    const ACTUAL_ACTIVITY_CATEGORY_TRAINING = 'Training';
    const ACTUAL_ACTIVITY_CATEGORY_UNAVAILABLE = 'Unavailable';
    const ACTUAL_ACTIVITY_CATEGORY_UNSCHEDULED = 'Unscheduled';
    const ADHERENCE_STATE_IN_ADHERENCE = 'InAdherence';
    const ADHERENCE_STATE_OUT_OF_ADHERENCE = 'OutOfAdherence';
    const ADHERENCE_STATE_UNSCHEDULED = 'Unscheduled';
    const ADHERENCE_STATE_UNKNOWN = 'Unknown';
    const ADHERENCE_STATE_IGNORED = 'Ignored';
    const IMPACT_POSITIVE = 'Positive';
    const IMPACT_NEGATIVE = 'Negative';
    const IMPACT_NEUTRAL = 'Neutral';
    const IMPACT_UNKNOWN = 'Unknown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScheduledActivityCategoryAllowableValues()
    {
        return [
            self::SCHEDULED_ACTIVITY_CATEGORY_ON_QUEUE_WORK,
            self::SCHEDULED_ACTIVITY_CATEGORY__BREAK,
            self::SCHEDULED_ACTIVITY_CATEGORY_MEAL,
            self::SCHEDULED_ACTIVITY_CATEGORY_MEETING,
            self::SCHEDULED_ACTIVITY_CATEGORY_OFF_QUEUE_WORK,
            self::SCHEDULED_ACTIVITY_CATEGORY_TIME_OFF,
            self::SCHEDULED_ACTIVITY_CATEGORY_TRAINING,
            self::SCHEDULED_ACTIVITY_CATEGORY_UNAVAILABLE,
            self::SCHEDULED_ACTIVITY_CATEGORY_UNSCHEDULED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemPresenceAllowableValues()
    {
        return [
            self::SYSTEM_PRESENCE_AVAILABLE,
            self::SYSTEM_PRESENCE_AWAY,
            self::SYSTEM_PRESENCE_BUSY,
            self::SYSTEM_PRESENCE_OFFLINE,
            self::SYSTEM_PRESENCE_IDLE,
            self::SYSTEM_PRESENCE_ON_QUEUE,
            self::SYSTEM_PRESENCE_MEAL,
            self::SYSTEM_PRESENCE_TRAINING,
            self::SYSTEM_PRESENCE_MEETING,
            self::SYSTEM_PRESENCE__BREAK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoutingStatusAllowableValues()
    {
        return [
            self::ROUTING_STATUS_OFF_QUEUE,
            self::ROUTING_STATUS_IDLE,
            self::ROUTING_STATUS_INTERACTING,
            self::ROUTING_STATUS_NOT_RESPONDING,
            self::ROUTING_STATUS_COMMUNICATING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActualActivityCategoryAllowableValues()
    {
        return [
            self::ACTUAL_ACTIVITY_CATEGORY_ON_QUEUE_WORK,
            self::ACTUAL_ACTIVITY_CATEGORY__BREAK,
            self::ACTUAL_ACTIVITY_CATEGORY_MEAL,
            self::ACTUAL_ACTIVITY_CATEGORY_MEETING,
            self::ACTUAL_ACTIVITY_CATEGORY_OFF_QUEUE_WORK,
            self::ACTUAL_ACTIVITY_CATEGORY_TIME_OFF,
            self::ACTUAL_ACTIVITY_CATEGORY_TRAINING,
            self::ACTUAL_ACTIVITY_CATEGORY_UNAVAILABLE,
            self::ACTUAL_ACTIVITY_CATEGORY_UNSCHEDULED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdherenceStateAllowableValues()
    {
        return [
            self::ADHERENCE_STATE_IN_ADHERENCE,
            self::ADHERENCE_STATE_OUT_OF_ADHERENCE,
            self::ADHERENCE_STATE_UNSCHEDULED,
            self::ADHERENCE_STATE_UNKNOWN,
            self::ADHERENCE_STATE_IGNORED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImpactAllowableValues()
    {
        return [
            self::IMPACT_POSITIVE,
            self::IMPACT_NEGATIVE,
            self::IMPACT_NEUTRAL,
            self::IMPACT_UNKNOWN,
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['managementUnit'] = isset($data['managementUnit']) ? $data['managementUnit'] : null;
        $this->container['scheduledActivityCategory'] = isset($data['scheduledActivityCategory']) ? $data['scheduledActivityCategory'] : null;
        $this->container['systemPresence'] = isset($data['systemPresence']) ? $data['systemPresence'] : null;
        $this->container['organizationSecondaryPresenceId'] = isset($data['organizationSecondaryPresenceId']) ? $data['organizationSecondaryPresenceId'] : null;
        $this->container['routingStatus'] = isset($data['routingStatus']) ? $data['routingStatus'] : null;
        $this->container['actualActivityCategory'] = isset($data['actualActivityCategory']) ? $data['actualActivityCategory'] : null;
        $this->container['isOutOfOffice'] = isset($data['isOutOfOffice']) ? $data['isOutOfOffice'] : null;
        $this->container['adherenceState'] = isset($data['adherenceState']) ? $data['adherenceState'] : null;
        $this->container['impact'] = isset($data['impact']) ? $data['impact'] : null;
        $this->container['timeOfAdherenceChange'] = isset($data['timeOfAdherenceChange']) ? $data['timeOfAdherenceChange'] : null;
        $this->container['presenceUpdateTime'] = isset($data['presenceUpdateTime']) ? $data['presenceUpdateTime'] : null;
        $this->container['activeQueues'] = isset($data['activeQueues']) ? $data['activeQueues'] : null;
        $this->container['activeQueuesModifiedTime'] = isset($data['activeQueuesModifiedTime']) ? $data['activeQueuesModifiedTime'] : null;
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

        $allowedValues = $this->getScheduledActivityCategoryAllowableValues();
        if (!is_null($this->container['scheduledActivityCategory']) && !in_array($this->container['scheduledActivityCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scheduledActivityCategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSystemPresenceAllowableValues();
        if (!is_null($this->container['systemPresence']) && !in_array($this->container['systemPresence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'systemPresence', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoutingStatusAllowableValues();
        if (!is_null($this->container['routingStatus']) && !in_array($this->container['routingStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'routingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActualActivityCategoryAllowableValues();
        if (!is_null($this->container['actualActivityCategory']) && !in_array($this->container['actualActivityCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'actualActivityCategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdherenceStateAllowableValues();
        if (!is_null($this->container['adherenceState']) && !in_array($this->container['adherenceState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'adherenceState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getImpactAllowableValues();
        if (!is_null($this->container['impact']) && !in_array($this->container['impact'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'impact', must be one of '%s'",
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
     * Gets user
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $user The user for whom this status applies
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets managementUnit
     *
     * @return \PureCloudPlatform\Client\V2\Model\ManagementUnit
     */
    public function getManagementUnit()
    {
        return $this->container['managementUnit'];
    }

    /**
     * Sets managementUnit
     *
     * @param \PureCloudPlatform\Client\V2\Model\ManagementUnit $managementUnit The management unit to which this user belongs
     *
     * @return $this
     */
    public function setManagementUnit($managementUnit)
    {
        $this->container['managementUnit'] = $managementUnit;

        return $this;
    }

    /**
     * Gets scheduledActivityCategory
     *
     * @return string
     */
    public function getScheduledActivityCategory()
    {
        return $this->container['scheduledActivityCategory'];
    }

    /**
     * Sets scheduledActivityCategory
     *
     * @param string $scheduledActivityCategory Activity for which the user is scheduled
     *
     * @return $this
     */
    public function setScheduledActivityCategory($scheduledActivityCategory)
    {
        $allowedValues = $this->getScheduledActivityCategoryAllowableValues();
        if (!is_null($scheduledActivityCategory) && !in_array($scheduledActivityCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scheduledActivityCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scheduledActivityCategory'] = $scheduledActivityCategory;

        return $this;
    }

    /**
     * Gets systemPresence
     *
     * @return string
     */
    public function getSystemPresence()
    {
        return $this->container['systemPresence'];
    }

    /**
     * Sets systemPresence
     *
     * @param string $systemPresence Actual underlying system presence value
     *
     * @return $this
     */
    public function setSystemPresence($systemPresence)
    {
        $allowedValues = $this->getSystemPresenceAllowableValues();
        if (!is_null($systemPresence) && !in_array($systemPresence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'systemPresence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['systemPresence'] = $systemPresence;

        return $this;
    }

    /**
     * Gets organizationSecondaryPresenceId
     *
     * @return string
     */
    public function getOrganizationSecondaryPresenceId()
    {
        return $this->container['organizationSecondaryPresenceId'];
    }

    /**
     * Sets organizationSecondaryPresenceId
     *
     * @param string $organizationSecondaryPresenceId Organization Secondary Presence Id.
     *
     * @return $this
     */
    public function setOrganizationSecondaryPresenceId($organizationSecondaryPresenceId)
    {
        $this->container['organizationSecondaryPresenceId'] = $organizationSecondaryPresenceId;

        return $this;
    }

    /**
     * Gets routingStatus
     *
     * @return string
     */
    public function getRoutingStatus()
    {
        return $this->container['routingStatus'];
    }

    /**
     * Sets routingStatus
     *
     * @param string $routingStatus Actual underlying routing status, used to determine whether a user is actually in adherence when OnQueue
     *
     * @return $this
     */
    public function setRoutingStatus($routingStatus)
    {
        $allowedValues = $this->getRoutingStatusAllowableValues();
        if (!is_null($routingStatus) && !in_array($routingStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'routingStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['routingStatus'] = $routingStatus;

        return $this;
    }

    /**
     * Gets actualActivityCategory
     *
     * @return string
     */
    public function getActualActivityCategory()
    {
        return $this->container['actualActivityCategory'];
    }

    /**
     * Sets actualActivityCategory
     *
     * @param string $actualActivityCategory Activity in which the user is actually engaged
     *
     * @return $this
     */
    public function setActualActivityCategory($actualActivityCategory)
    {
        $allowedValues = $this->getActualActivityCategoryAllowableValues();
        if (!is_null($actualActivityCategory) && !in_array($actualActivityCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actualActivityCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['actualActivityCategory'] = $actualActivityCategory;

        return $this;
    }

    /**
     * Gets isOutOfOffice
     *
     * @return bool
     */
    public function getIsOutOfOffice()
    {
        return $this->container['isOutOfOffice'];
    }

    /**
     * Sets isOutOfOffice
     *
     * @param bool $isOutOfOffice Whether the user is marked OutOfOffice
     *
     * @return $this
     */
    public function setIsOutOfOffice($isOutOfOffice)
    {
        $this->container['isOutOfOffice'] = $isOutOfOffice;

        return $this;
    }

    /**
     * Gets adherenceState
     *
     * @return string
     */
    public function getAdherenceState()
    {
        return $this->container['adherenceState'];
    }

    /**
     * Sets adherenceState
     *
     * @param string $adherenceState The user's current adherence state
     *
     * @return $this
     */
    public function setAdherenceState($adherenceState)
    {
        $allowedValues = $this->getAdherenceStateAllowableValues();
        if (!is_null($adherenceState) && !in_array($adherenceState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'adherenceState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adherenceState'] = $adherenceState;

        return $this;
    }

    /**
     * Gets impact
     *
     * @return string
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     *
     * @param string $impact The impact of the user's current adherenceState
     *
     * @return $this
     */
    public function setImpact($impact)
    {
        $allowedValues = $this->getImpactAllowableValues();
        if (!is_null($impact) && !in_array($impact, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'impact', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['impact'] = $impact;

        return $this;
    }

    /**
     * Gets timeOfAdherenceChange
     *
     * @return \DateTime
     */
    public function getTimeOfAdherenceChange()
    {
        return $this->container['timeOfAdherenceChange'];
    }

    /**
     * Sets timeOfAdherenceChange
     *
     * @param \DateTime $timeOfAdherenceChange Time when the user entered the current adherenceState in ISO-8601 format
     *
     * @return $this
     */
    public function setTimeOfAdherenceChange($timeOfAdherenceChange)
    {
        $this->container['timeOfAdherenceChange'] = $timeOfAdherenceChange;

        return $this;
    }

    /**
     * Gets presenceUpdateTime
     *
     * @return \DateTime
     */
    public function getPresenceUpdateTime()
    {
        return $this->container['presenceUpdateTime'];
    }

    /**
     * Sets presenceUpdateTime
     *
     * @param \DateTime $presenceUpdateTime Time when presence was last updated.  Used to calculate time in current status. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setPresenceUpdateTime($presenceUpdateTime)
    {
        $this->container['presenceUpdateTime'] = $presenceUpdateTime;

        return $this;
    }

    /**
     * Gets activeQueues
     *
     * @return \PureCloudPlatform\Client\V2\Model\QueueReference[]
     */
    public function getActiveQueues()
    {
        return $this->container['activeQueues'];
    }

    /**
     * Sets activeQueues
     *
     * @param \PureCloudPlatform\Client\V2\Model\QueueReference[] $activeQueues The list of queues to which this user is joined
     *
     * @return $this
     */
    public function setActiveQueues($activeQueues)
    {
        $this->container['activeQueues'] = $activeQueues;

        return $this;
    }

    /**
     * Gets activeQueuesModifiedTime
     *
     * @return \DateTime
     */
    public function getActiveQueuesModifiedTime()
    {
        return $this->container['activeQueuesModifiedTime'];
    }

    /**
     * Sets activeQueuesModifiedTime
     *
     * @param \DateTime $activeQueuesModifiedTime Time when the list of active queues for this user was last updated. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setActiveQueuesModifiedTime($activeQueuesModifiedTime)
    {
        $this->container['activeQueuesModifiedTime'] = $activeQueuesModifiedTime;

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


