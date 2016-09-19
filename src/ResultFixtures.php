<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\DataFixtures;

use Xabbuh\XApi\Model\Result;

/**
 * xAPI result fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ResultFixtures
{
    public static function getTypicalResult()
    {
        return new Result();
    }

    public static function getScoreResult()
    {
        return new Result(ScoreFixtures::getTypicalScore());
    }

    public static function getEmptyScoreResult()
    {
        return new Result(ScoreFixtures::getEmptyScore());
    }

    public static function getSuccessResult()
    {
        return new Result(null, true);
    }

    public static function getCompletionResult()
    {
        return new Result(null, null, true);
    }

    public static function getResponseResult()
    {
        return new Result(null, null, null, 'test');
    }

    public static function getDurationResult()
    {
        return new Result(null, null, null, null, 'PT2H');
    }

    public static function getExtensionsResult()
    {
        return new Result(null, null, null, null, null, ExtensionsFixtures::getMultiplePairsExtensions());
    }

    public static function getEmptyExtensionsResult()
    {
        return new Result(null, null, null, null, null, ExtensionsFixtures::getEmptyExtensions());
    }

    public static function getScoreAndSuccessResult()
    {
        return new Result(ScoreFixtures::getTypicalScore(), true);
    }

    public static function getScoreAndCompletionResult()
    {
        return new Result(ScoreFixtures::getTypicalScore(), null, true);
    }

    public static function getScoreAndResponseResult()
    {
        return new Result(ScoreFixtures::getTypicalScore(), null, null, 'test');
    }

    public static function getScoreAndDurationResult()
    {
        return new Result(ScoreFixtures::getTypicalScore(), null, null, null, 'PT2H');
    }

    public static function getAllPropertiesResult()
    {
        return new Result(ScoreFixtures::getTypicalScore(), true, true, 'test', 'PT2H', ExtensionsFixtures::getTypicalExtensions());
    }
}
