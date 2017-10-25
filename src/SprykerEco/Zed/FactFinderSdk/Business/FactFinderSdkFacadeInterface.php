<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\FactFinderSdk\Business;

use Generated\Shared\Transfer\LocaleTransfer;

interface FactFinderSdkFacadeInterface
{
    /**
     * Specification:
     * - Creates a csv file
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransferTransfer
     *
     * @return void
     */
    public function createFactFinderSdkCsv(LocaleTransfer $localeTransferTransfer);
}
