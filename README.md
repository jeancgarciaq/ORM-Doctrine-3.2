# ORM-Doctrine-3.2
This is my own repository about the tutorial ORM Doctrine 3.2

This tutorial was developed in:
* WAMP 3.3.0 32 bit
* PHP 8.2
* Server MySQL 5.7.40
* Windows 8.1 32bits

For this Tutorial I will implement the Bug Tracker domain model from the Zend_Db_Table documentation. Reading their documentation we can extract the requirements:

* A Bug has a description, creation date, status, reporter and engineer
* A Bug can occur on different Products (platforms)
* A Product has a name.
* Bug reporters and engineers are both Users of the system.
* A User can create new Bugs.
* The assigned engineer can close a Bug.
* A User can see all their reported or assigned Bugs.
* Bugs can be paginated through a list-view.

## This repository is based on the original tutorial: [Getting Started with Doctrine](https://www.doctrine-project.org/projects/doctrine-orm/en/3.2/tutorials/getting-started.html#getting-started-with-doctrine)
