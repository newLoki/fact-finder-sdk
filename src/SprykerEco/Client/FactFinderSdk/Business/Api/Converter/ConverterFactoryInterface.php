<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter;

use FACTFinder\Adapter\ProductCampaign as FactFinderProductCampaignAdapter;
use FACTFinder\Adapter\Recommendation as FactFinderRecommendationAdapter;
use FACTFinder\Adapter\Search as FactFinderSearchAdapter;
use FACTFinder\Adapter\SimilarRecords as FactFinderSimilarRecordsAdapter;
use FACTFinder\Adapter\Suggest as FactFinderSuggestAdapter;
use FACTFinder\Adapter\TagCloud as FactFinderTagCloudAdapter;
use FACTFinder\Adapter\Tracking as FactFinderTrackingAdapter;

interface ConverterFactoryInterface
{
    /**
     * @param \FACTFinder\Adapter\Search $searchAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createSearchResponseConverter(FactFinderSearchAdapter $searchAdapter);

    /**
     * @param \FACTFinder\Adapter\Recommendation $recommendationAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createRecommendationResponseConverter(FactFinderRecommendationAdapter $recommendationAdapter);

    /**
     * @param \FACTFinder\Adapter\Suggest $suggestAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createSuggestResponseConverter(FactFinderSuggestAdapter $suggestAdapter);

    /**
     * @param \FACTFinder\Adapter\TagCloud $tagCloudAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createTagCloudResponseConverter(FactFinderTagCloudAdapter $tagCloudAdapter);

    /**
     * @param \FACTFinder\Adapter\Tracking $trackingAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createTrackingResponseConverter(FactFinderTrackingAdapter $trackingAdapter);

    /**
     * @param \FACTFinder\Adapter\SimilarRecords $similarRecordsAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createSimilarRecordsResponseConverter(FactFinderSimilarRecordsAdapter $similarRecordsAdapter);

    /**
     * @param \FACTFinder\Adapter\ProductCampaign $productCampaignAdapter
     *
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface
     */
    public function createProductCampaignResponseConverter(FactFinderProductCampaignAdapter $productCampaignAdapter);

    /**
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\ItemConverterInterface
     */
    public function createDataItemConverter();

    /**
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\PagingConverterInterface
     */
    public function createDataPagingConverter();

    /**
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\RecordConverterInterface
     */
    public function createDataRecordConverter();

    /**
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\FilterGroupConverterInterface
     */
    public function createDataFilterGroup();

    /**
     * @return \SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data\AdvisorQuestionConverterInterface
     */
    public function createDataAdvisorQuestionConverter();
}
