<?php

/**
 * xAPI statement activity fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */

namespace Xabbuh\XApi\DataFixtures;

use Rhumsaa\Uuid\Uuid;

/**
 * xAPI UUID fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class UuidFixtures
{
    public static function getGoodUuid()
    {
        return '39e24cc4-69af-4b01-a824-1fdc6ea8a3af';
    }

    public static function getBadUuid()
    {
        return 'bad-uuid';
    }

    public static function getUniqueUuid()
    {
        return (string) Uuid::uuid4();
    }
}
