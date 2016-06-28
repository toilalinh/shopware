<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

class Shopware_StoreApi_Models_Order extends Shopware_StoreApi_Models_Model
{
    const CREDITS_NOT_ENOUGH = 'CREDITS_NOT_ENOUGH';
    const BILLING_ADDRESS_INCOMPLETE = 'BILLING_ADDRESS_INCOMPLETE';
    const TRADE_TERMS_NOT_ACCEPTED = 'TRADE_TERMS_NOT_ACCEPTED';
    const PRODUCT_ALREADY_BOUGHT = 'PRODUCT_ALREADY_BOUGHT';

    public function wasSuccessful()
    {
        return !empty($this->rawData['ordernumber']) ? true : false;
    }

    public function getOrdernumber()
    {
        return $this->rawData['ordernumber'];
    }

    public function getErrorType()
    {
        return $this->rawData['error']['type'];
    }

    public function getErrorData()
    {
        return $this->rawData['error'];
    }
}
