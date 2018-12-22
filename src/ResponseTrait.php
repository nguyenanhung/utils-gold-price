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
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:07
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Function toJson
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:07
     *
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->response);
    }
}
