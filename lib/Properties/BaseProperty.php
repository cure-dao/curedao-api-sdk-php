<?php
namespace CureDAO\Client\Properties;
use OpenApi\Annotations\ExternalDocumentation;
use OpenApi\Annotations\Items;
use OpenApi\Annotations\Property;
use OpenApi\Annotations\Schema;
use OpenApi\Annotations\Xml;
abstract class BaseProperty
{
    public const FORMAT_DOUBLE = 'double';
    public const TYPE_BOOLEAN = 'boolean';
    public const TYPE_INTEGER = 'integer';
    public const TYPE_NUMBER = 'number';
    public const TYPE_ENUM = 'enum';
    public const TYPE_DATETIME = 'datetime';
    public const SYNONYMS = [];
    public const NAME_SYNONYMS = [];
    public const NAME = null;
    protected $isPublic = false;
    protected $isUrl = false;
    protected $isUnixTime = false;
    public $showOnCreating = false;
    public $showOnDetail = true;
    public $showOnIndex = false;
    public $showOnUpdating = false;
    public $creationRules = "";
    public $updateRules = "";
    protected $isImageUrl = false;
    protected $isHtml = false;
    /**
     * @var int
     * The smaller the number, the higher the placement in a form
     * Make sure it's 2 digits i.e. "01" as opposed to "1"
     */
    public $order = "99";
    protected $shouldNotContain = []; // Add to model as ['field_to_check' => ['string to exclude']; See \CureDAO\Client\Models\WpPost for example
    protected $requiredStrings = [];  // Add to model as ['field_to_check' => ['string to exclude']; See \CureDAO\Client\Models\WpPost for example
    public $parentClass;
    protected static $validationDisabledFor = [];
    /**
     * $ref See http://json-schema.org/latest/json-schema-core.html#rfc.section.7
     * @var string
     */
    public $ref;
    /**
     * Can be used to decorate a user interface with information about the data produced by this user interface. preferably be short.
     * @var string
     */
    public $title;
    /**
     * A description will provide explanation about the purpose of the instance described by this schema.
     * @var string
     */
    public $description;
    /**
     * An object instance is valid against "maxProperties" if its number of properties is less than, or equal to, the value of this property.
     * @var integer
     */
    public $maxProperties;
    /**
     * An object instance is valid against "minProperties" if its number of properties is greater than, or equal to, the value of this property.
     * @var integer
     */
    public $minProperties;
    /**
     * If required is true, a DB record cannot be created unless this value is not null
     * @var bool
     */
    public $required;
    /**
     * If nullable is false, it's DB value cannot be changed to null
     * @var bool
     */
    public $canBeChangedToNull = false;
    /**
     * @var Property[]
     */
    public $properties;
    /**
     * The type of the schema/property. The value MUST be one of "string", "number", "integer", "boolean", "array" or "object".
     * @var string
     */
    public $type;
    /**
     * The extending format for the previously mentioned type. See Data Type Formats for further details.
     * @var string
     */
    public $format;
    /**
     * Required if type is "array". Describes the type of items in the array.
     * @var Items
     */
    public $items;
    /**
     * @var string Determines the format of the array if type array is used. Possible values are: csv - comma separated values foo,bar. ssv - space separated values foo bar. tsv - tab separated values foo\tbar. pipes - pipe separated values foo|bar. multi - corresponds to multiple parameter instances instead of multiple values for a single instance foo=bar&foo=baz. This is valid only for parameters in "query" or "formData". Default value is csv.
     * @noinspection SpellCheckingInspection
     */
    public $collectionFormat;
    /**
     * Sets a default value to the parameter. The type of the value depends on the defined type. See http://json-schema.org/latest/json-schema-validation.html#anchor101.
     * @var mixed
     */
    public $default = \OpenApi\Generator::UNDEFINED;
    /**
     * this keyword validates only if the instance is less than or exactly equal to "maximum".
     * See http://json-schema.org/latest/json-schema-validation.html#anchor17.
     * @var float
     */
    public $maximum;
    /**
     * If the instance is a number, then the instance is valid only if it has a value strictly less than (not equal to) "exclusiveMaximum".
     * See http://json-schema.org/latest/json-schema-validation.html#anchor17.
     * @var boolean
     */
    public $exclusiveMaximum;
    /**
     * If the instance is a number, then this keyword validates only if the instance is greater than or exactly equal to "minimum".
     * See http://json-schema.org/latest/json-schema-validation.html#anchor21.
     * @var float
     */
    public $minimum;
    /**
     * If the instance is a number, then the instance is valid only if it has a value strictly greater than (not equal to) "exclusiveMinimum".
     * See http://json-schema.org/latest/json-schema-validation.html#anchor21.
     * @var boolean
     */
    public $exclusiveMinimum;
    /**
     * A string instance is valid against this keyword if its length is less than, or equal to, the value of this keyword.
     * @var integer
     */
    public $maxLength;
    /**
     * A string instance is valid against this keyword if its length is greater than, or equal to, the value of this keyword.
     * @var integer
     */
    public $minLength;
    /**
     * A string instance is considered valid if the regular expression matches the instance successfully.
     * @var string
     */
    public $pattern;
    /**
     * An array instance is valid against "maxItems" if its size is less than, or equal to, the value of this keyword.
     * @var integer
     */
    public $maxItems;
    /**
     * An array instance is valid against "minItems" if its size is greater than, or equal to, the value of this keyword.
     * @var integer
     */
    public $minItems;
    /**
     * If it has boolean value true, the instance validates successfully if all of its elements are unique.
     * @var boolean
     */
    public $uniqueItems;
    /**
     * An instance validates successfully if its value is equal to one of the elements in this keyword's array value.
            Elements in the array might be of any type, including null.
     * @var array
     */
    public $enum;
    /**
     * A numeric instance is valid against "multipleOf" if the result of the division of the instance by this property's value is an integer.
     * @var number
     */
    public $multipleOf;
    /**
     * Adds support for polymorphism. The discriminator is the schema property name that is used to differentiate between other schemas that inherit this schema. The property name used MUST be defined at this schema and it MUST be in the required property list. When used, the value MUST be the name of this schema or any schema that inherits it.
     * @var string
     */
    public $discriminator;
    /**
     * Relevant only for Schema "properties" definitions. Declares the property as "read only". This means that it MAY be sent as part of a response but MUST NOT be sent as part of the request. Properties marked as readOnly being true SHOULD NOT be in the required list of the defined schema. Default value is false.
     * @var boolean
     */
    public $readOnly;
    /**
     * This MAY be used only on properties schemas. It has no effect on root schemas. Adds Additional metadata to describe the XML representation format of this property.
     * @var Xml
     */
    public $xml;
    /**
     * Additional external documentation for this schema.
     * @var ExternalDocumentation
     */
    public $externalDocs;
    /**
     * A free-form property to include a an example of an instance for this schema.
     * @var mixed
     */
    public $example;
    /**
     * An instance validates successfully against this property if it validates successfully against all schemas defined by this property's value.
     * @var Schema[]
     */
    public $allOf;
    /**
     * http://json-schema.org/latest/json-schema-validation.html#anchor64
     * @var bool|object
     */
    public $additionalProperties;
    /** @var string */
    protected $parentModel;
    public $dbInput;
    public $dbType;
    public $fieldType;
    public $fontAwesome;
    public $foreignKeyText;
    public $htmlInput;
    public $htmlType;
    public $htmlValues;
    public $image;
    public $inForm;
    public $inIndex;
    public $inView;
    public $isFillable;
    public $isOrderable;
    public $isPrimary;
    public $isSearchable;
    protected $migrationText;
    public $name;
    public $rules;
    public $table;
    public $validations;
    public $phpType;
    public $deprecated = false;
    public $autoIncrement = false;
    public $importance = 0;
    protected $originalValue;
	protected $unsigned;
	protected $blackListedValues = ["null"];
	private $shouldNotEqual = [];
    public function __construct($parentModel = null){
        if($parentModel){$this->parentModel = $parentModel;}
    }
    public static $_types = [
        'description' => 'string',
        'required' => '[string]',
        'format' => 'string',
        'collectionFormat' => ['csv', 'ssv', 'tsv', 'pipes', 'multi'],
        'maximum' => 'number',
        'exclusiveMaximum' => 'boolean',
        'minimum' => 'number',
        'exclusiveMinimum' => 'boolean',
        'maxLength' => 'integer',
        'minLength' => 'integer',
        'pattern' => 'string',
        'maxItems' => 'integer',
        'minItems' => 'integer',
        'uniqueItems' => 'boolean',
        'multipleOf' => 'integer',
    ];
    public static $_nested = [
        'OpenApi\Annotations\Items' => 'items',
        'OpenApi\Annotations\Property' => ['properties', 'property'],
        'OpenApi\Annotations\ExternalDocumentation' => 'externalDocs',
        'OpenApi\Annotations\Xml' => 'xml'
    ];
}
