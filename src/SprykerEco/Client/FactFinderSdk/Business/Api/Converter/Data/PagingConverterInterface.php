<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use FACTFinder\Data\Paging;
use SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface;

interface PagingConverterInterface extends ConverterInterface
{
    /**
     * @param \FACTFinder\Data\Paging $paging
     *
     * @return void
     */
    public function setPaging(Paging $paging);
}
