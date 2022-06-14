<?php
/**
 * DataSource
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * DataSource Class
 */
class DataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate' => 'bool',
        'background_color' => 'string',
        'buttons' => '\CureDAO\Client\Models\Button[]',
        'card' => '\CureDAO\Client\Models\Card',
        'client_id' => 'string',
        'connected' => 'bool',
        'connect_error' => 'string',
        'connect_instructions' => '\CureDAO\Client\Models\ConnectInstructions',
        'connector_id' => 'int',
        'connect_status' => 'string',
        'count' => 'int',
        'created_at' => 'string',
        'connector_client_id' => 'string',
        'default_variable_category_name' => 'string',
        'display_name' => 'string',
        'enabled' => 'int',
        'get_it_url' => 'string',
        'id' => 'int',
        'image' => 'string',
        'image_html' => 'string',
        'last_successful_updated_at' => 'string',
        'last_update' => 'int',
        'linked_display_name_html' => 'string',
        'long_description' => 'string',
        'message' => 'string',
        'mobile_connect_method' => 'string',
        'name' => 'string',
        'platforms' => 'string[]',
        'premium' => 'bool',
        'scopes' => 'string[]',
        'short_description' => 'string',
        'spreadsheet_upload_link' => 'string',
        'total_measurements_in_last_update' => 'int',
        'updated_at' => 'string',
        'update_requested_at' => 'string',
        'update_status' => 'string',
        'user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate' => null,
        'background_color' => null,
        'buttons' => null,
        'card' => null,
        'client_id' => null,
        'connected' => null,
        'connect_error' => null,
        'connect_instructions' => null,
        'connector_id' => null,
        'connect_status' => null,
        'count' => null,
        'created_at' => null,
        'connector_client_id' => null,
        'default_variable_category_name' => null,
        'display_name' => null,
        'enabled' => null,
        'get_it_url' => null,
        'id' => null,
        'image' => null,
        'image_html' => null,
        'last_successful_updated_at' => null,
        'last_update' => null,
        'linked_display_name_html' => null,
        'long_description' => null,
        'message' => null,
        'mobile_connect_method' => null,
        'name' => null,
        'platforms' => null,
        'premium' => null,
        'scopes' => null,
        'short_description' => null,
        'spreadsheet_upload_link' => null,
        'total_measurements_in_last_update' => null,
        'updated_at' => null,
        'update_requested_at' => null,
        'update_status' => null,
        'user_id' => null
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
        'affiliate' => 'affiliate',
        'background_color' => 'backgroundColor',
        'buttons' => 'buttons',
        'card' => 'card',
        'client_id' => 'clientId',
        'connected' => 'connected',
        'connect_error' => 'connectError',
        'connect_instructions' => 'connectInstructions',
        'connector_id' => 'connectorId',
        'connect_status' => 'connectStatus',
        'count' => 'count',
        'created_at' => 'createdAt',
        'connector_client_id' => 'connectorClientId',
        'default_variable_category_name' => 'defaultVariableCategoryName',
        'display_name' => 'displayName',
        'enabled' => 'enabled',
        'get_it_url' => 'getItUrl',
        'id' => 'id',
        'image' => 'image',
        'image_html' => 'imageHtml',
        'last_successful_updated_at' => 'lastSuccessfulUpdatedAt',
        'last_update' => 'lastUpdate',
        'linked_display_name_html' => 'linkedDisplayNameHtml',
        'long_description' => 'longDescription',
        'message' => 'message',
        'mobile_connect_method' => 'mobileConnectMethod',
        'name' => 'name',
        'platforms' => 'platforms',
        'premium' => 'premium',
        'scopes' => 'scopes',
        'short_description' => 'shortDescription',
        'spreadsheet_upload_link' => 'spreadsheetUploadLink',
        'total_measurements_in_last_update' => 'totalMeasurementsInLastUpdate',
        'updated_at' => 'updatedAt',
        'update_requested_at' => 'updateRequestedAt',
        'update_status' => 'updateStatus',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate' => 'setAffiliate',
        'background_color' => 'setBackgroundColor',
        'buttons' => 'setButtons',
        'card' => 'setCard',
        'client_id' => 'setClientId',
        'connected' => 'setConnected',
        'connect_error' => 'setConnectError',
        'connect_instructions' => 'setConnectInstructions',
        'connector_id' => 'setConnectorId',
        'connect_status' => 'setConnectStatus',
        'count' => 'setCount',
        'created_at' => 'setCreatedAt',
        'connector_client_id' => 'setConnectorClientId',
        'default_variable_category_name' => 'setDefaultVariableCategoryName',
        'display_name' => 'setDisplayName',
        'enabled' => 'setEnabled',
        'get_it_url' => 'setGetItUrl',
        'id' => 'setId',
        'image' => 'setImage',
        'image_html' => 'setImageHtml',
        'last_successful_updated_at' => 'setLastSuccessfulUpdatedAt',
        'last_update' => 'setLastUpdate',
        'linked_display_name_html' => 'setLinkedDisplayNameHtml',
        'long_description' => 'setLongDescription',
        'message' => 'setMessage',
        'mobile_connect_method' => 'setMobileConnectMethod',
        'name' => 'setName',
        'platforms' => 'setPlatforms',
        'premium' => 'setPremium',
        'scopes' => 'setScopes',
        'short_description' => 'setShortDescription',
        'spreadsheet_upload_link' => 'setSpreadsheetUploadLink',
        'total_measurements_in_last_update' => 'setTotalMeasurementsInLastUpdate',
        'updated_at' => 'setUpdatedAt',
        'update_requested_at' => 'setUpdateRequestedAt',
        'update_status' => 'setUpdateStatus',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate' => 'getAffiliate',
        'background_color' => 'getBackgroundColor',
        'buttons' => 'getButtons',
        'card' => 'getCard',
        'client_id' => 'getClientId',
        'connected' => 'getConnected',
        'connect_error' => 'getConnectError',
        'connect_instructions' => 'getConnectInstructions',
        'connector_id' => 'getConnectorId',
        'connect_status' => 'getConnectStatus',
        'count' => 'getCount',
        'created_at' => 'getCreatedAt',
        'connector_client_id' => 'getConnectorClientId',
        'default_variable_category_name' => 'getDefaultVariableCategoryName',
        'display_name' => 'getDisplayName',
        'enabled' => 'getEnabled',
        'get_it_url' => 'getGetItUrl',
        'id' => 'getId',
        'image' => 'getImage',
        'image_html' => 'getImageHtml',
        'last_successful_updated_at' => 'getLastSuccessfulUpdatedAt',
        'last_update' => 'getLastUpdate',
        'linked_display_name_html' => 'getLinkedDisplayNameHtml',
        'long_description' => 'getLongDescription',
        'message' => 'getMessage',
        'mobile_connect_method' => 'getMobileConnectMethod',
        'name' => 'getName',
        'platforms' => 'getPlatforms',
        'premium' => 'getPremium',
        'scopes' => 'getScopes',
        'short_description' => 'getShortDescription',
        'spreadsheet_upload_link' => 'getSpreadsheetUploadLink',
        'total_measurements_in_last_update' => 'getTotalMeasurementsInLastUpdate',
        'updated_at' => 'getUpdatedAt',
        'update_requested_at' => 'getUpdateRequestedAt',
        'update_status' => 'getUpdateStatus',
        'user_id' => 'getUserId'
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
        $this->container['affiliate'] = isset($data['affiliate']) ? $data['affiliate'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['buttons'] = isset($data['buttons']) ? $data['buttons'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['connect_error'] = isset($data['connect_error']) ? $data['connect_error'] : null;
        $this->container['connect_instructions'] = isset($data['connect_instructions']) ? $data['connect_instructions'] : null;
        $this->container['connector_id'] = isset($data['connector_id']) ? $data['connector_id'] : null;
        $this->container['connect_status'] = isset($data['connect_status']) ? $data['connect_status'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['connector_client_id'] = isset($data['connector_client_id']) ? $data['connector_client_id'] : null;
        $this->container['default_variable_category_name'] = isset($data['default_variable_category_name']) ? $data['default_variable_category_name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['get_it_url'] = isset($data['get_it_url']) ? $data['get_it_url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image_html'] = isset($data['image_html']) ? $data['image_html'] : null;
        $this->container['last_successful_updated_at'] = isset($data['last_successful_updated_at']) ? $data['last_successful_updated_at'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['linked_display_name_html'] = isset($data['linked_display_name_html']) ? $data['linked_display_name_html'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['mobile_connect_method'] = isset($data['mobile_connect_method']) ? $data['mobile_connect_method'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['platforms'] = isset($data['platforms']) ? $data['platforms'] : null;
        $this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['spreadsheet_upload_link'] = isset($data['spreadsheet_upload_link']) ? $data['spreadsheet_upload_link'] : null;
        $this->container['total_measurements_in_last_update'] = isset($data['total_measurements_in_last_update']) ? $data['total_measurements_in_last_update'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['update_requested_at'] = isset($data['update_requested_at']) ? $data['update_requested_at'] : null;
        $this->container['update_status'] = isset($data['update_status']) ? $data['update_status'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['affiliate'] === null) {
            $invalidProperties[] = "'affiliate' can't be null";
        }
        if ($this->container['connector_client_id'] === null) {
            $invalidProperties[] = "'connector_client_id' can't be null";
        }
        if ($this->container['default_variable_category_name'] === null) {
            $invalidProperties[] = "'default_variable_category_name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['get_it_url'] === null) {
            $invalidProperties[] = "'get_it_url' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['image_html'] === null) {
            $invalidProperties[] = "'image_html' can't be null";
        }
        if ($this->container['linked_display_name_html'] === null) {
            $invalidProperties[] = "'linked_display_name_html' can't be null";
        }
        if ($this->container['long_description'] === null) {
            $invalidProperties[] = "'long_description' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['short_description'] === null) {
            $invalidProperties[] = "'short_description' can't be null";
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
     * Gets affiliate
     *
     * @return bool
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     *
     * @param bool $affiliate Ex: true
     *
     * @return $this
     */
    public function setAffiliate($affiliate)
    {
        $this->container['affiliate'] = $affiliate;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Background color HEX code that matches the icon
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets buttons
     *
     * @return \CureDAO\Client\Models\Button[]
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \CureDAO\Client\Models\Button[] $buttons buttons
     *
     * @return $this
     */
    public function setButtons($buttons)
    {
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \CureDAO\Client\Models\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Models\Card $card Card containing instructions, image, text, link and relevant import buttons
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
     * @param string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return bool
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool $connected True if the authenticated user has this connector enabled
     *
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets connect_error
     *
     * @return string
     */
    public function getConnectError()
    {
        return $this->container['connect_error'];
    }

    /**
     * Sets connect_error
     *
     * @param string $connect_error Ex: Your token is expired. Please re-connect
     *
     * @return $this
     */
    public function setConnectError($connect_error)
    {
        $this->container['connect_error'] = $connect_error;

        return $this;
    }

    /**
     * Gets connect_instructions
     *
     * @return \CureDAO\Client\Models\ConnectInstructions
     */
    public function getConnectInstructions()
    {
        return $this->container['connect_instructions'];
    }

    /**
     * Sets connect_instructions
     *
     * @param \CureDAO\Client\Models\ConnectInstructions $connect_instructions URL and parameters used when connecting to a service
     *
     * @return $this
     */
    public function setConnectInstructions($connect_instructions)
    {
        $this->container['connect_instructions'] = $connect_instructions;

        return $this;
    }

    /**
     * Gets connector_id
     *
     * @return int
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     *
     * @param int $connector_id Ex: 8
     *
     * @return $this
     */
    public function setConnectorId($connector_id)
    {
        $this->container['connector_id'] = $connector_id;

        return $this;
    }

    /**
     * Gets connect_status
     *
     * @return string
     */
    public function getConnectStatus()
    {
        return $this->container['connect_status'];
    }

    /**
     * Sets connect_status
     *
     * @param string $connect_status Ex: CONNECTED
     *
     * @return $this
     */
    public function setConnectStatus($connect_status)
    {
        $this->container['connect_status'] = $connect_status;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Number of measurements from this source or number of users who have measurements from this source
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

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
     * @param string $created_at Ex: 2000-01-01 00:00:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets connector_client_id
     *
     * @return string
     */
    public function getConnectorClientId()
    {
        return $this->container['connector_client_id'];
    }

    /**
     * Sets connector_client_id
     *
     * @param string $connector_client_id Ex: ba7d0c12432650e23b3ce924ae2d21e2ff59e7e4e28650759633700af7ed0a30
     *
     * @return $this
     */
    public function setConnectorClientId($connector_client_id)
    {
        $this->container['connector_client_id'] = $connector_client_id;

        return $this;
    }

    /**
     * Gets default_variable_category_name
     *
     * @return string
     */
    public function getDefaultVariableCategoryName()
    {
        return $this->container['default_variable_category_name'];
    }

    /**
     * Sets default_variable_category_name
     *
     * @param string $default_variable_category_name Ex: Foods
     *
     * @return $this
     */
    public function setDefaultVariableCategoryName($default_variable_category_name)
    {
        $this->container['default_variable_category_name'] = $default_variable_category_name;

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
     * @param string $display_name Ex: CureDAO
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param int $enabled Ex: 0
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets get_it_url
     *
     * @return string
     */
    public function getGetItUrl()
    {
        return $this->container['get_it_url'];
    }

    /**
     * Sets get_it_url
     *
     * @param string $get_it_url Ex: https://quantimo.do
     *
     * @return $this
     */
    public function setGetItUrl($get_it_url)
    {
        $this->container['get_it_url'] = $get_it_url;

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
     * @param int $id Ex: 72
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image Ex: https://web.quantimo.do/img/logos/curedao-logo-qm-rainbow-200-200.png
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_html
     *
     * @return string
     */
    public function getImageHtml()
    {
        return $this->container['image_html'];
    }

    /**
     * Sets image_html
     *
     * @param string $image_html Ex: <a href=\"https://quantimo.do\"><img id=\"curedao_image\" title=\"CureDAO\" src=\"https://web.quantimo.do/img/logos/curedao-logo-qm-rainbow-200-200.png\" alt=\"CureDAO\"></a>
     *
     * @return $this
     */
    public function setImageHtml($image_html)
    {
        $this->container['image_html'] = $image_html;

        return $this;
    }

    /**
     * Gets last_successful_updated_at
     *
     * @return string
     */
    public function getLastSuccessfulUpdatedAt()
    {
        return $this->container['last_successful_updated_at'];
    }

    /**
     * Sets last_successful_updated_at
     *
     * @param string $last_successful_updated_at Ex: 2017-07-31 10:10:34 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setLastSuccessfulUpdatedAt($last_successful_updated_at)
    {
        $this->container['last_successful_updated_at'] = $last_successful_updated_at;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return int
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param int $last_update Epoch timestamp of last sync
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets linked_display_name_html
     *
     * @return string
     */
    public function getLinkedDisplayNameHtml()
    {
        return $this->container['linked_display_name_html'];
    }

    /**
     * Sets linked_display_name_html
     *
     * @param string $linked_display_name_html Ex: <a href=\"https://quantimo.do\">CureDAO</a>
     *
     * @return $this
     */
    public function setLinkedDisplayNameHtml($linked_display_name_html)
    {
        $this->container['linked_display_name_html'] = $linked_display_name_html;

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
     * @param string $long_description Ex: CureDAO is a Chrome extension, Android app, iOS app, and web app that allows you to easily track mood, symptoms, or any outcome you want to optimize in a fraction of a second.  You can also import your data from over 30 other apps and devices like Fitbit, Rescuetime, Jawbone Up, Withings, Facebook, Github, Google Calendar, Runkeeper, MoodPanda, Slice, Google Fit, and more.  CureDAO then analyzes your data to identify which hidden factors are most likely to be influencing your mood or symptoms and their optimal daily values.
     *
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Ex: Got 412 new measurements on 2017-07-31 10:10:34
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets mobile_connect_method
     *
     * @return string
     */
    public function getMobileConnectMethod()
    {
        return $this->container['mobile_connect_method'];
    }

    /**
     * Sets mobile_connect_method
     *
     * @param string $mobile_connect_method Mobile connect method: webview, cordova, google, spreadsheet, or ip
     *
     * @return $this
     */
    public function setMobileConnectMethod($mobile_connect_method)
    {
        $this->container['mobile_connect_method'] = $mobile_connect_method;

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
     * @param string $name Ex: curedao
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets platforms
     *
     * @return string[]
     */
    public function getPlatforms()
    {
        return $this->container['platforms'];
    }

    /**
     * Sets platforms
     *
     * @param string[] $platforms Platforms (chrome, android, ios, web) that you can connect on.
     *
     * @return $this
     */
    public function setPlatforms($platforms)
    {
        $this->container['platforms'] = $platforms;

        return $this;
    }

    /**
     * Gets premium
     *
     * @return bool
     */
    public function getPremium()
    {
        return $this->container['premium'];
    }

    /**
     * Sets premium
     *
     * @param bool $premium True if connection requires upgrade
     *
     * @return $this
     */
    public function setPremium($premium)
    {
        $this->container['premium'] = $premium;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes Required connector scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description Ex: Tracks anything
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets spreadsheet_upload_link
     *
     * @return string
     */
    public function getSpreadsheetUploadLink()
    {
        return $this->container['spreadsheet_upload_link'];
    }

    /**
     * Sets spreadsheet_upload_link
     *
     * @param string $spreadsheet_upload_link URL to POST a spreadsheet to (if available for this data source)
     *
     * @return $this
     */
    public function setSpreadsheetUploadLink($spreadsheet_upload_link)
    {
        $this->container['spreadsheet_upload_link'] = $spreadsheet_upload_link;

        return $this;
    }

    /**
     * Gets total_measurements_in_last_update
     *
     * @return int
     */
    public function getTotalMeasurementsInLastUpdate()
    {
        return $this->container['total_measurements_in_last_update'];
    }

    /**
     * Sets total_measurements_in_last_update
     *
     * @param int $total_measurements_in_last_update Number of measurements obtained during latest update
     *
     * @return $this
     */
    public function setTotalMeasurementsInLastUpdate($total_measurements_in_last_update)
    {
        $this->container['total_measurements_in_last_update'] = $total_measurements_in_last_update;

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
     * @param string $updated_at Ex: 2017-07-31 10:10:34 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets update_requested_at
     *
     * @return string
     */
    public function getUpdateRequestedAt()
    {
        return $this->container['update_requested_at'];
    }

    /**
     * Sets update_requested_at
     *
     * @param string $update_requested_at Ex: 2017-07-18 05:16:31 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUpdateRequestedAt($update_requested_at)
    {
        $this->container['update_requested_at'] = $update_requested_at;

        return $this;
    }

    /**
     * Gets update_status
     *
     * @return string
     */
    public function getUpdateStatus()
    {
        return $this->container['update_status'];
    }

    /**
     * Sets update_status
     *
     * @param string $update_status Ex: UPDATED
     *
     * @return $this
     */
    public function setUpdateStatus($update_status)
    {
        $this->container['update_status'] = $update_status;

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
     * @param int $user_id Ex: 230
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
