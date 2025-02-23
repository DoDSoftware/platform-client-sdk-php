# Participant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A globally unique identifier for this conversation. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant joined the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant was connected to the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**name** | **string** | A human readable name identifying the participant. | [optional] 
**userUri** | **string** | If this participant represents a user, then this will be an URI that can be used to fetch the user. | [optional] 
**userId** | **string** | If this participant represents a user, then this will be the globally unique identifier for the user. | [optional] 
**externalContactId** | **string** | If this participant represents an external contact, then this will be the globally unique identifier for the external contact. | [optional] 
**externalOrganizationId** | **string** | If this participant represents an external org, then this will be the globally unique identifier for the external org. | [optional] 
**queueId** | **string** | If present, the queue id that the communication channel came in on. | [optional] 
**groupId** | **string** | If present, group of users the participant represents. | [optional] 
**queueName** | **string** | If present, the queue name that the communication channel came in on. | [optional] 
**purpose** | **string** | A well known string that specifies the purpose of this participant. | [optional] 
**participantType** | **string** | A well known string that specifies the type of this participant. | [optional] 
**consultParticipantId** | **string** | If this participant is part of a consult transfer, then this will be the participant id of the participant being transferred. | [optional] 
**address** | **string** | The address for the this participant. For a phone call this will be the ANI. | [optional] 
**ani** | **string** | The address for the this participant. For a phone call this will be the ANI. | [optional] 
**aniName** | **string** | The ani-based name for this participant. | [optional] 
**dnis** | **string** | The address for the this participant. For a phone call this will be the ANI. | [optional] 
**locale** | **string** | An ISO 639 language code specifying the locale for this participant | [optional] 
**wrapupRequired** | **bool** | True iff this participant is required to enter wrapup for this conversation. | [optional] 
**wrapupPrompt** | **string** | This field controls how the UI prompts the agent for a wrapup. | [optional] 
**wrapupTimeoutMs** | **int** | Specifies how long a timed ACW session will last. | [optional] 
**wrapupSkipped** | **bool** | The UI sets this field when the agent chooses to skip entering a wrapup for this participant. | [optional] 
**wrapup** | [**\PureCloudPlatform\Client\V2\Model\Wrapup**](Wrapup.md) | Call wrap up or disposition data. | [optional] 
**conversationRoutingData** | [**\PureCloudPlatform\Client\V2\Model\ConversationRoutingData**](ConversationRoutingData.md) | Information on how a communication should be routed to an agent. | [optional] 
**alertingTimeoutMs** | **int** | Specifies how long the agent has to answer an interaction before being marked as not responding. | [optional] 
**monitoredParticipantId** | **string** | If this participant is a monitor, then this will be the id of the participant that is being monitored. | [optional] 
**attributes** | **map[string,string]** | Additional participant attributes | [optional] 
**calls** | [**\PureCloudPlatform\Client\V2\Model\Call[]**](Call.md) |  | [optional] 
**callbacks** | [**\PureCloudPlatform\Client\V2\Model\Callback[]**](Callback.md) |  | [optional] 
**chats** | [**\PureCloudPlatform\Client\V2\Model\ConversationChat[]**](ConversationChat.md) |  | [optional] 
**cobrowsesessions** | [**\PureCloudPlatform\Client\V2\Model\Cobrowsesession[]**](Cobrowsesession.md) |  | [optional] 
**emails** | [**\PureCloudPlatform\Client\V2\Model\Email[]**](Email.md) |  | [optional] 
**messages** | [**\PureCloudPlatform\Client\V2\Model\Message[]**](Message.md) |  | [optional] 
**screenshares** | [**\PureCloudPlatform\Client\V2\Model\Screenshare[]**](Screenshare.md) |  | [optional] 
**socialExpressions** | [**\PureCloudPlatform\Client\V2\Model\SocialExpression[]**](SocialExpression.md) |  | [optional] 
**videos** | [**\PureCloudPlatform\Client\V2\Model\Video[]**](Video.md) |  | [optional] 
**evaluations** | [**\PureCloudPlatform\Client\V2\Model\Evaluation[]**](Evaluation.md) |  | [optional] 
**screenRecordingState** | **string** | The current screen recording state for this participant. | [optional] 
**flaggedReason** | **string** | The reason specifying why participant flagged the conversation. | [optional] 
**startAcwTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant started after-call work. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endAcwTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant ended after-call work. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


