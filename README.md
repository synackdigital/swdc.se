swdc.se
=======

Wordpress Network multisite for SWDC conferences

### Requirements

[Composer](http://getcomposer.org/)

### Installation

Clone and then:

```shell
composer install
cp wp-config-sample.php wp-config.php
```

Configure Wordpress with your database details. Leave the parts about multisite and paths alone.

Import a mysql dump from production to get the latest sites.
