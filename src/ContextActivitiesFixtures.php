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

use Xabbuh\XApi\Model\ContextActivities;

/**
 * xAPI context activities fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ContextActivitiesFixtures
{
    public static function getCategoryOnlyContextActivities()
    {
        $contextActivities = new ContextActivities();

        return $contextActivities->withCategory(ActivityFixtures::getTypicalActivity());
    }

    public static function getParentOnlyContextActivities()
    {
        $contextActivities = new ContextActivities();

        return $contextActivities->withParent(ActivityFixtures::getTypicalActivity());
    }

    public static function getGroupingOnlyContextActivities()
    {
        $contextActivities = new ContextActivities();

        return $contextActivities->withGrouping(ActivityFixtures::getTypicalActivity());
    }

    public static function getOtherOnlyContextActivities()
    {
        $contextActivities = new ContextActivities();

        return $contextActivities->withOther(ActivityFixtures::getTypicalActivity());
    }

    public static function getAllPropertiesEmptyActivities()
    {
        return new ContextActivities();
    }

    public static function getAllPropertiesActivities()
    {
        return new ContextActivities(ActivityFixtures::getTypicalActivity(), ActivityFixtures::getTypicalActivity(), ActivityFixtures::getTypicalActivity(), ActivityFixtures::getTypicalActivity());
    }
}
