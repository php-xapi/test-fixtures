CHANGELOG
=========

* Updated fixtures for `Statement`, `StatementReference`, and `StatementResult`
  to use `StatementId` objects instead of string ids.

* Added missing fixtures for `Account`, `Activity`, `Actor`, `Context`,
  `ContextActivities`, `Extensions`, `Result`, and `Verb`.

0.4.0
-----

* Added missing `timestamp` value to the typical statement.

* when `null` is passed as the id argument to one of the methods of the
  `StatementFixtures` class, a unique UUID will be generated

0.3.0
-----

Switched to make use of the official conformance test fixtures that are provided
by the maintainers of the xAPI spec.

0.2.0
-----

* compatibility with release 0.2 of the `php-xapi/model` package

0.1.1
-----

* restrict dependency version to not pull in potentially BC breaking package
  versions

0.1.0
-----

This is the first release containing test fixtures for actors (agents and
groups), verbs, documents, activities,statements, and statement results.

This package replaces the `xabbuh/xapi-data-fixtures` package which is now
deprecated and should no longer be used.
