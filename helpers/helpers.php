<?php
/**
 * Project utils-gold-price
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 29/06/2022
 * Time: 09:53
 */
if (!function_exists('fetchDataGoldPriceSJC')) {
    /**
     * Function fetchDataGoldPriceSJC
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 29/06/2022 54:57
     */
    function fetchDataGoldPriceSJC()
    {
        $price = new nguyenanhung\Utils\GoldPrice\GoldPriceSJC();
        $parse = $price->parseDataGoldPrice();

        return $parse->getResponse();
    }
}
