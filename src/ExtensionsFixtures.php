<?php

namespace Xabbuh\XApi\DataFixtures;

use Xabbuh\XApi\Model\Extensions;

/**
 * xAPI statement extensions fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ExtensionsFixtures
{
    public static function getEmptyExtensions()
    {
        return new Extensions(array());
    }

    public static function getTypicalExtensions()
    {
        return new Extensions(array('http://id.tincanapi.com/extension/topic' => 'Conformance Testing'));
    }

    public static function getWithObjectValueExtensions()
    {
        $color = new \stdClass();
        $color->model = 'RGB';
        $color->value = '#FFFFFF';

        return new Extensions(array('http://id.tincanapi.com/extension/color' => $color));
    }

    public static function getWithIntegerValueExtensions()
    {
        return new Extensions(array('http://id.tincanapi.com/extension/starting-position' => 1));
    }

    public static function getMultiplePairsExtensions()
    {
        return new Extensions(array(
            'http://id.tincanapi.com/extension/topic' => 'Conformance Testing',
            'http://id.tincanapi.com/extension/color' => array(
                'model' => 'RGB',
                'value' => '#FFFFFF',
            ),
            'http://id.tincanapi.com/extension/starting-position' => 1,
        ));
    }

    public static function getInvalidNonIriExtensions()
    {
        return new Extensions(array('test' => 'key not an IRI'));
    }
}
