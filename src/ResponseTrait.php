<?php
/**
 * Project utils-gold-price.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 02:55
 */

namespace nguyenanhung\Utils\GoldPrice;

/**
 * Trait ResponseTrait
 *
 * @package   nguyenanhung\Utils\GoldPrice
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait ResponseTrait
{
    /**
     * Function getResponse
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 29/06/2022 51:12
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Function toJson
     *
     * @return false|string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 29/06/2022 51:15
     */
    public function toJson()
    {
        return json_encode($this->response);
    }
}
