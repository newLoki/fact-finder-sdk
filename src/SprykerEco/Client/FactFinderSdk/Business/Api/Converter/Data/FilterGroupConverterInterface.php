<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use FACTFinder\Data\FilterGroup;
use SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface;

interface FilterGroupConverterInterface extends ConverterInterface
{
    /**
     * @param \FACTFinder\Data\FilterGroup $filterGroup
     *
     * @return void
     */
    public function setFilterGroup(FilterGroup $filterGroup);
}
