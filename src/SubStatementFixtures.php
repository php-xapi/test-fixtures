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

use Xabbuh\XApi\Model\SubStatement;

/**
 * xAPI sub statement fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class SubStatementFixtures
{
    public static function getTypicalSubStatement()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithMboxAgent()
    {
        return new SubStatement(null, ActorFixtures::getMboxAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithMboxSha1SumAgent()
    {
        return new SubStatement(null, ActorFixtures::getMboxSha1SumAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithOpenIdAgent()
    {
        return new SubStatement(null, ActorFixtures::getOpenIdAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithAccountAgent()
    {
        return new SubStatement(null, ActorFixtures::getAccountAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithMboxGroup()
    {
        return new SubStatement(null, ActorFixtures::getMboxGroup(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithMboxSha1SumGroup()
    {
        return new SubStatement(null, ActorFixtures::getMboxSha1SumGroup(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithOpenIdGroup()
    {
        return new SubStatement(null, ActorFixtures::getOpenIdGroup(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithAccountGroup()
    {
        return new SubStatement(null, ActorFixtures::getAccountGroup(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithIdOnlyVerb()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getIdVerb(), ActivityFixtures::getTypicalActivity());
    }

    public static function getSubStatementWithMboxAgentObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getMboxAgent());
    }

    public static function getSubStatementWithMboxSha1SumAgentObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getMboxSha1SumAgent());
    }

    public static function getSubStatementWithOpenIdAgentObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getOpenIdAgent());
    }

    public static function getSubStatementWithAccountAgentObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getAccountAgent());
    }

    public static function getSubStatementWithMboxGroupObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getMboxGroup());
    }

    public static function getSubStatementWithMboxSha1SumGroupObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getMboxSha1SumGroup());
    }

    public static function getSubStatementWithOpenIdGroupObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getOpenIdGroup());
    }

    public static function getSubStatementWithAccountGroupObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getAccountGroup());
    }

    public static function getSubStatementWithAllPropertiesAndTypicalAgentMemberGroupObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActorFixtures::getAllPropertiesAndTypicalAgentMemberGroup());
    }

    public static function getSubStatementWithAllPropertiesActivityObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), ActivityFixtures::getAllPropertiesActivity());
    }

    public static function getSubStatementWithTypicalStatementReferenceObject()
    {
        return new SubStatement(null, ActorFixtures::getTypicalAgent(), VerbFixtures::getTypicalVerb(), StatementReferenceFixtures::getTypicalStatementReference());
    }
}