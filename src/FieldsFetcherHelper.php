<?php

namespace SalesRender\Plugin\Addon\EnumFields;

abstract class FieldsFetcherHelper
{
    abstract protected static function fetch(): array;

    public static function getType(string $type): array
    {
        $data = [];
        $fields = static::fetch();

        foreach ($fields as $field) {
            if ($field['__typename'] === $type) {
                $data[$field['name']] = $field['label'];
            }
        }

        return $data;
    }

    public static function getTypes(array $types): array
    {
        $data = [];
        $fields = static::fetch();

        foreach ($fields as $field) {
            if (in_array($field['__typename'], $types)) {
                $data[$field['__typename']][$field['name']] = $field['label'];
            }
        }

        return $data;
    }
}