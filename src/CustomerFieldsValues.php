<?php
/**
 * Created for plugin-addon-enum-fields
 * Date: 28.12.2020
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace SalesRender\Plugin\Addon\EnumFields;


use SalesRender\Plugin\Components\Form\FieldDefinitions\ListOfEnum\Values\StaticValues;
use SalesRender\Plugin\Components\Translations\Translator;

class CustomerFieldsValues extends StaticValues
{

    public function __construct(array $types)
    {
        $values = [];
        foreach (CustomerFieldsFetcherHelper::getTypes($types) as $type => $fields) {

            $group = CustomerFieldTypesRegistry::switchCase($type, [
                CustomerFieldTypesRegistry::ADDRESS    => Translator::get('plugin-addon-enum-fields', 'Address fields'),
                CustomerFieldTypesRegistry::BOOLEAN    => Translator::get('plugin-addon-enum-fields', 'Boolean fields'),
                CustomerFieldTypesRegistry::DATETIME   => Translator::get('plugin-addon-enum-fields', 'Datetime fields'),
                CustomerFieldTypesRegistry::EMAIL      => Translator::get('plugin-addon-enum-fields', 'Email fields'),
                CustomerFieldTypesRegistry::ENUM       => Translator::get('plugin-addon-enum-fields', 'Enum fields'),
                CustomerFieldTypesRegistry::FILE       => Translator::get('plugin-addon-enum-fields', 'File fields'),
                CustomerFieldTypesRegistry::FLOAT      => Translator::get('plugin-addon-enum-fields', 'Float fields'),
                CustomerFieldTypesRegistry::HUMAN_NAME => Translator::get('plugin-addon-enum-fields', 'Human name fields'),
                CustomerFieldTypesRegistry::IMAGE      => Translator::get('plugin-addon-enum-fields', 'Image fields'),
                CustomerFieldTypesRegistry::INTEGER    => Translator::get('plugin-addon-enum-fields', 'Integer fields'),
                CustomerFieldTypesRegistry::PHONE      => Translator::get('plugin-addon-enum-fields', 'Phone fields'),
                CustomerFieldTypesRegistry::STRING     => Translator::get('plugin-addon-enum-fields', 'String fields'),
                CustomerFieldTypesRegistry::URI        => Translator::get('plugin-addon-enum-fields', 'Uri fields'),
                CustomerFieldTypesRegistry::USER       => Translator::get('plugin-addon-enum-fields', 'User fields'),
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