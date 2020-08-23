DbCreator
----

![Testing](https://github.com/ArtARTs36/DbCreator/workflows/Testing/badge.svg?branch=master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
<a href="https://poser.pugx.org/artarts36/db-creator/d/total.svg">
    <img src="https://poser.pugx.org/artarts36/db-creator/d/total.svg" alt="Total Downloads">
</a>

----

### Installation:

`composer require artarts36/db-creator`

### Examples:

```php
use ArtARTs36\DbCreator\Access;
use ArtARTs36\DbCreator\Creator;

// mysql

$access = Access::make('user', 'password', '3306');

Creator::create($access, 'mysql', 'db_name');

// pgsql

$access = Access::make('user', 'password', '5432');

Creator::create($access, 'pgsql', 'db_name');

```
