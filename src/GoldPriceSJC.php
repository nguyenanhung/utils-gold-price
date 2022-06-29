<?php
/**
 * Project utils-gold-price.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 03:26
 */

namespace nguyenanhung\Utils\GoldPrice;

/**
 * Class GoldPriceSJC
 *
 * @package   nguyenanhung\Utils\GoldPrice
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class GoldPriceSJC
{
    use RequestTrait, ResponseTrait;

    /** @var string Endpoint ExchangeRates */
    protected $endpoint = 'https://sjc.com.vn/xml/tygiavang.xml';
    /** @var array|bool Response Data */
    protected $response = null;

    /**
     * Function parseDataGoldPrice
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 29/06/2022 51:47
     */
    public function parseDataGoldPrice()
    {
        $contents = $this->sendRequest($this->endpoint);
        $xmlData  = null;
        $p        = xml_parser_create();
        xml_parse_into_struct($p, $contents, $xmlData);
        xml_parser_free($p);
        $data = array();
        if ($xmlData) {
            $data['status'] = 0;
            foreach ($xmlData as $value) {
                if (isset($value['attributes'])) {
                    $data[] = $value['attributes'];
                }
            }
        }
        $this->response = $data;

        return $this;
    }
}
