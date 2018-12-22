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
class GoldPriceSJC implements GoldPriceInterface
{
    use RequestTrait, ResponseTrait;
    /** @var string Endpoint ExchangeRates */
    private $endpoint = 'http://www.sjc.com.vn/xml/tygiavang.xml';
    /** @var array|bool Response Data */
    private $response = NULL;

    /**
     * Function parseDataGoldPrice
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:30
     *
     * @return $this
     */
    public function parseDataGoldPrice()
    {
        $xmlData = NULL;
        $p       = xml_parser_create();
        xml_parse_into_struct($p, $this->sendRequest($this->endpoint), $xmlData);
        xml_parser_free($p);
        $data = array();
        if ($xmlData) {
            $data['status'] = 0;
            foreach ($xmlData as $value) {
                if (isset($value['attributes'])) {
                    $data[] = $value['attributes'];
                }
            }
            $this->response = $data;
        }
        $this->response = $data;

        return $this;
    }
}

