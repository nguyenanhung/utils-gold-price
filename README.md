[![Latest Stable Version](https://poser.pugx.org/nguyenanhung/utils-gold-price/v/stable)](https://packagist.org/packages/nguyenanhung/utils-gold-price)
[![Total Downloads](https://poser.pugx.org/nguyenanhung/utils-gold-price/downloads)](https://packagist.org/packages/nguyenanhung/utils-gold-price)
[![Latest Unstable Version](https://poser.pugx.org/nguyenanhung/utils-gold-price/v/unstable)](https://packagist.org/packages/nguyenanhung/utils-gold-price)
[![composer.lock](https://poser.pugx.org/nguyenanhung/utils-gold-price/composerlock)](https://packagist.org/packages/nguyenanhung/utils-gold-price)
[![License](https://poser.pugx.org/nguyenanhung/utils-gold-price/license)](https://packagist.org/packages/nguyenanhung/utils-gold-price)

# Utils: Gold Price

Hàm lấy dữ liệu giá vàng từ 1 số website



#### Giá vàng SJC

Hàm bóc tách dữ liệu từ website SJC: http://sjc.com.vn/price/

```php
<?php
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
```



### Liên hệ

Nếu có bất cứ thông tin nào cần trao đổi và tìm hiểu, vui lòng liên hệ theo thông tin sau

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3
