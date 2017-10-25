<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use FACTFinder\Data\Item;
use SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface;

interface ItemConverterInterface extends ConverterInterface
{
    /**
     * @param \FACTFinder\Data\Item $item
     *
     * @return void
     */
    public function setItem(Item $item);
}
