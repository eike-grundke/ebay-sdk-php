<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\AccountHistorySelectionCodeType $AccountHistorySelection
 * @property \DateTime $InvoiceDate
 * @property \DateTime $BeginDate
 * @property \DateTime $EndDate
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property boolean $ExcludeBalance
 * @property boolean $ExcludeSummary
 * @property boolean $IncludeConversionRate
 * @property \DTS\eBaySDK\Trading\Enums\AccountEntrySortTypeCodeType $AccountEntrySortType
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $ItemID
 * @property string $OrderID
 */
class GetAccountRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountHistorySelection' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountHistorySelection'
        ],
        'InvoiceDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ],
        'BeginDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BeginDate'
        ],
        'EndDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndDate'
        ],
        'Pagination' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'ExcludeBalance' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExcludeBalance'
        ],
        'ExcludeSummary' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExcludeSummary'
        ],
        'IncludeConversionRate' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeConversionRate'
        ],
        'AccountEntrySortType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountEntrySortType'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetAccountRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
