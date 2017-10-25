<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use SprykerEco\Client\FactFinderSdk\Business\Api\Converter\BaseConverter;

abstract class BaseDataConverter extends BaseConverter
{
    /**
     * @var \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\ItemConverterInterface
     */
    protected $dataConverter;

    /**
     * @param \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\ItemConverterInterface $dataConverter
     */
    public function __construct(
        ItemConverterInterface $dataConverter
    ) {
        $this->dataConverter = $dataConverter;
    }
}
