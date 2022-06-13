<?php
/**
 * AppSettings
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * AppSettings Class Doc Comment
 *
 */
class AppSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_settings' => 'object',
        'app_description' => 'string',
        'app_design' => 'object',
        'app_display_name' => 'string',
        'app_status' => 'object',
        'app_type' => 'string',
        'build_enabled' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string',
        'collaborators' => '\CureDAO\Client\Model\User[]',
        'created_at' => 'string',
        'user_id' => 'int',
        'users' => '\CureDAO\Client\Model\User[]',
        'redirect_uri' => 'string',
        'company_name' => 'string',
        'homepage_url' => 'string',
        'icon_url' => 'string',
        'long_description' => 'string',
        'splash_screen' => 'string',
        'text_logo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_settings' => null,
        'app_description' => null,
        'app_design' => null,
        'app_display_name' => null,
        'app_status' => null,
        'app_type' => null,
        'build_enabled' => null,
        'client_id' => null,
        'client_secret' => null,
        'collaborators' => null,
        'created_at' => null,
        'user_id' => 'int32',
        'users' => null,
        'redirect_uri' => null,
        'company_name' => null,
        'homepage_url' => null,
        'icon_url' => null,
        'long_description' => null,
        'splash_screen' => null,
        'text_logo' => null
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
        'additional_settings' => 'additionalSettings',
        'app_description' => 'appDescription',
        'app_design' => 'appDesign',
        'app_display_name' => 'appDisplayName',
        'app_status' => 'appStatus',
        'app_type' => 'appType',
        'build_enabled' => 'buildEnabled',
        'client_id' => 'clientId',
        'client_secret' => 'clientSecret',
        'collaborators' => 'collaborators',
        'created_at' => 'createdAt',
        'user_id' => 'userId',
        'users' => 'users',
        'redirect_uri' => 'redirectUri',
        'company_name' => 'companyName',
        'homepage_url' => 'homepageUrl',
        'icon_url' => 'iconUrl',
        'long_description' => 'longDescription',
        'splash_screen' => 'splashScreen',
        'text_logo' => 'textLogo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_settings' => 'setAdditionalSettings',
        'app_description' => 'setAppDescription',
        'app_design' => 'setAppDesign',
        'app_display_name' => 'setAppDisplayName',
        'app_status' => 'setAppStatus',
        'app_type' => 'setAppType',
        'build_enabled' => 'setBuildEnabled',
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'collaborators' => 'setCollaborators',
        'created_at' => 'setCreatedAt',
        'user_id' => 'setUserId',
        'users' => 'setUsers',
        'redirect_uri' => 'setRedirectUri',
        'company_name' => 'setCompanyName',
        'homepage_url' => 'setHomepageUrl',
        'icon_url' => 'setIconUrl',
        'long_description' => 'setLongDescription',
        'splash_screen' => 'setSplashScreen',
        'text_logo' => 'setTextLogo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_settings' => 'getAdditionalSettings',
        'app_description' => 'getAppDescription',
        'app_design' => 'getAppDesign',
        'app_display_name' => 'getAppDisplayName',
        'app_status' => 'getAppStatus',
        'app_type' => 'getAppType',
        'build_enabled' => 'getBuildEnabled',
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'collaborators' => 'getCollaborators',
        'created_at' => 'getCreatedAt',
        'user_id' => 'getUserId',
        'users' => 'getUsers',
        'redirect_uri' => 'getRedirectUri',
        'company_name' => 'getCompanyName',
        'homepage_url' => 'getHomepageUrl',
        'icon_url' => 'getIconUrl',
        'long_description' => 'getLongDescription',
        'splash_screen' => 'getSplashScreen',
        'text_logo' => 'getTextLogo'
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
        $this->container['additional_settings'] = isset($data['additional_settings']) ? $data['additional_settings'] : null;
        $this->container['app_description'] = isset($data['app_description']) ? $data['app_description'] : null;
        $this->container['app_design'] = isset($data['app_design']) ? $data['app_design'] : null;
        $this->container['app_display_name'] = isset($data['app_display_name']) ? $data['app_display_name'] : null;
        $this->container['app_status'] = isset($data['app_status']) ? $data['app_status'] : null;
        $this->container['app_type'] = isset($data['app_type']) ? $data['app_type'] : null;
        $this->container['build_enabled'] = isset($data['build_enabled']) ? $data['build_enabled'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['collaborators'] = isset($data['collaborators']) ? $data['collaborators'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['homepage_url'] = isset($data['homepage_url']) ? $data['homepage_url'] : null;
        $this->container['icon_url'] = isset($data['icon_url']) ? $data['icon_url'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['splash_screen'] = isset($data['splash_screen']) ? $data['splash_screen'] : null;
        $this->container['text_logo'] = isset($data['text_logo']) ? $data['text_logo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
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
     * Gets additional_settings
     *
     * @return object
     */
    public function getAdditionalSettings()
    {
        return $this->container['additional_settings'];
    }

    /**
     * Sets additional_settings
     *
     * @param object $additional_settings What do you expect?
     *
     * @return $this
     */
    public function setAdditionalSettings($additional_settings)
    {
        $this->container['additional_settings'] = $additional_settings;

        return $this;
    }

    /**
     * Gets app_description
     *
     * @return string
     */
    public function getAppDescription()
    {
        return $this->container['app_description'];
    }

    /**
     * Sets app_description
     *
     * @param string $app_description What do you expect?
     *
     * @return $this
     */
    public function setAppDescription($app_description)
    {
        $this->container['app_description'] = $app_description;

        return $this;
    }

    /**
     * Gets app_design
     *
     * @return object
     */
    public function getAppDesign()
    {
        return $this->container['app_design'];
    }

    /**
     * Sets app_design
     *
     * @param object $app_design What do you expect?
     *
     * @return $this
     */
    public function setAppDesign($app_design)
    {
        $this->container['app_design'] = $app_design;

        return $this;
    }

    /**
     * Gets app_display_name
     *
     * @return string
     */
    public function getAppDisplayName()
    {
        return $this->container['app_display_name'];
    }

    /**
     * Sets app_display_name
     *
     * @param string $app_display_name What do you expect?
     *
     * @return $this
     */
    public function setAppDisplayName($app_display_name)
    {
        $this->container['app_display_name'] = $app_display_name;

        return $this;
    }

    /**
     * Gets app_status
     *
     * @return object
     */
    public function getAppStatus()
    {
        return $this->container['app_status'];
    }

    /**
     * Sets app_status
     *
     * @param object $app_status What do you expect?
     *
     * @return $this
     */
    public function setAppStatus($app_status)
    {
        $this->container['app_status'] = $app_status;

        return $this;
    }

    /**
     * Gets app_type
     *
     * @return string
     */
    public function getAppType()
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string $app_type What do you expect?
     *
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets build_enabled
     *
     * @return string
     */
    public function getBuildEnabled()
    {
        return $this->container['build_enabled'];
    }

    /**
     * Sets build_enabled
     *
     * @param string $build_enabled What do you expect?
     *
     * @return $this
     */
    public function setBuildEnabled($build_enabled)
    {
        $this->container['build_enabled'] = $build_enabled;

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
     * @param string $client_id Get yours at https://builder.curedao.org
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret Get yours at https://builder.curedao.org
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets collaborators
     *
     * @return \CureDAO\Client\Model\User[]
     */
    public function getCollaborators()
    {
        return $this->container['collaborators'];
    }

    /**
     * Sets collaborators
     *
     * @param \CureDAO\Client\Model\User[] $collaborators What do you expect?
     *
     * @return $this
     */
    public function setCollaborators($collaborators)
    {
        $this->container['collaborators'] = $collaborators;

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
     * @param string $created_at What do you expect?
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User id of the owner of the application
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \CureDAO\Client\Model\User[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \CureDAO\Client\Model\User[] $users What do you expect?
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string $redirect_uri What do you expect?
     *
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name What do you expect?
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets homepage_url
     *
     * @return string
     */
    public function getHomepageUrl()
    {
        return $this->container['homepage_url'];
    }

    /**
     * Sets homepage_url
     *
     * @param string $homepage_url What do you expect?
     *
     * @return $this
     */
    public function setHomepageUrl($homepage_url)
    {
        $this->container['homepage_url'] = $homepage_url;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string $icon_url What do you expect?
     *
     * @return $this
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets long_description
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['long_description'];
    }

    /**
     * Sets long_description
     *
     * @param string $long_description What do you expect?
     *
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

        return $this;
    }

    /**
     * Gets splash_screen
     *
     * @return string
     */
    public function getSplashScreen()
    {
        return $this->container['splash_screen'];
    }

    /**
     * Sets splash_screen
     *
     * @param string $splash_screen What do you expect?
     *
     * @return $this
     */
    public function setSplashScreen($splash_screen)
    {
        $this->container['splash_screen'] = $splash_screen;

        return $this;
    }

    /**
     * Gets text_logo
     *
     * @return string
     */
    public function getTextLogo()
    {
        return $this->container['text_logo'];
    }

    /**
     * Sets text_logo
     *
     * @param string $text_logo What do you expect?
     *
     * @return $this
     */
    public function setTextLogo($text_logo)
    {
        $this->container['text_logo'] = $text_logo;

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
