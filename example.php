<?php
/**
 * Project utils-gold-price.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 03:31
 */
require_once __DIR__ . '/vendor/autoload.php';

$price = new \nguyenanhung\Utils\GoldPrice\GoldPriceSJC();

// Parse dữ liệu từ API ngân hàng
$parse = $price->parseDataGoldPrice();
// Hiển thị dữ liệu dạng JSON
echo $price->toJson();

// Hiển thị dữ liệu thô

echo "<pre>";
print_r($price->getResponse());
echo "</pre>";

