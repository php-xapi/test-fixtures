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

use Xabbuh\XApi\Model\Verb;

/**
 * xAPI verb fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class VerbFixtures
{
    public static function getTypicalVerb()
    {
        return new Verb('http://tincanapi.com/conformancetest/verbid', array('en-US' => 'test'));
    }

    public static function getVoidingVerb()
    {
        return new Verb('http://adlnet.gov/expapi/verbs/voided', array('en-US' => 'voided'));
    }

    public static function getIdVerb()
    {
        return new Verb('http://tincanapi.com/conformancetest/verbid');
    }

    public static function getIdAndDisplayVerb()
    {
        return new Verb('http://tincanapi.com/conformancetest/verbid', array('en-US' => 'test'));
    }
}
