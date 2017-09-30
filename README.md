# LessQL ProcessWire Module

This module is a loader for LessQL, a simple, easy-to-use object
mapper. LessQL is a lightweight and performant alternative to Object-Relational
Mapping for PHP.

The main task of this module is loading the LessQL library and passing
it your database credentials from $config, or setting your own credentials
using your own database. Module config contains some settings,
and the module exposes a $lessQL or wire('lessQL') variable to access the database
methods.

## LessQL ORM Alternative of PHP

LessQL is heavily inspired by NotORM which presents a novel, intuitive API to SQL
databases. Combined with an efficient implementation, its concepts are very unique
to all database layers out there, whether they are ORMs, DBALs or something else.

In contrast to ORM, you work directly with tables and rows. This has several advantages:

* Write less: No glue code/objects required. Just work with your database directly.
* Transparency: It is always obvious that your application code works with a 1:1 representation of your database.
* Relational power: Leverage the relational features of SQL databases, don't hide them using an inadequate abstraction.

Key features:
* Efficient deep finding through intelligent eager loading
* Constant number of queries, no N+1 problems
* Save complex, nested structures with one method call
* Convention over configuration
* Work closely to your database: LessQL is not an ORM
* No glue code required
* Clean, readable source code
* Fully tested with SQLite3, MySQL and PostgreSQL
* MIT license

For more details about LessQL, visit http://lessql.net/. LessQL
is copyright (c) 2015 Morris Brodersen (mb@morrisbrodersen.de).
Licensed under MIT License.

## LessQL and ProcessWire

ProcessWire has a very effective way of modeling and managing data. But there
are still cases where you might prefer to drop out of the typical workflow, and
be able to directly access the database directly.

* Working with (possibly large) existing sets of data
* Working with  SQLite3, MySQL, and PostgreSQL databases
* Working with multiple databases at once

.. and so on, the main point being that situations can vary and if you feel
that a separate solution is the best option, then by all means go for it!