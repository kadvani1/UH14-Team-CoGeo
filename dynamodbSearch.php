<?php
/**
 * Created by PhpStorm.
 * User: Tidus
 * Date: 14-8-8
 * Time: 下午5:27
 */

require "vendor/autoload.php";

use Aws\DynamoDb\DynamoDbClient;
use Aws\Common\Enum\Region;
use Aws\DynamoDb\Enum\Type;
use Aws\DynamoDb\Enum\AttributeAction;
use Aws\DynamoDb\Enum\ReturnValue;

$client = DynamoDbClient::factory(array(
    'key' => 'AKIAJ2TIE2BO4YR7ROVQ',
    'secret' => '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',
    'region' => Region::AP_SOUTHEAST_2
));

$feeling1 = $_POST["feeling1"]; //Chatty
$feeling2 = $_POST["feeling2"]; //Buzz
$feeling3 = $_POST["feeling3"]; //Pump
$feeling4 = $_POST["feeling4"]; //Adventure
$feeling5 = $_POST["feeling5"]; //Bustle
$feeling6 = $_POST["feeling6"]; //LoveyDovey
$feeling7 = $_POST["feeling7"]; //Trackies

$tableName = "CoGeo_Place_Database";

$params = array(
    "TableName" => $tableName,
    "AttributesToGet" => array("PlaceReference"),
    "ScanFilter" => array(
        "Chatty" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling1)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "Buzz" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling2)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "Pump" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling3)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "Adventure" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling4)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "Bustle" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling5)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "LoveyDovey" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling6)
            ),
            "ComparisonOperator" => "EQ"
        ),
        "Trackies" => array(
            "AttributeValueList" => array(
                array(TYPE::STRING => $feeling7)
            ),
            "ComparisonOperator" => "EQ"
        ),
    )
);

$response = $client->scan($params);
$items = $response->get("Items");

echo $feeling1 . $feeling2 . $feeling3 . $feeling4 . $feeling5 . $feeling6 . $feeling7;

foreach ($items as $item) {
    echo "Item scanned is \"{$item['PlaceReference']['S']}\".\n";
}

echo "Successfully scanned!";
