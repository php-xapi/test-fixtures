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

use Xabbuh\XApi\Model\Account;
use Xabbuh\XApi\Model\Agent;
use Xabbuh\XApi\Model\Activity;
use Xabbuh\XApi\Model\Definition;
use Xabbuh\XApi\Model\Group;
use Xabbuh\XApi\Model\InverseFunctionalIdentifier;
use Xabbuh\XApi\Model\Result;
use Xabbuh\XApi\Model\Score;
use Xabbuh\XApi\Model\Statement;
use Xabbuh\XApi\Model\StatementReference;
use Xabbuh\XApi\Model\SubStatement;
use Xabbuh\XApi\Model\Verb;

/**
 * Statement fixtures.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementFixtures
{
    const DEFAULT_STATEMENT_ID = '12345678-1234-5678-8234-567812345678';

    /**
     * Loads a minimal valid statement.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getMinimalStatement($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:xapi@adlnet.gov'));
        $verb = new Verb('http://adlnet.gov/expapi/verbs/created', array('en-US' => 'created'));
        $activity = new Activity('http://example.adlnet.gov/xapi/example/activity');

        return new Statement($id, $actor, $verb, $activity);
    }

    /**
     * Loads a statement with a group as an actor.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithGroupActor($id = self::DEFAULT_STATEMENT_ID)
    {
        $group = ActorFixtures::getGroup();
        $verb = VerbFixtures::getVerb();
        $activity = ActivityFixtures::getActivity();

        return new Statement($id, $group, $verb, $activity);
    }

    /**
     * Loads a statement with a group that has no members as an actor.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithGroupActorWithoutMembers($id = self::DEFAULT_STATEMENT_ID)
    {
        $group = ActorFixtures::getGroupWithoutMembers();
        $verb = VerbFixtures::getVerb();
        $activity = ActivityFixtures::getActivity();

        return new Statement($id, $group, $verb, $activity);
    }

    /**
     * Loads a statement including an activity.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithActivity($id = self::DEFAULT_STATEMENT_ID)
    {
        $minimalStatement = static::getMinimalStatement($id);

        return new Statement(
            $minimalStatement->getId(),
            $minimalStatement->getActor(),
            $minimalStatement->getVerb(),
            ActivityFixtures::getActivity()
        );
    }

    /**
     * Loads a statement including a reference to another statement.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithStatementRef($id = self::DEFAULT_STATEMENT_ID)
    {
        $minimalStatement = static::getMinimalStatement($id);

        return new Statement(
            $minimalStatement->getId(),
            $minimalStatement->getActor(),
            $minimalStatement->getVerb(),
            new StatementReference('8f87ccde-bb56-4c2e-ab83-44982ef22df0')
        );
    }

    /**
     * Loads a statement including a result.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithResult($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:xapi@adlnet.gov'));
        $verb = new Verb('http://adlnet.gov/expapi/verbs/created', array('en-US' => 'created'));
        $activity = new Activity('http://example.adlnet.gov/xapi/example/activity');
        $score = new Score(0.95, 31, 0, 50);
        $result = new Result($score, true, true, 'Wow, nice work!', 'PT1H0M0S');

        return new Statement($id, $actor, $verb, $activity, $result);
    }

    /**
     * Loads a statement including a sub statement.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithSubStatement($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:test@example.com'));
        $verb = new Verb('http://example.com/visited', array('en-US' => 'will visit'));
        $definition = new Definition(
            array('en-US' => 'Some Awesome Website'),
            array('en-US' => 'The visited website'),
            'http://example.com/definition-type'
        );
        $activity = new Activity('http://example.com/website', $definition);
        $subStatement = new SubStatement(null, $actor, $verb, $activity);

        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:test@example.com'));
        $verb = new Verb('http://example.com/planned', array('en-US' => 'planned'));

        return new Statement($id, $actor, $verb, $subStatement);
    }

    /**
     * Loads a statement including an agent authority.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithAgentAuthority($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:xapi@adlnet.gov'));
        $verb = new Verb('http://adlnet.gov/expapi/verbs/created', array('en-US' => 'created'));
        $activity = new Activity('http://example.adlnet.gov/xapi/example/activity');
        $authority = new Agent(InverseFunctionalIdentifier::withAccount(new Account('anonymous', 'http://cloud.scorm.com/')));

        return new Statement($id, $actor, $verb, $activity, null, $authority);
    }

    /**
     * Loads a statement including a group authority.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getStatementWithGroupAuthority($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:xapi@adlnet.gov'));
        $verb = new Verb('http://adlnet.gov/expapi/verbs/created', array('en-US' => 'created'));
        $activity = new Activity('http://example.adlnet.gov/xapi/example/activity');
        $user = new Agent(InverseFunctionalIdentifier::withAccount(new Account('oauth_consumer_x75db', 'http://example.com/xAPI/OAuth/Token')));
        $application = new Agent(InverseFunctionalIdentifier::withMbox('mailto:bob@example.com'));
        $authority = new Group(null, null, array($user, $application));

        return new Statement($id, $actor, $verb, $activity, null, $authority);
    }

    /**
     * Loads a void statement.
     *
     * @param string $id The id of the new Statement
     *
     * @return Statement
     */
    public static function getVoidStatement($id = self::DEFAULT_STATEMENT_ID)
    {
        $actor = new Agent(InverseFunctionalIdentifier::withMbox('mailto:xapi@adlnet.gov'));
        $verb = Verb::createVoidVerb();
        $object = new StatementReference('e05aa883-acaf-40ad-bf54-02c8ce485fb0');

        return new Statement($id, $actor, $verb, $object);
    }
}
