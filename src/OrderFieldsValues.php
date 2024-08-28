<?php
/**
 * Created for plugin-addon-enum-fields
 * Date: 28.12.2020
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace SalesRender\Plugin\Addon\EnumFields;


use SalesRender\Plugin\Components\Form\FieldDefinitions\ListOfEnum\Values\StaticValues;
use SalesRender\Plugin\Components\Translations\Translator;

class OrderFieldsValues extends StaticValues
{

    public function __construct(array $types, array $extraValues = [])
    {
        $values = $extraValues;
        foreach (OrderFieldsFetcherHelper::getTypes($types) as $type => $fields) {

            $group = OrderFieldTypesRegistry::switchCase($type, [
                OrderFieldTypesRegistry::ADDRESS    => Translator::get('plugin-addon-enum-fields', 'Address fields'),
                OrderFieldTypesRegistry::BOOLEAN    => Translator::get('plugin-addon-enum-fields', 'Boolean fields'),
                OrderFieldTypesRegistry::DATETIME   => Translator::get('plugin-addon-enum-fields', 'Datetime fields'),
                OrderFieldTypesRegistry::EMAIL      => Translator::get('plugin-addon-enum-fields', 'Email fields'),
                OrderFieldTypesRegistry::ENUM       => Translator::get('plugin-addon-enum-fields', 'Enum fields'),
                OrderFieldTypesRegistry::FILE       => Translator::get('plugin-addon-enum-fields', 'File fields'),
                OrderFieldTypesRegistry::FLOAT      => Translator::get('plugin-addon-enum-fields', 'Float fields'),
                OrderFieldTypesRegistry::HUMAN_NAME => Translator::get('plugin-addon-enum-fields', 'Human name fields'),
                OrderFieldTypesRegistry::IMAGE      => Translator::get('plugin-addon-enum-fields', 'Image fields'),
                OrderFieldTypesRegistry::INTEGER    => Translator::get('plugin-addon-enum-fields', 'Integer fields'),
                OrderFieldTypesRegistry::PHONE      => Translator::get('plugin-addon-enum-fields', 'Phone fields'),
                OrderFieldTypesRegistry::STRING     => Translator::get('plugin-addon-enum-fields', 'String fields'),
                OrderFieldTypesRegistry::URI        => Translator::get('plugin-addon-enum-fields', 'Uri fields'),
                OrderFieldTypesRegistry::USER       => Translator::get('plugin-addon-enum-fields', 'User fields'),
            ]);

            foreach ($fields as $name => $title) {
                $values[$name] = [
                    'title' => $title,
                    'group' => $group,
                ];
            }
        }

        parent::__construct($values);
    }

}