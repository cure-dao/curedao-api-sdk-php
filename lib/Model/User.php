<?php
/**
 * User
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_token' => 'string',
        'access_token_expires' => 'string',
        'access_token_expires_at_milliseconds' => 'int',
        'administrator' => 'bool',
        'authorized_clients' => '\CureDAO\Client\Model\AuthorizedClients',
        'avatar' => 'string',
        'avatar_image' => 'string',
        'capabilities' => 'string',
        'card' => '\CureDAO\Client\Model\Card',
        'client_id' => 'string',
        'client_user_id' => 'string',
        'combine_notifications' => 'bool',
        'created_at' => 'string',
        'description' => 'string',
        'display_name' => 'string',
        'earliest_reminder_time' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'get_preview_builds' => 'bool',
        'has_android_app' => 'bool',
        'has_chrome_extension' => 'bool',
        'has_ios_app' => 'bool',
        'id' => 'int',
        'last_active' => 'string',
        'last_four' => 'string',
        'last_name' => 'string',
        'last_sms_tracking_reminder_notification_id' => 'string',
        'latest_reminder_time' => 'string',
        'login_name' => 'string',
        'password' => 'string',
        'phone_number' => 'string',
        'phone_verification_code' => 'string',
        'primary_outcome_variable_id' => 'int',
        'primary_outcome_variable_name' => 'string',
        'push_notifications_enabled' => 'bool',
        'refresh_token' => 'string',
        'roles' => 'string',
        'send_predictor_emails' => 'bool',
        'send_reminder_notification_emails' => 'bool',
        'share_all_data' => 'bool',
        'sms_notifications_enabled' => 'bool',
        'stripe_active' => 'bool',
        'stripe_id' => 'string',
        'stripe_plan' => 'string',
        'stripe_subscription' => 'string',
        'subscription_ends_at' => 'string',
        'subscription_provider' => 'string',
        'time_zone_offset' => 'int',
        'track_location' => 'bool',
        'updated_at' => 'string',
        'user_registered' => 'string',
        'user_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_token' => null,
        'access_token_expires' => null,
        'access_token_expires_at_milliseconds' => null,
        'administrator' => null,
        'authorized_clients' => null,
        'avatar' => null,
        'avatar_image' => null,
        'capabilities' => null,
        'card' => null,
        'client_id' => null,
        'client_user_id' => null,
        'combine_notifications' => null,
        'created_at' => null,
        'description' => null,
        'display_name' => null,
        'earliest_reminder_time' => null,
        'email' => null,
        'first_name' => null,
        'get_preview_builds' => null,
        'has_android_app' => null,
        'has_chrome_extension' => null,
        'has_ios_app' => null,
        'id' => null,
        'last_active' => null,
        'last_four' => null,
        'last_name' => null,
        'last_sms_tracking_reminder_notification_id' => null,
        'latest_reminder_time' => null,
        'login_name' => null,
        'password' => null,
        'phone_number' => null,
        'phone_verification_code' => null,
        'primary_outcome_variable_id' => null,
        'primary_outcome_variable_name' => null,
        'push_notifications_enabled' => null,
        'refresh_token' => null,
        'roles' => null,
        'send_predictor_emails' => null,
        'send_reminder_notification_emails' => null,
        'share_all_data' => null,
        'sms_notifications_enabled' => null,
        'stripe_active' => null,
        'stripe_id' => null,
        'stripe_plan' => null,
        'stripe_subscription' => null,
        'subscription_ends_at' => null,
        'subscription_provider' => null,
        'time_zone_offset' => null,
        'track_location' => null,
        'updated_at' => null,
        'user_registered' => null,
        'user_url' => null
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
        'access_token' => 'accessToken',
        'access_token_expires' => 'accessTokenExpires',
        'access_token_expires_at_milliseconds' => 'accessTokenExpiresAtMilliseconds',
        'administrator' => 'administrator',
        'authorized_clients' => 'authorizedClients',
        'avatar' => 'avatar',
        'avatar_image' => 'avatarImage',
        'capabilities' => 'capabilities',
        'card' => 'card',
        'client_id' => 'clientId',
        'client_user_id' => 'clientUserId',
        'combine_notifications' => 'combineNotifications',
        'created_at' => 'createdAt',
        'description' => 'description',
        'display_name' => 'displayName',
        'earliest_reminder_time' => 'earliestReminderTime',
        'email' => 'email',
        'first_name' => 'firstName',
        'get_preview_builds' => 'getPreviewBuilds',
        'has_android_app' => 'hasAndroidApp',
        'has_chrome_extension' => 'hasChromeExtension',
        'has_ios_app' => 'hasIosApp',
        'id' => 'id',
        'last_active' => 'lastActive',
        'last_four' => 'lastFour',
        'last_name' => 'lastName',
        'last_sms_tracking_reminder_notification_id' => 'lastSmsTrackingReminderNotificationId',
        'latest_reminder_time' => 'latestReminderTime',
        'login_name' => 'loginName',
        'password' => 'password',
        'phone_number' => 'phoneNumber',
        'phone_verification_code' => 'phoneVerificationCode',
        'primary_outcome_variable_id' => 'primaryOutcomeVariableId',
        'primary_outcome_variable_name' => 'primaryOutcomeVariableName',
        'push_notifications_enabled' => 'pushNotificationsEnabled',
        'refresh_token' => 'refreshToken',
        'roles' => 'roles',
        'send_predictor_emails' => 'sendPredictorEmails',
        'send_reminder_notification_emails' => 'sendReminderNotificationEmails',
        'share_all_data' => 'shareAllData',
        'sms_notifications_enabled' => 'smsNotificationsEnabled',
        'stripe_active' => 'stripeActive',
        'stripe_id' => 'stripeId',
        'stripe_plan' => 'stripePlan',
        'stripe_subscription' => 'stripeSubscription',
        'subscription_ends_at' => 'subscriptionEndsAt',
        'subscription_provider' => 'subscriptionProvider',
        'time_zone_offset' => 'timeZoneOffset',
        'track_location' => 'trackLocation',
        'updated_at' => 'updatedAt',
        'user_registered' => 'userRegistered',
        'user_url' => 'userUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'access_token_expires' => 'setAccessTokenExpires',
        'access_token_expires_at_milliseconds' => 'setAccessTokenExpiresAtMilliseconds',
        'administrator' => 'setAdministrator',
        'authorized_clients' => 'setAuthorizedClients',
        'avatar' => 'setAvatar',
        'avatar_image' => 'setAvatarImage',
        'capabilities' => 'setCapabilities',
        'card' => 'setCard',
        'client_id' => 'setClientId',
        'client_user_id' => 'setClientUserId',
        'combine_notifications' => 'setCombineNotifications',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'earliest_reminder_time' => 'setEarliestReminderTime',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'get_preview_builds' => 'setGetPreviewBuilds',
        'has_android_app' => 'setHasAndroidApp',
        'has_chrome_extension' => 'setHasChromeExtension',
        'has_ios_app' => 'setHasIosApp',
        'id' => 'setId',
        'last_active' => 'setLastActive',
        'last_four' => 'setLastFour',
        'last_name' => 'setLastName',
        'last_sms_tracking_reminder_notification_id' => 'setLastSmsTrackingReminderNotificationId',
        'latest_reminder_time' => 'setLatestReminderTime',
        'login_name' => 'setLoginName',
        'password' => 'setPassword',
        'phone_number' => 'setPhoneNumber',
        'phone_verification_code' => 'setPhoneVerificationCode',
        'primary_outcome_variable_id' => 'setPrimaryOutcomeVariableId',
        'primary_outcome_variable_name' => 'setPrimaryOutcomeVariableName',
        'push_notifications_enabled' => 'setPushNotificationsEnabled',
        'refresh_token' => 'setRefreshToken',
        'roles' => 'setRoles',
        'send_predictor_emails' => 'setSendPredictorEmails',
        'send_reminder_notification_emails' => 'setSendReminderNotificationEmails',
        'share_all_data' => 'setShareAllData',
        'sms_notifications_enabled' => 'setSmsNotificationsEnabled',
        'stripe_active' => 'setStripeActive',
        'stripe_id' => 'setStripeId',
        'stripe_plan' => 'setStripePlan',
        'stripe_subscription' => 'setStripeSubscription',
        'subscription_ends_at' => 'setSubscriptionEndsAt',
        'subscription_provider' => 'setSubscriptionProvider',
        'time_zone_offset' => 'setTimeZoneOffset',
        'track_location' => 'setTrackLocation',
        'updated_at' => 'setUpdatedAt',
        'user_registered' => 'setUserRegistered',
        'user_url' => 'setUserUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'access_token_expires' => 'getAccessTokenExpires',
        'access_token_expires_at_milliseconds' => 'getAccessTokenExpiresAtMilliseconds',
        'administrator' => 'getAdministrator',
        'authorized_clients' => 'getAuthorizedClients',
        'avatar' => 'getAvatar',
        'avatar_image' => 'getAvatarImage',
        'capabilities' => 'getCapabilities',
        'card' => 'getCard',
        'client_id' => 'getClientId',
        'client_user_id' => 'getClientUserId',
        'combine_notifications' => 'getCombineNotifications',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'earliest_reminder_time' => 'getEarliestReminderTime',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'get_preview_builds' => 'getGetPreviewBuilds',
        'has_android_app' => 'getHasAndroidApp',
        'has_chrome_extension' => 'getHasChromeExtension',
        'has_ios_app' => 'getHasIosApp',
        'id' => 'getId',
        'last_active' => 'getLastActive',
        'last_four' => 'getLastFour',
        'last_name' => 'getLastName',
        'last_sms_tracking_reminder_notification_id' => 'getLastSmsTrackingReminderNotificationId',
        'latest_reminder_time' => 'getLatestReminderTime',
        'login_name' => 'getLoginName',
        'password' => 'getPassword',
        'phone_number' => 'getPhoneNumber',
        'phone_verification_code' => 'getPhoneVerificationCode',
        'primary_outcome_variable_id' => 'getPrimaryOutcomeVariableId',
        'primary_outcome_variable_name' => 'getPrimaryOutcomeVariableName',
        'push_notifications_enabled' => 'getPushNotificationsEnabled',
        'refresh_token' => 'getRefreshToken',
        'roles' => 'getRoles',
        'send_predictor_emails' => 'getSendPredictorEmails',
        'send_reminder_notification_emails' => 'getSendReminderNotificationEmails',
        'share_all_data' => 'getShareAllData',
        'sms_notifications_enabled' => 'getSmsNotificationsEnabled',
        'stripe_active' => 'getStripeActive',
        'stripe_id' => 'getStripeId',
        'stripe_plan' => 'getStripePlan',
        'stripe_subscription' => 'getStripeSubscription',
        'subscription_ends_at' => 'getSubscriptionEndsAt',
        'subscription_provider' => 'getSubscriptionProvider',
        'time_zone_offset' => 'getTimeZoneOffset',
        'track_location' => 'getTrackLocation',
        'updated_at' => 'getUpdatedAt',
        'user_registered' => 'getUserRegistered',
        'user_url' => 'getUserUrl'
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
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['access_token_expires'] = isset($data['access_token_expires']) ? $data['access_token_expires'] : null;
        $this->container['access_token_expires_at_milliseconds'] = isset($data['access_token_expires_at_milliseconds']) ? $data['access_token_expires_at_milliseconds'] : null;
        $this->container['administrator'] = isset($data['administrator']) ? $data['administrator'] : null;
        $this->container['authorized_clients'] = isset($data['authorized_clients']) ? $data['authorized_clients'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['avatar_image'] = isset($data['avatar_image']) ? $data['avatar_image'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_user_id'] = isset($data['client_user_id']) ? $data['client_user_id'] : null;
        $this->container['combine_notifications'] = isset($data['combine_notifications']) ? $data['combine_notifications'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['earliest_reminder_time'] = isset($data['earliest_reminder_time']) ? $data['earliest_reminder_time'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['get_preview_builds'] = isset($data['get_preview_builds']) ? $data['get_preview_builds'] : null;
        $this->container['has_android_app'] = isset($data['has_android_app']) ? $data['has_android_app'] : null;
        $this->container['has_chrome_extension'] = isset($data['has_chrome_extension']) ? $data['has_chrome_extension'] : null;
        $this->container['has_ios_app'] = isset($data['has_ios_app']) ? $data['has_ios_app'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_active'] = isset($data['last_active']) ? $data['last_active'] : null;
        $this->container['last_four'] = isset($data['last_four']) ? $data['last_four'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['last_sms_tracking_reminder_notification_id'] = isset($data['last_sms_tracking_reminder_notification_id']) ? $data['last_sms_tracking_reminder_notification_id'] : null;
        $this->container['latest_reminder_time'] = isset($data['latest_reminder_time']) ? $data['latest_reminder_time'] : null;
        $this->container['login_name'] = isset($data['login_name']) ? $data['login_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_verification_code'] = isset($data['phone_verification_code']) ? $data['phone_verification_code'] : null;
        $this->container['primary_outcome_variable_id'] = isset($data['primary_outcome_variable_id']) ? $data['primary_outcome_variable_id'] : null;
        $this->container['primary_outcome_variable_name'] = isset($data['primary_outcome_variable_name']) ? $data['primary_outcome_variable_name'] : null;
        $this->container['push_notifications_enabled'] = isset($data['push_notifications_enabled']) ? $data['push_notifications_enabled'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['send_predictor_emails'] = isset($data['send_predictor_emails']) ? $data['send_predictor_emails'] : null;
        $this->container['send_reminder_notification_emails'] = isset($data['send_reminder_notification_emails']) ? $data['send_reminder_notification_emails'] : null;
        $this->container['share_all_data'] = isset($data['share_all_data']) ? $data['share_all_data'] : null;
        $this->container['sms_notifications_enabled'] = isset($data['sms_notifications_enabled']) ? $data['sms_notifications_enabled'] : null;
        $this->container['stripe_active'] = isset($data['stripe_active']) ? $data['stripe_active'] : null;
        $this->container['stripe_id'] = isset($data['stripe_id']) ? $data['stripe_id'] : null;
        $this->container['stripe_plan'] = isset($data['stripe_plan']) ? $data['stripe_plan'] : null;
        $this->container['stripe_subscription'] = isset($data['stripe_subscription']) ? $data['stripe_subscription'] : null;
        $this->container['subscription_ends_at'] = isset($data['subscription_ends_at']) ? $data['subscription_ends_at'] : null;
        $this->container['subscription_provider'] = isset($data['subscription_provider']) ? $data['subscription_provider'] : null;
        $this->container['time_zone_offset'] = isset($data['time_zone_offset']) ? $data['time_zone_offset'] : null;
        $this->container['track_location'] = isset($data['track_location']) ? $data['track_location'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_registered'] = isset($data['user_registered']) ? $data['user_registered'] : null;
        $this->container['user_url'] = isset($data['user_url']) ? $data['user_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['access_token'] === null) {
            $invalidProperties[] = "'access_token' can't be null";
        }
        if ($this->container['administrator'] === null) {
            $invalidProperties[] = "'administrator' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['login_name'] === null) {
            $invalidProperties[] = "'login_name' can't be null";
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
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token User access token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets access_token_expires
     *
     * @return string
     */
    public function getAccessTokenExpires()
    {
        return $this->container['access_token_expires'];
    }

    /**
     * Sets access_token_expires
     *
     * @param string $access_token_expires Ex: 2018-08-08 02:41:19
     *
     * @return $this
     */
    public function setAccessTokenExpires($access_token_expires)
    {
        $this->container['access_token_expires'] = $access_token_expires;

        return $this;
    }

    /**
     * Gets access_token_expires_at_milliseconds
     *
     * @return int
     */
    public function getAccessTokenExpiresAtMilliseconds()
    {
        return $this->container['access_token_expires_at_milliseconds'];
    }

    /**
     * Sets access_token_expires_at_milliseconds
     *
     * @param int $access_token_expires_at_milliseconds Ex: 1533696079000
     *
     * @return $this
     */
    public function setAccessTokenExpiresAtMilliseconds($access_token_expires_at_milliseconds)
    {
        $this->container['access_token_expires_at_milliseconds'] = $access_token_expires_at_milliseconds;

        return $this;
    }

    /**
     * Gets administrator
     *
     * @return bool
     */
    public function getAdministrator()
    {
        return $this->container['administrator'];
    }

    /**
     * Sets administrator
     *
     * @param bool $administrator Is user administrator
     *
     * @return $this
     */
    public function setAdministrator($administrator)
    {
        $this->container['administrator'] = $administrator;

        return $this;
    }

    /**
     * Gets authorized_clients
     *
     * @return \CureDAO\Client\Model\AuthorizedClients
     */
    public function getAuthorizedClients()
    {
        return $this->container['authorized_clients'];
    }

    /**
     * Sets authorized_clients
     *
     * @param \CureDAO\Client\Model\AuthorizedClients $authorized_clients authorized_clients
     *
     * @return $this
     */
    public function setAuthorizedClients($authorized_clients)
    {
        $this->container['authorized_clients'] = $authorized_clients;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar Ex: https://lh6.googleusercontent.com/-BHr4hyUWqZU/AAAAAAAAAAI/AAAAAAAIG28/2Lv0en738II/photo.jpg?sz=50
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets avatar_image
     *
     * @return string
     */
    public function getAvatarImage()
    {
        return $this->container['avatar_image'];
    }

    /**
     * Sets avatar_image
     *
     * @param string $avatar_image Ex: https://lh6.googleusercontent.com/-BHr4hyUWqZU/AAAAAAAAAAI/AAAAAAAIG28/2Lv0en738II/photo.jpg?sz=50
     *
     * @return $this
     */
    public function setAvatarImage($avatar_image)
    {
        $this->container['avatar_image'] = $avatar_image;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return string
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param string $capabilities Ex: a:1:{s:13:\"administrator\";b:1;}
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Model\Card $card Avatar and info
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Ex: curedao
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_user_id
     *
     * @return string
     */
    public function getClientUserId()
    {
        return $this->container['client_user_id'];
    }

    /**
     * Sets client_user_id
     *
     * @param string $client_user_id Ex: 118444693184829555362
     *
     * @return $this
     */
    public function setClientUserId($client_user_id)
    {
        $this->container['client_user_id'] = $client_user_id;

        return $this;
    }

    /**
     * Gets combine_notifications
     *
     * @return bool
     */
    public function getCombineNotifications()
    {
        return $this->container['combine_notifications'];
    }

    /**
     * Sets combine_notifications
     *
     * @param bool $combine_notifications Ex: 1
     *
     * @return $this
     */
    public function setCombineNotifications($combine_notifications)
    {
        $this->container['combine_notifications'] = $combine_notifications;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string $description Your bio will be displayed on your published studies
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name User display name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets earliest_reminder_time
     *
     * @return string
     */
    public function getEarliestReminderTime()
    {
        return $this->container['earliest_reminder_time'];
    }

    /**
     * Sets earliest_reminder_time
     *
     * @param string $earliest_reminder_time Earliest time user should get notifications. Ex: 05:00:00
     *
     * @return $this
     */
    public function setEarliestReminderTime($earliest_reminder_time)
    {
        $this->container['earliest_reminder_time'] = $earliest_reminder_time;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email User email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name Ex: Mike
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets get_preview_builds
     *
     * @return bool
     */
    public function getGetPreviewBuilds()
    {
        return $this->container['get_preview_builds'];
    }

    /**
     * Sets get_preview_builds
     *
     * @param bool $get_preview_builds Ex: false
     *
     * @return $this
     */
    public function setGetPreviewBuilds($get_preview_builds)
    {
        $this->container['get_preview_builds'] = $get_preview_builds;

        return $this;
    }

    /**
     * Gets has_android_app
     *
     * @return bool
     */
    public function getHasAndroidApp()
    {
        return $this->container['has_android_app'];
    }

    /**
     * Sets has_android_app
     *
     * @param bool $has_android_app Ex: false
     *
     * @return $this
     */
    public function setHasAndroidApp($has_android_app)
    {
        $this->container['has_android_app'] = $has_android_app;

        return $this;
    }

    /**
     * Gets has_chrome_extension
     *
     * @return bool
     */
    public function getHasChromeExtension()
    {
        return $this->container['has_chrome_extension'];
    }

    /**
     * Sets has_chrome_extension
     *
     * @param bool $has_chrome_extension Ex: false
     *
     * @return $this
     */
    public function setHasChromeExtension($has_chrome_extension)
    {
        $this->container['has_chrome_extension'] = $has_chrome_extension;

        return $this;
    }

    /**
     * Gets has_ios_app
     *
     * @return bool
     */
    public function getHasIosApp()
    {
        return $this->container['has_ios_app'];
    }

    /**
     * Sets has_ios_app
     *
     * @param bool $has_ios_app Ex: false
     *
     * @return $this
     */
    public function setHasIosApp($has_ios_app)
    {
        $this->container['has_ios_app'] = $has_ios_app;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id User id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_active
     *
     * @return string
     */
    public function getLastActive()
    {
        return $this->container['last_active'];
    }

    /**
     * Sets last_active
     *
     * @param string $last_active Ex: Date the user last logged in
     *
     * @return $this
     */
    public function setLastActive($last_active)
    {
        $this->container['last_active'] = $last_active;

        return $this;
    }

    /**
     * Gets last_four
     *
     * @return string
     */
    public function getLastFour()
    {
        return $this->container['last_four'];
    }

    /**
     * Sets last_four
     *
     * @param string $last_four Ex: 2009
     *
     * @return $this
     */
    public function setLastFour($last_four)
    {
        $this->container['last_four'] = $last_four;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Ex: Sinn
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets last_sms_tracking_reminder_notification_id
     *
     * @return string
     */
    public function getLastSmsTrackingReminderNotificationId()
    {
        return $this->container['last_sms_tracking_reminder_notification_id'];
    }

    /**
     * Sets last_sms_tracking_reminder_notification_id
     *
     * @param string $last_sms_tracking_reminder_notification_id Ex: 1
     *
     * @return $this
     */
    public function setLastSmsTrackingReminderNotificationId($last_sms_tracking_reminder_notification_id)
    {
        $this->container['last_sms_tracking_reminder_notification_id'] = $last_sms_tracking_reminder_notification_id;

        return $this;
    }

    /**
     * Gets latest_reminder_time
     *
     * @return string
     */
    public function getLatestReminderTime()
    {
        return $this->container['latest_reminder_time'];
    }

    /**
     * Sets latest_reminder_time
     *
     * @param string $latest_reminder_time Latest time user should get notifications. Ex: 23:00:00
     *
     * @return $this
     */
    public function setLatestReminderTime($latest_reminder_time)
    {
        $this->container['latest_reminder_time'] = $latest_reminder_time;

        return $this;
    }

    /**
     * Gets login_name
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->container['login_name'];
    }

    /**
     * Sets login_name
     *
     * @param string $login_name User login name
     *
     * @return $this
     */
    public function setLoginName($login_name)
    {
        $this->container['login_name'] = $login_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Ex: PASSWORD
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Ex: 618-391-0002
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_verification_code
     *
     * @return string
     */
    public function getPhoneVerificationCode()
    {
        return $this->container['phone_verification_code'];
    }

    /**
     * Sets phone_verification_code
     *
     * @param string $phone_verification_code Ex: 1234
     *
     * @return $this
     */
    public function setPhoneVerificationCode($phone_verification_code)
    {
        $this->container['phone_verification_code'] = $phone_verification_code;

        return $this;
    }

    /**
     * Gets primary_outcome_variable_id
     *
     * @return int
     */
    public function getPrimaryOutcomeVariableId()
    {
        return $this->container['primary_outcome_variable_id'];
    }

    /**
     * Sets primary_outcome_variable_id
     *
     * @param int $primary_outcome_variable_id A good primary outcome variable is something that you want to improve and that changes inexplicably. For instance, if you have anxiety, back pain or arthritis which is worse on some days than others, these would be good candidates for primary outcome variables.  Recording their severity and potential factors will help you identify hidden factors exacerbating or improving them.
     *
     * @return $this
     */
    public function setPrimaryOutcomeVariableId($primary_outcome_variable_id)
    {
        $this->container['primary_outcome_variable_id'] = $primary_outcome_variable_id;

        return $this;
    }

    /**
     * Gets primary_outcome_variable_name
     *
     * @return string
     */
    public function getPrimaryOutcomeVariableName()
    {
        return $this->container['primary_outcome_variable_name'];
    }

    /**
     * Sets primary_outcome_variable_name
     *
     * @param string $primary_outcome_variable_name A good primary outcome variable is something that you want to improve and that changes inexplicably. For instance, if you have anxiety, back pain or arthritis which is worse on some days than others, these would be good candidates for primary outcome variables.  Recording their severity and potential factors will help you identify hidden factors exacerbating or improving them.
     *
     * @return $this
     */
    public function setPrimaryOutcomeVariableName($primary_outcome_variable_name)
    {
        $this->container['primary_outcome_variable_name'] = $primary_outcome_variable_name;

        return $this;
    }

    /**
     * Gets push_notifications_enabled
     *
     * @return bool
     */
    public function getPushNotificationsEnabled()
    {
        return $this->container['push_notifications_enabled'];
    }

    /**
     * Sets push_notifications_enabled
     *
     * @param bool $push_notifications_enabled Ex: 1
     *
     * @return $this
     */
    public function setPushNotificationsEnabled($push_notifications_enabled)
    {
        $this->container['push_notifications_enabled'] = $push_notifications_enabled;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token See https://oauth.net/2/grant-types/refresh-token/
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string $roles Ex: [\"admin\"]
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets send_predictor_emails
     *
     * @return bool
     */
    public function getSendPredictorEmails()
    {
        return $this->container['send_predictor_emails'];
    }

    /**
     * Sets send_predictor_emails
     *
     * @param bool $send_predictor_emails Ex: 1
     *
     * @return $this
     */
    public function setSendPredictorEmails($send_predictor_emails)
    {
        $this->container['send_predictor_emails'] = $send_predictor_emails;

        return $this;
    }

    /**
     * Gets send_reminder_notification_emails
     *
     * @return bool
     */
    public function getSendReminderNotificationEmails()
    {
        return $this->container['send_reminder_notification_emails'];
    }

    /**
     * Sets send_reminder_notification_emails
     *
     * @param bool $send_reminder_notification_emails Ex: 1
     *
     * @return $this
     */
    public function setSendReminderNotificationEmails($send_reminder_notification_emails)
    {
        $this->container['send_reminder_notification_emails'] = $send_reminder_notification_emails;

        return $this;
    }

    /**
     * Gets share_all_data
     *
     * @return bool
     */
    public function getShareAllData()
    {
        return $this->container['share_all_data'];
    }

    /**
     * Sets share_all_data
     *
     * @param bool $share_all_data Share all studies, charts, and measurement data with all other users
     *
     * @return $this
     */
    public function setShareAllData($share_all_data)
    {
        $this->container['share_all_data'] = $share_all_data;

        return $this;
    }

    /**
     * Gets sms_notifications_enabled
     *
     * @return bool
     */
    public function getSmsNotificationsEnabled()
    {
        return $this->container['sms_notifications_enabled'];
    }

    /**
     * Sets sms_notifications_enabled
     *
     * @param bool $sms_notifications_enabled Ex: false
     *
     * @return $this
     */
    public function setSmsNotificationsEnabled($sms_notifications_enabled)
    {
        $this->container['sms_notifications_enabled'] = $sms_notifications_enabled;

        return $this;
    }

    /**
     * Gets stripe_active
     *
     * @return bool
     */
    public function getStripeActive()
    {
        return $this->container['stripe_active'];
    }

    /**
     * Sets stripe_active
     *
     * @param bool $stripe_active Ex: 1
     *
     * @return $this
     */
    public function setStripeActive($stripe_active)
    {
        $this->container['stripe_active'] = $stripe_active;

        return $this;
    }

    /**
     * Gets stripe_id
     *
     * @return string
     */
    public function getStripeId()
    {
        return $this->container['stripe_id'];
    }

    /**
     * Sets stripe_id
     *
     * @param string $stripe_id Ex: cus_A8CEmcvl8jwLhV
     *
     * @return $this
     */
    public function setStripeId($stripe_id)
    {
        $this->container['stripe_id'] = $stripe_id;

        return $this;
    }

    /**
     * Gets stripe_plan
     *
     * @return string
     */
    public function getStripePlan()
    {
        return $this->container['stripe_plan'];
    }

    /**
     * Sets stripe_plan
     *
     * @param string $stripe_plan Ex: monthly7
     *
     * @return $this
     */
    public function setStripePlan($stripe_plan)
    {
        $this->container['stripe_plan'] = $stripe_plan;

        return $this;
    }

    /**
     * Gets stripe_subscription
     *
     * @return string
     */
    public function getStripeSubscription()
    {
        return $this->container['stripe_subscription'];
    }

    /**
     * Sets stripe_subscription
     *
     * @param string $stripe_subscription Ex: sub_ANTx3nOE7nzjQf
     *
     * @return $this
     */
    public function setStripeSubscription($stripe_subscription)
    {
        $this->container['stripe_subscription'] = $stripe_subscription;

        return $this;
    }

    /**
     * Gets subscription_ends_at
     *
     * @return string
     */
    public function getSubscriptionEndsAt()
    {
        return $this->container['subscription_ends_at'];
    }

    /**
     * Sets subscription_ends_at
     *
     * @param string $subscription_ends_at UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setSubscriptionEndsAt($subscription_ends_at)
    {
        $this->container['subscription_ends_at'] = $subscription_ends_at;

        return $this;
    }

    /**
     * Gets subscription_provider
     *
     * @return string
     */
    public function getSubscriptionProvider()
    {
        return $this->container['subscription_provider'];
    }

    /**
     * Sets subscription_provider
     *
     * @param string $subscription_provider Ex: google
     *
     * @return $this
     */
    public function setSubscriptionProvider($subscription_provider)
    {
        $this->container['subscription_provider'] = $subscription_provider;

        return $this;
    }

    /**
     * Gets time_zone_offset
     *
     * @return int
     */
    public function getTimeZoneOffset()
    {
        return $this->container['time_zone_offset'];
    }

    /**
     * Sets time_zone_offset
     *
     * @param int $time_zone_offset Ex: 300
     *
     * @return $this
     */
    public function setTimeZoneOffset($time_zone_offset)
    {
        $this->container['time_zone_offset'] = $time_zone_offset;

        return $this;
    }

    /**
     * Gets track_location
     *
     * @return bool
     */
    public function getTrackLocation()
    {
        return $this->container['track_location'];
    }

    /**
     * Sets track_location
     *
     * @param bool $track_location Ex: 1
     *
     * @return $this
     */
    public function setTrackLocation($track_location)
    {
        $this->container['track_location'] = $track_location;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at When the record in the database was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_registered
     *
     * @return string
     */
    public function getUserRegistered()
    {
        return $this->container['user_registered'];
    }

    /**
     * Sets user_registered
     *
     * @param string $user_registered Ex: 2013-12-03 15:25:13 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUserRegistered($user_registered)
    {
        $this->container['user_registered'] = $user_registered;

        return $this;
    }

    /**
     * Gets user_url
     *
     * @return string
     */
    public function getUserUrl()
    {
        return $this->container['user_url'];
    }

    /**
     * Sets user_url
     *
     * @param string $user_url Ex: https://plus.google.com/+MikeSinn
     *
     * @return $this
     */
    public function setUserUrl($user_url)
    {
        $this->container['user_url'] = $user_url;

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
