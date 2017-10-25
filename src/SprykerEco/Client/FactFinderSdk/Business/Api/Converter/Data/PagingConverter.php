<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use FACTFinder\Data\Paging;
use Generated\Shared\Transfer\FactFinderSdkDataPageTransfer;
use Generated\Shared\Transfer\FactFinderSdkDataPagingTransfer;

class PagingConverter extends BaseDataConverter implements PagingConverterInterface
{
    /**
     * @var \FACTFinder\Data\Paging
     */
    protected $paging;

    /**
     * @param \FACTFinder\Data\Paging $paging
     *
     * @return void
     */
    public function setPaging(Paging $paging)
    {
        $this->paging = $paging;
    }

    /**
     * @return \Generated\Shared\Transfer\FactFinderSdkDataPagingTransfer
     */
    public function convert()
    {
        $factFinderDataPagingTransfer = new FactFinderSdkDataPagingTransfer();
        $factFinderDataPagingTransfer->setPageCount($this->paging->getPageCount());
        $factFinderDataPagingTransfer->setFirstPage($this->convertPage($this->paging->getFirstPage()));
        $factFinderDataPagingTransfer->setLastPage($this->convertPage($this->paging->getLastPage()));
        $factFinderDataPagingTransfer->setPreviousPage($this->convertPage($this->paging->getPreviousPage()));
        $factFinderDataPagingTransfer->setCurrentPage($this->convertPage($this->paging->getCurrentPage()));
        $factFinderDataPagingTransfer->setNextPage($this->convertPage($this->paging->getNextPage()));

        return $factFinderDataPagingTransfer;
    }

    /**
     * @param \FACTFinder\Data\Page|null $page
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkDataPageTransfer
     */
    protected function convertPage($page)
    {
        $factFinderDataPageTransfer = new FactFinderSdkDataPageTransfer();
        if ($page === null) {
            return $factFinderDataPageTransfer;
        }

        $factFinderDataPageTransfer->setPageNumber($page->getPageNumber());
        $this->dataConverter->setItem($page);
        $factFinderDataPageTransfer->setItem(
            $this->dataConverter->convert()
        );

        return $factFinderDataPageTransfer;
    }
}
