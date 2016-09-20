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

use Xabbuh\XApi\Model\Definition;

/**
 * xAPI activity definition fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class DefinitionFixtures
{
    public static function getEmptyDefinition()
    {
        return new Definition();
    }

    public static function getTypicalDefinition()
    {
        return new Definition();
    }

    public static function getNameDefinition()
    {
        return new Definition(array('en-US' => 'test'));
    }

    public static function getDescriptionDefinition()
    {
        return new Definition(null, array('en-US' => 'test'));
    }

    public static function getTypeDefinition()
    {
        return new Definition(null, null, 'http://id.tincanapi.com/activitytype/unit-test');
    }

    public static function getMoreInfoDefinition()
    {
        return new Definition(null, null, null, 'https://github.com/adlnet/xAPI_LRS_Test');
    }

    public static function getAllPropertiesDefinition()
    {
        return new Definition(
            array('en-US' => 'test'),
            array('en-US' => 'test'),
            'http://id.tincanapi.com/activitytype/unit-test',
            'https://github.com/adlnet/xAPI_LRS_Test'
        );
    }

    public static function getForQueryDefinition()
    {
        return new Definition(array('en-US' => 'for query'));
    }
}
