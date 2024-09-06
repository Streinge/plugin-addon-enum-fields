<?php
/**
 * Created for plugin-addon-enum-fields
 * Date: 29.12.2020
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace SalesRender\Plugin\Addon\EnumFields;


use SalesRender\Plugin\Components\Access\Token\GraphqlInputToken;
use SalesRender\Plugin\Components\ApiClient\ApiClient;

class OrderFieldsFetcherHelper extends FieldsFetcherHelper
{

    protected static ?array $data;

    protected static function fetch(): array
    {
        if (!isset(self::$data)) {

            $token = GraphqlInputToken::getInstance();
            $client = new ApiClient(
                "{$token->getBackendUri()}companies/{$token->getPluginReference()->getCompanyId()}/CRM",
                (string)$token->getOutputToken()
            );

            $response = $client->query("
                query {
                    fields {
                        orderFieldsFetcher(filters: {include: { archived: false }}) {
                            fields {
                                name
                                label
                                __typename
                            }
                        }
                    }
                }
            ", []);

            self::$data = $response->getData()['fields']['orderFieldsFetcher']['fields'];
        }

        return self::$data;
    }

}