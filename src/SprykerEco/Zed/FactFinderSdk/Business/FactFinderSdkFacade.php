<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\FactFinderSdk\Business;

use Generated\Shared\Transfer\LocaleTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \SprykerEco\Zed\FactFinderSdk\Business\FactFinderSdkBusinessFactory getFactory()
 */
class FactFinderSdkFacade extends AbstractFacade implements FactFinderSdkFacadeInterface
{
    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return void
     */
    public function createFactFinderSdkCsv(LocaleTransfer $localeTransfer)
    {
        $this->getFactory()
            ->getCsvFileExporter($localeTransfer)
            ->export();
    }
}
