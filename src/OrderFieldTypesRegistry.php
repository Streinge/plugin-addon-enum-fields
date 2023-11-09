<?php
/**
 * Created for plugin-addon-enum-fields
 * Date: 28.12.2020
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace SalesRender\Plugin\Addon\EnumFields;


use XAKEPEHOK\EnumHelper\EnumHelper;

class OrderFieldTypesRegistry extends EnumHelper
{
    const ADDRESS = 'AddressOrderField';
    const BOOLEAN = 'BooleanOrderField';
    const DATETIME = 'DateTimeOrderField';
    const EMAIL = 'EmailOrderField';
    const ENUM = 'EnumOrderField';
    const FILE = 'FileOrderField';
    const FLOAT = 'FloatOrderField';
    const HUMAN_NAME = 'HumanNameOrderField';
    const IMAGE = 'ImageOrderField';
    const INTEGER = 'IntegerOrderField';
    const PHONE = 'PhoneOrderField';
    const STRING = 'StringOrderField';
    const URI = 'UriOrderField';
    const USER = 'UserOrderField';

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