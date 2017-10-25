<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk\Business\Api\Converter\Data;

use FACTFinder\Data\AdvisorAnswer;
use FACTFinder\Data\AdvisorQuestion;
use SprykerEco\Client\FactFinderSdk\Business\Api\Converter\ConverterInterface;

interface AdvisorQuestionConverterInterface extends ConverterInterface
{
    /**
     * @param \FACTFinder\Data\AdvisorQuestion $advisorQuestion
     *
     * @return void
     */
    public function setAdvisorQuestion(AdvisorQuestion $advisorQuestion);

    /**
     * @param \FACTFinder\Data\AdvisorAnswer $advisorAnswer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkDataAdvisorAnswerTransfer
     */
    public function convertAnswer(AdvisorAnswer $advisorAnswer);
}
