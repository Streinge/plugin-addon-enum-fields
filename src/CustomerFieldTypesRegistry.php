<?php
/**
 * Created for plugin-addon-enum-fields
 * Date: 28.12.2020
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace SalesRender\Plugin\Addon\EnumFields;


use XAKEPEHOK\EnumHelper\EnumHelper;

class CustomerFieldTypesRegistry extends EnumHelper
{
    const ADDRESS = 'AddressCustomerField';
    const BOOLEAN = 'BooleanCustomerField';
    const DATETIME = 'DateTimeCustomerField';
    const EMAIL = 'EmailCustomerField';
    const ENUM = 'EnumCustomerField';
    const FILE = 'FileCustomerField';
    const FLOAT = 'FloatCustomerField';
    const HUMAN_NAME = 'HumanNameCustomerField';
    const IMAGE = 'ImageCustomerField';
    const INTEGER = 'IntegerCustomerField';
    const PHONE = 'PhoneCustomerField';
    const STRING = 'StringCustomerField';
    const URI = 'UriCustomerField';
    const USER = 'UserCustomerField';

    public static function values(): array
    {
        return [
            self::ADDRESS,
            self::BOOLEAN,
            self::DATETIME,
            self::EMAIL,
            self::ENUM,
            self::FILE,
            self::FLOAT,
            self::HUMAN_NAME,
            self::IMAGE,
            self::INTEGER,
            self::PHONE,
            self::STRING,
            self::URI,
            self::USER,
        ];
    }
}