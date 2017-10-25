<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\FactFinderSdk\Business;

use Generated\Shared\Transfer\LocaleTransfer;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerEco\Zed\FactFinderSdk\Business\Exporter\FactFinderSdkProductExporter;
use SprykerEco\Zed\FactFinderSdk\Business\Writer\CsvFileWriter;
use SprykerEco\Zed\FactFinderSdk\Business\Writer\FileWriterInterface;
use SprykerEco\Zed\FactFinderSdk\FactFinderSdkDependencyProvider;

/**
 * @method \SprykerEco\Zed\FactFinderSdk\Persistence\FactFinderSdkQueryContainerInterface getQueryContainer()
 * @method \SprykerEco\Zed\FactFinderSdk\FactFinderSdkConfig getConfig()
 */
class FactFinderSdkBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \SprykerEco\Zed\FactFinderSdk\Business\Exporter\FactFinderSdkProductExporterInterface
     */
    public function getCsvFileExporter(LocaleTransfer $localeTransfer)
    {
        return $this->createFactFinderProductExporter($this->createCsvFileWriter(), $localeTransfer);
    }

    /**
     * @return \SprykerEco\Zed\FactFinderSdk\Persistence\FactFinderSdkQueryContainerInterface
     */
    public function getFactFinderQueryContainer()
    {
        return $this->getQueryContainer();
    }

    /**
     * @return \SprykerEco\Zed\FactFinderSdk\Dependency\Facade\FactFinderSdkToLocaleInterface
     */
    public function getLocaleFacade()
    {
        return $this->getProvidedDependency(FactFinderSdkDependencyProvider::LOCALE_FACADE);
    }

    /**
     * @return \SprykerEco\Zed\FactFinderSdk\Business\Writer\FileWriterInterface
     */
    protected function createCsvFileWriter()
    {
        return new CsvFileWriter();
    }

    /**
     * @param \SprykerEco\Zed\FactFinderSdk\Business\Writer\FileWriterInterface $fileWriter
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \SprykerEco\Zed\FactFinderSdk\Business\Exporter\FactFinderSdkProductExporterInterface
     */
    protected function createFactFinderProductExporter(FileWriterInterface $fileWriter, LocaleTransfer $localeTransfer)
    {
        return new FactFinderSdkProductExporter(
            $fileWriter,
            $localeTransfer,
            $this->getConfig(),
            $this->getQueryContainer()
        );
    }
}
