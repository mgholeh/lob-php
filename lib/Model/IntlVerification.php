<?php
/**
 * IntlVerification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IntlVerification Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IntlVerification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'intl_verification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'recipient' => 'string',
        'primary_line' => 'string',
        'secondary_line' => 'string',
        'last_line' => 'string',
        'country' => 'string',
        'coverage' => 'string',
        'deliverability' => 'string',
        'status' => 'string',
        'components' => '\OpenAPI\Client\Model\IntlComponents',
        'object' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'recipient' => null,
        'primary_line' => null,
        'secondary_line' => null,
        'last_line' => null,
        'country' => null,
        'coverage' => null,
        'deliverability' => null,
        'status' => null,
        'components' => null,
        'object' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'recipient' => 'recipient',
        'primary_line' => 'primary_line',
        'secondary_line' => 'secondary_line',
        'last_line' => 'last_line',
        'country' => 'country',
        'coverage' => 'coverage',
        'deliverability' => 'deliverability',
        'status' => 'status',
        'components' => 'components',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'recipient' => 'setRecipient',
        'primary_line' => 'setPrimaryLine',
        'secondary_line' => 'setSecondaryLine',
        'last_line' => 'setLastLine',
        'country' => 'setCountry',
        'coverage' => 'setCoverage',
        'deliverability' => 'setDeliverability',
        'status' => 'setStatus',
        'components' => 'setComponents',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'recipient' => 'getRecipient',
        'primary_line' => 'getPrimaryLine',
        'secondary_line' => 'getSecondaryLine',
        'last_line' => 'getLastLine',
        'country' => 'getCountry',
        'coverage' => 'getCoverage',
        'deliverability' => 'getDeliverability',
        'status' => 'getStatus',
        'components' => 'getComponents',
        'object' => 'getObject'
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
        return self::$openAPIModelName;
    }

    const COVERAGE_SUBBUILDING = 'SUBBUILDING';
    const COVERAGE_HOUSENUMBER_BUILDING = 'HOUSENUMBER/BUILDING';
    const COVERAGE_STREET = 'STREET';
    const COVERAGE_LOCALITY = 'LOCALITY';
    const COVERAGE_SPARSE = 'SPARSE';
    const DELIVERABILITY_DELIVERABLE = 'deliverable';
    const DELIVERABILITY_DELIVERABLE_MISSING_INFO = 'deliverable_missing_info';
    const DELIVERABILITY_UNDELIVERABLE = 'undeliverable';
    const DELIVERABILITY_NO_MATCH = 'no_match';
    const STATUS_LV4 = 'LV4';
    const STATUS_LV3 = 'LV3';
    const STATUS_LV2 = 'LV2';
    const STATUS_LV1 = 'LV1';
    const STATUS_LF4 = 'LF4';
    const STATUS_LF3 = 'LF3';
    const STATUS_LF2 = 'LF2';
    const STATUS_LF1 = 'LF1';
    const STATUS_LM4 = 'LM4';
    const STATUS_LM3 = 'LM3';
    const STATUS_LM2 = 'LM2';
    const STATUS_LU1 = 'LU1';
    const OBJECT_INTL_VERIFICATION = 'intl_verification';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoverageAllowableValues()
    {
        return [
            self::COVERAGE_SUBBUILDING,
            self::COVERAGE_HOUSENUMBER_BUILDING,
            self::COVERAGE_STREET,
            self::COVERAGE_LOCALITY,
            self::COVERAGE_SPARSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliverabilityAllowableValues()
    {
        return [
            self::DELIVERABILITY_DELIVERABLE,
            self::DELIVERABILITY_DELIVERABLE_MISSING_INFO,
            self::DELIVERABILITY_UNDELIVERABLE,
            self::DELIVERABILITY_NO_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LV4,
            self::STATUS_LV3,
            self::STATUS_LV2,
            self::STATUS_LV1,
            self::STATUS_LF4,
            self::STATUS_LF3,
            self::STATUS_LF2,
            self::STATUS_LF1,
            self::STATUS_LM4,
            self::STATUS_LM3,
            self::STATUS_LM2,
            self::STATUS_LU1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_INTL_VERIFICATION,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['primary_line'] = $data['primary_line'] ?? null;
        $this->container['secondary_line'] = $data['secondary_line'] ?? null;
        $this->container['last_line'] = $data['last_line'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['coverage'] = $data['coverage'] ?? null;
        $this->container['deliverability'] = $data['deliverability'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^intl_ver_[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^intl_ver_[a-zA-Z0-9]+$/.";
        }

        if (!is_null($this->container['recipient']) && (mb_strlen($this->container['recipient']) > 500)) {
            $invalidProperties[] = "invalid value for 'recipient', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['primary_line']) && (mb_strlen($this->container['primary_line']) > 200)) {
            $invalidProperties[] = "invalid value for 'primary_line', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['secondary_line']) && (mb_strlen($this->container['secondary_line']) > 500)) {
            $invalidProperties[] = "invalid value for 'secondary_line', the character length must be smaller than or equal to 500.";
        }

        $allowedValues = $this->getCoverageAllowableValues();
        if (!is_null($this->container['coverage']) && !in_array($this->container['coverage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coverage', must be one of '%s'",
                $this->container['coverage'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliverabilityAllowableValues();
        if (!is_null($this->container['deliverability']) && !in_array($this->container['deliverability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deliverability', must be one of '%s'",
                $this->container['deliverability'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier prefixed with `intl_ver_`.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^intl_ver_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling IntlVerification., must conform to the pattern /^intl_ver_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets recipient
     *
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string|null $recipient The intended recipient, typically a person's or firm's name.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (!is_null($recipient) && (mb_strlen($recipient) > 500)) {
            throw new \InvalidArgumentException('invalid length for $recipient when calling IntlVerification., must be smaller than or equal to 500.');
        }

        $this->container['recipient'] = $recipient;

        return $this;
    }


    /**
     * Gets primary_line
     *
     * @return string|null
     */
    public function getPrimaryLine()
    {
        return $this->container['primary_line'];
    }

    /**
     * Sets primary_line
     *
     * @param string|null $primary_line The primary delivery line (usually the street address) of the address.
     *
     * @return self
     */
    public function setPrimaryLine($primary_line)
    {
        if (!is_null($primary_line) && (mb_strlen($primary_line) > 200)) {
            throw new \InvalidArgumentException('invalid length for $primary_line when calling IntlVerification., must be smaller than or equal to 200.');
        }

        $this->container['primary_line'] = $primary_line;

        return $this;
    }


    /**
     * Gets secondary_line
     *
     * @return string|null
     */
    public function getSecondaryLine()
    {
        return $this->container['secondary_line'];
    }

    /**
     * Sets secondary_line
     *
     * @param string|null $secondary_line The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.
     *
     * @return self
     */
    public function setSecondaryLine($secondary_line)
    {
        if (!is_null($secondary_line) && (mb_strlen($secondary_line) > 500)) {
            throw new \InvalidArgumentException('invalid length for $secondary_line when calling IntlVerification., must be smaller than or equal to 500.');
        }

        $this->container['secondary_line'] = $secondary_line;

        return $this;
    }


    /**
     * Gets last_line
     *
     * @return string|null
     */
    public function getLastLine()
    {
        return $this->container['last_line'];
    }

    /**
     * Sets last_line
     *
     * @param string|null $last_line Combination of the following applicable `components`: * `city` * `state` * `zip_code` * `zip_code_plus_4`
     *
     * @return self
     */
    public function setLastLine($last_line)
    {
        $this->container['last_line'] = $last_line;

        return $this;
    }


    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The country of the address. Will be returned as a 2 letter country short-name code (ISO 3166).
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }


    /**
     * Gets coverage
     *
     * @return string|null
     */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
     * Sets coverage
     *
     * @param string|null $coverage The coverage level for the country. This represents the maximum level of accuracy an input address can be verified to.  * `SUBBUILDING` - Coverage down to unit numbers. For example, in an apartment or a large building * `HOUSENUMBER/BUILDING` - Coverage down to house number. For example, the address where a house or building may be located * `STREET` - Coverage down to street. This means that we can verify that an street exists in a city, state, country * `LOCALITY` - Coverage down to city, state, or village or province. This means that we can verify that a city, village, province, or state exists in a country. Countries differ in how they define what is a province, state, city, village, etc. This attempts to group eveyrthing together. * `SPARSE` - Some addresses for this country exist in our databases
     *
     * @return self
     */
    public function setCoverage($coverage)
    {
        $allowedValues = $this->getCoverageAllowableValues();
        if (!is_null($coverage) && !in_array($coverage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coverage', must be one of '%s'",
                    $coverage,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['coverage'] = $coverage;

        return $this;
    }


    /**
     * Gets deliverability
     *
     * @return string|null
     */
    public function getDeliverability()
    {
        return $this->container['deliverability'];
    }

    /**
     * Sets deliverability
     *
     * @param string|null $deliverability Summarizes the deliverability of the `intl_verification` object. Possible values are: * `deliverable` — The address is deliverable. * `deliverable_missing_info` — The address is missing some information, but is most likely deliverable. * `undeliverable` — The address is most likely not deliverable. Some components of the address (such as city or postal code) may have been found. * `no_match` — This address is not deliverable. No matching street could be found within the city or postal code.
     *
     * @return self
     */
    public function setDeliverability($deliverability)
    {
        $allowedValues = $this->getDeliverabilityAllowableValues();
        if (!is_null($deliverability) && !in_array($deliverability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deliverability', must be one of '%s'",
                    $deliverability,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['deliverability'] = $deliverability;

        return $this;
    }


    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status level for the country. This represents the maximum level of accuracy an input address can be verified to.  * `LV4` - Verified. The input data is correct. All input data was able to match in databases. * `LV3` - Verified. The input data is correct. All input data was able to match in databases <em>after</em> some or all elements were standarized. The input data may also be using outdated city, state, or country names. * `LV2` - Verified. The input data is correct although some input data is unverifiable due to incomplete data. * `LV1` - Verified. The input data is acceptable but in an attempt to standarize user input, errors were introduced. * `LF4` - Fixed. The input data is matched and fixed. (Example: Brighon, UK -> Brighton, UK) * `LF3` - Fixed. The input data is matched and fixed but some elements such as Subbuilding number and house number cannot be checked. * `LF2` - Fixed. The input data is matched but some elements such as Street cannot be checked. * `LF1` - Fixed. The input data is acceptable but in an attempt to standarize user input, errors were introduced. * `LM4` - Missing Info. The input data cannot be corrected completely. * `LM3` - Missing Info. The input data cannot be corrected completely and there were multiple matches found in databases. * `LM2` - Missing Info. The input data cannot be corrected completely and only some elements were found. * `LU1` - Unverified. The input data cannot be corrected or matched.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets components
     *
     * @return \OpenAPI\Client\Model\IntlComponents|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \OpenAPI\Client\Model\IntlComponents|null $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }


    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object Value is resource type.
     *
     * @return self
     */
    public function setObject($object)
    {
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($object) && !in_array($object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['object'] = $object;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

