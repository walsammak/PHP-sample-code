<?php
require_once '../Paytabs-plugin.php';
$plugin = new Paytabs();

$request_url = 'payment/request';
$data = [
    "tran_type" => "sale",
    "tran_class" => "ecom",
    "cart_id" => "cart_11111",
    "cart_currency" => "EGP",
    "cart_amount" => 1000,
    "cart_description" => "Description of the items/services",
    "paypage_lang" => "en",
    "callback" => "https://webhook.site/ebe60b53-4158-4d82-aa16-231f2823378d",
    "return" => "http://localhost/default/checkresponse.php",
    "customer_details" => [
        "name" => "first last",
        "email" => "email@domain.com",
        "phone" => "0522222222",
        "street1" => "address street",
        "city" => "dubai",
        "state" => "du",
        "country" => "AE",
        "zip" => "12345"
    ],
    "shipping_details" => [
        "name" => "name1 last1",
        "email" => "email1@domain.com",
        "phone" => "971555555555",
        "street1" => "street2",
        "city" => "dubai",
        "state" => "dubai",
        "country" => "AE",
        "zip" => "54321"
    ],
    "framed" => true,
    "hide_shipping" > true
];
$page = $plugin->send_api_request($request_url, $data);

echo "<iframe width='800' height='600' src='" . $page["redirect_url"] . "'></iframe>";
exit();
