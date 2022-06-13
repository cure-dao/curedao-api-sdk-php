# CureDAOClient

We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/CureDAO/docs) or [contact us](https://help.quantimo.do).

- API version: 0.0.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cure-dao/curedao-sdk-php.git"
    }
  ],
  "require": {
    "curedao/curedao-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/CureDAOClient/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CureDAO\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: curedao_oauth2
CureDAO\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new CureDAO\Client\Api\AnalyticsApi();
$body = new \CureDAO\Client\Model\VoteDelete(); // \CureDAO\Client\Model\VoteDelete | The cause and effect variable names for the predictor vote to be deleted.
$user_id = 3.4; // float | User's id

try {
    $result = $api_instance->deleteVote($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->deleteVote: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://v7.curedao.org/api*
| Class               | Method                                                                                              | HTTP request                                      | Description                                                                     |
|---------------------|-----------------------------------------------------------------------------------------------------|---------------------------------------------------|---------------------------------------------------------------------------------|
|                     |                                                                                                     |                                                   |                                                                                 |
| *AnalyticsApi*      | [**getCorrelationExplanations**](docs/Api/AnalyticsApi.md#getcorrelationexplanations)               | **GET** /v3/correlations/explanations             | Get correlation explanations                                                    |
| *AnalyticsApi*      | [**getCorrelations**](docs/Api/AnalyticsApi.md#getcorrelations)                                     | **GET** /v3/correlations                          | Get correlations                                                                |
| *AppSettingsApi*    | [**getAppSettings**](docs/Api/AppSettingsApi.md#getappsettings)                                     | **GET** /v3/appSettings                           | Get client app settings                                                         |
| *AuthenticationApi* | [**getAccessToken**](docs/Api/AuthenticationApi.md#getaccesstoken)                                  | **GET** /v3/oauth2/token                          | Get a user access token                                                         |
| *AuthenticationApi* | [**getOauthAuthorizationCode**](docs/Api/AuthenticationApi.md#getoauthauthorizationcode)            | **GET** /v3/oauth2/authorize                      | Request Authorization Code                                                      |
| *AuthenticationApi* | [**postGoogleIdToken**](docs/Api/AuthenticationApi.md#postgoogleidtoken)                            | **POST** /v3/googleIdToken                        | Post GoogleIdToken                                                              |
| *ConnectorsApi*     | [**connectConnector**](docs/Api/ConnectorsApi.md#connectconnector)                                  | **GET** /v3/connectors/{connectorName}/connect    | Obtain a token from 3rd party data source                                       |
| *ConnectorsApi*     | [**disconnectConnector**](docs/Api/ConnectorsApi.md#disconnectconnector)                            | **GET** /v3/connectors/{connectorName}/disconnect | Delete stored connection info                                                   |
| *ConnectorsApi*     | [**getConnectors**](docs/Api/ConnectorsApi.md#getconnectors)                                        | **GET** /v3/connectors/list                       | List of Connectors                                                              |
| *ConnectorsApi*     | [**getIntegrationJs**](docs/Api/ConnectorsApi.md#getintegrationjs)                                  | **GET** /v3/integration.js                        | Get embeddable connect javascript                                               |
| *ConnectorsApi*     | [**getMobileConnectPage**](docs/Api/ConnectorsApi.md#getmobileconnectpage)                          | **GET** /v3/connect/mobile                        | Mobile connect page                                                             |
| *ConnectorsApi*     | [**updateConnector**](docs/Api/ConnectorsApi.md#updateconnector)                                    | **GET** /v3/connectors/{connectorName}/update     | Sync with data source                                                           |
| *FeedApi*           | [**getFeed**](docs/Api/FeedApi.md#getfeed)                                                          | **GET** /v3/feed                                  | Tracking reminder notifications, messages, and study results                    |
| *FeedApi*           | [**postFeed**](docs/Api/FeedApi.md#postfeed)                                                        | **POST** /v3/feed                                 | Post user interactions with feed                                                |
| *MeasurementsApi*   | [**deleteMeasurement**](docs/Api/MeasurementsApi.md#deletemeasurement)                              | **DELETE** /v3/measurements/delete                | Delete a measurement                                                            |
| *MeasurementsApi*   | [**getMeasurements**](docs/Api/MeasurementsApi.md#getmeasurements)                                  | **GET** /v3/measurements                          | Get measurements for this user                                                  |
| *MeasurementsApi*   | [**getPairs**](docs/Api/MeasurementsApi.md#getpairs)                                                | **GET** /v3/pairs                                 | Get pairs of measurements for correlational analysis                            |
| *MeasurementsApi*   | [**measurementExportRequest**](docs/Api/MeasurementsApi.md#measurementexportrequest)                | **POST** /v2/measurements/exportRequest           | Post Request for Measurements CSV                                               |
| *MeasurementsApi*   | [**postMeasurements**](docs/Api/MeasurementsApi.md#postmeasurements)                                | **POST** /v3/measurements/post                    | Post a new set or update existing measurements to the database                  |
| *MeasurementsApi*   | [**updateMeasurement**](docs/Api/MeasurementsApi.md#updatemeasurement)                              | **POST** /v3/measurements/update                  | Update a measurement                                                            |
|                     |                                                                                                     |                                                   |                                                                                 |
| *NotificationsApi*  | [**getNotificationPreferences**](docs/Api/NotificationsApi.md#getnotificationpreferences)           | **GET** /v3/notificationPreferences               | Get NotificationPreferences                                                     |
| *NotificationsApi*  | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications)                               | **GET** /v3/notifications                         | Get Notifications                                                               |
| *NotificationsApi*  | [**postDeviceToken**](docs/Api/NotificationsApi.md#postdevicetoken)                                 | **POST** /v3/deviceTokens                         | Post DeviceTokens                                                               |
| *NotificationsApi*  | [**postNotifications**](docs/Api/NotificationsApi.md#postnotifications)                             | **POST** /v3/notifications                        | Post Notifications                                                              |
| *RemindersApi*      | [**deleteTrackingReminder**](docs/Api/RemindersApi.md#deletetrackingreminder)                       | **DELETE** /v3/trackingReminders/delete           | Delete Tracking Reminder                                                        |
| *RemindersApi*      | [**getTrackingReminderNotifications**](docs/Api/RemindersApi.md#gettrackingremindernotifications)   | **GET** /v3/trackingReminderNotifications         | Get specific tracking reminder notifications                                    |
| *RemindersApi*      | [**getTrackingReminders**](docs/Api/RemindersApi.md#gettrackingreminders)                           | **GET** /v3/trackingReminders                     | Get repeating tracking reminder settings                                        |
| *RemindersApi*      | [**postTrackingReminderNotifications**](docs/Api/RemindersApi.md#posttrackingremindernotifications) | **POST** /v3/trackingReminderNotifications        | Snooze, skip, or track a tracking reminder notification                         |
| *RemindersApi*      | [**postTrackingReminders**](docs/Api/RemindersApi.md#posttrackingreminders)                         | **POST** /v3/trackingReminders                    | Store a Tracking Reminder                                                       |
| *SharesApi*         | [**deleteShare**](docs/Api/SharesApi.md#deleteshare)                                                | **POST** /v3/shares/delete                        | Delete share                                                                    |
| *SharesApi*         | [**getShares**](docs/Api/SharesApi.md#getshares)                                                    | **GET** /v3/shares                                | Get Authorized Apps, Studies, and Individuals                                   |
| *SharesApi*         | [**inviteShare**](docs/Api/SharesApi.md#inviteshare)                                                | **POST** /v3/shares/invite                        | Delete share                                                                    |
| *StudiesApi*        | [**createStudy**](docs/Api/StudiesApi.md#createstudy)                                               | **POST** /v3/study/create                         | Create a Study                                                                  |
| *StudiesApi*        | [**deleteVote**](docs/Api/StudiesApi.md#deletevote)                                                 | **DELETE** /v3/votes/delete                       | Delete vote                                                                     |
| *StudiesApi*        | [**getOpenStudies**](docs/Api/StudiesApi.md#getopenstudies)                                         | **GET** /v3/studies/open                          | These are open studies that anyone can join                                     |
| *StudiesApi*        | [**getStudies**](docs/Api/StudiesApi.md#getstudies)                                                 | **GET** /v3/studies                               | Get Personal or Population Studies                                              |
| *StudiesApi*        | [**getStudiesCreated**](docs/Api/StudiesApi.md#getstudiescreated)                                   | **GET** /v3/studies/created                       | Get studies you have created                                                    |
| *StudiesApi*        | [**getStudiesJoined**](docs/Api/StudiesApi.md#getstudiesjoined)                                     | **GET** /v3/studies/joined                        | Studies You Have Joined                                                         |
| *StudiesApi*        | [**getStudy**](docs/Api/StudiesApi.md#getstudy)                                                     | **GET** /v4/study                                 | Get Study                                                                       |
| *StudiesApi*        | [**joinStudy**](docs/Api/StudiesApi.md#joinstudy)                                                   | **POST** /v3/study/join                           | Join a Study                                                                    |
| *StudiesApi*        | [**postVote**](docs/Api/StudiesApi.md#postvote)                                                     | **POST** /v3/votes                                | Post or update vote                                                             |
| *StudiesApi*        | [**publishStudy**](docs/Api/StudiesApi.md#publishstudy)                                             | **POST** /v3/study/publish                        | Publish Your Study                                                              |
| *UnitsApi*          | [**getUnitCategories**](docs/Api/UnitsApi.md#getunitcategories)                                     | **GET** /v3/unitCategories                        | Get unit categories                                                             |
| *UnitsApi*          | [**getUnits**](docs/Api/UnitsApi.md#getunits)                                                       | **GET** /v3/units                                 | Get units                                                                       |
| *UserApi*           | [**deleteUser**](docs/Api/UserApi.md#deleteuser)                                                    | **DELETE** /v3/user/delete                        | Delete user                                                                     |
| *UserApi*           | [**getUser**](docs/Api/UserApi.md#getuser)                                                          | **GET** /v3/user                                  | Get user info                                                                   |
| *UserApi*           | [**getUserBlogs**](docs/Api/UserApi.md#getuserblogs)                                                | **GET** /v3/userBlogs                             | Get UserBlogs                                                                   |
| *UserApi*           | [**postUserBlogs**](docs/Api/UserApi.md#postuserblogs)                                              | **POST** /v3/userBlogs                            | Post UserBlogs                                                                  |
| *UserApi*           | [**postUserSettings**](docs/Api/UserApi.md#postusersettings)                                        | **POST** /v3/userSettings                         | Post UserSettings                                                               |
| *VariablesApi*      | [**deleteUserTag**](docs/Api/VariablesApi.md#deleteusertag)                                         | **DELETE** /v3/userTags/delete                    | Delete user tag or ingredient                                                   |
| *VariablesApi*      | [**deleteUserVariable**](docs/Api/VariablesApi.md#deleteuservariable)                               | **DELETE** /v3/userVariables/delete               | Delete All Measurements For Variable                                            |
| *VariablesApi*      | [**getVariableCategories**](docs/Api/VariablesApi.md#getvariablecategories)                         | **GET** /v3/variableCategories                    | Variable categories                                                             |
| *VariablesApi*      | [**getVariables**](docs/Api/VariablesApi.md#getvariables)                                           | **GET** /v3/variables                             | Get variables along with related user-specific analysis settings and statistics |
| *VariablesApi*      | [**postUserTags**](docs/Api/VariablesApi.md#postusertags)                                           | **POST** /v3/userTags                             | Post or update user tags or ingredients                                         |
| *VariablesApi*      | [**postUserVariables**](docs/Api/VariablesApi.md#postuservariables)                                 | **POST** /v3/variables                            | Update User Settings for a Variable                                             |
| *VariablesApi*      | [**resetUserVariableSettings**](docs/Api/VariablesApi.md#resetuservariablesettings)                 | **POST** /v3/userVariables/reset                  | Reset user settings for a variable to defaults                                  |
|                     |                                                                                                     |                                                   |                                                                                 |

## Documentation For Models

- [ActivitiesResponse](docs/Model/ActivitiesResponse.md)
- [Activity](docs/Model/Activity.md)
- [AppSettings](docs/Model/AppSettings.md)
- [AppSettingsResponse](docs/Model/AppSettingsResponse.md)
- [AuthorizedClients](docs/Model/AuthorizedClients.md)
- [Button](docs/Model/Button.md)
- [Card](docs/Model/Card.md)
- [Chart](docs/Model/Chart.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [ConnectInstructions](docs/Model/ConnectInstructions.md)
- [ConversionStep](docs/Model/ConversionStep.md)
- [Correlation](docs/Model/Correlation.md)
- [DataSource](docs/Model/DataSource.md)
- [DeviceToken](docs/Model/DeviceToken.md)
- [Explanation](docs/Model/Explanation.md)
- [ExplanationStartTracking](docs/Model/ExplanationStartTracking.md)
- [FeedResponse](docs/Model/FeedResponse.md)
- [GetConnectorsResponse](docs/Model/GetConnectorsResponse.md)
- [GetCorrelationsDataResponse](docs/Model/GetCorrelationsDataResponse.md)
- [GetCorrelationsResponse](docs/Model/GetCorrelationsResponse.md)
- [GetSharesResponse](docs/Model/GetSharesResponse.md)
- [GetStudiesResponse](docs/Model/GetStudiesResponse.md)
- [GetTrackingReminderNotificationsResponse](docs/Model/GetTrackingReminderNotificationsResponse.md)
- [Group](docs/Model/Group.md)
- [GroupsMember](docs/Model/GroupsMember.md)
- [GroupsMembersResponse](docs/Model/GroupsMembersResponse.md)
- [GroupsResponse](docs/Model/GroupsResponse.md)
- [Image](docs/Model/Image.md)
- [InputField](docs/Model/InputField.md)
- [JsonErrorResponse](docs/Model/JsonErrorResponse.md)
- [Measurement](docs/Model/Measurement.md)
- [MeasurementDelete](docs/Model/MeasurementDelete.md)
- [MeasurementItem](docs/Model/MeasurementItem.md)
- [MeasurementSet](docs/Model/MeasurementSet.md)
- [MeasurementUpdate](docs/Model/MeasurementUpdate.md)
- [Notification](docs/Model/Notification.md)
- [NotificationsResponse](docs/Model/NotificationsResponse.md)
- [Pair](docs/Model/Pair.md)
- [ParticipantInstruction](docs/Model/ParticipantInstruction.md)
- [PostMeasurementsDataResponse](docs/Model/PostMeasurementsDataResponse.md)
- [PostMeasurementsResponse](docs/Model/PostMeasurementsResponse.md)
- [PostStudyCreateResponse](docs/Model/PostStudyCreateResponse.md)
- [PostStudyPublishResponse](docs/Model/PostStudyPublishResponse.md)
- [PostTrackingRemindersDataResponse](docs/Model/PostTrackingRemindersDataResponse.md)
- [PostTrackingRemindersResponse](docs/Model/PostTrackingRemindersResponse.md)
- [PostUserSettingsDataResponse](docs/Model/PostUserSettingsDataResponse.md)
- [PostUserSettingsResponse](docs/Model/PostUserSettingsResponse.md)
- [ShareInvitationBody](docs/Model/ShareInvitationBody.md)
- [Study](docs/Model/Study.md)
- [StudyCharts](docs/Model/StudyCharts.md)
- [StudyCreationBody](docs/Model/StudyCreationBody.md)
- [StudyHtml](docs/Model/StudyHtml.md)
- [StudyImages](docs/Model/StudyImages.md)
- [StudyJoinResponse](docs/Model/StudyJoinResponse.md)
- [StudyLinks](docs/Model/StudyLinks.md)
- [StudySharing](docs/Model/StudySharing.md)
- [StudyText](docs/Model/StudyText.md)
- [StudyVotes](docs/Model/StudyVotes.md)
- [TrackingReminder](docs/Model/TrackingReminder.md)
- [TrackingReminderDelete](docs/Model/TrackingReminderDelete.md)
- [TrackingReminderNotification](docs/Model/TrackingReminderNotification.md)
- [TrackingReminderNotificationAction](docs/Model/TrackingReminderNotificationAction.md)
- [TrackingReminderNotificationPost](docs/Model/TrackingReminderNotificationPost.md)
- [TrackingReminderNotificationTrackAllAction](docs/Model/TrackingReminderNotificationTrackAllAction.md)
- [Unit](docs/Model/Unit.md)
- [UnitCategory](docs/Model/UnitCategory.md)
- [User](docs/Model/User.md)
- [UserBlog](docs/Model/UserBlog.md)
- [UserBlogsResponse](docs/Model/UserBlogsResponse.md)
- [UserTag](docs/Model/UserTag.md)
- [UserVariableDelete](docs/Model/UserVariableDelete.md)
- [Variable](docs/Model/Variable.md)
- [VariableCategory](docs/Model/VariableCategory.md)
- [VariableCharts](docs/Model/VariableCharts.md)
- [Vote](docs/Model/Vote.md)
- [VoteDelete](docs/Model/VoteDelete.md)

## Documentation For Authorization

## access_token

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string

## client_id

- **Type**: API key
- **API key parameter name**: clientId
- **Location**: URL query string

## curedao_oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://v7.curedao.org/api/v2/oauth/authorize
- **Scopes**:
- **basic**: Allows you to read user info (display name, email, etc)
- **readmeasurements**: Allows one to read a user's measurements
- **writemeasurements**: Allows you to write user measurements

## Author
