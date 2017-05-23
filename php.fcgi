#!/bin/sh
#PHPRC="/srv/drupal/its/"
#export PHPRC

PHP_FCGI_CHILDREN=5
export PHP_FCGI_CHILDREN
PHP_FCGI_MAX_REQUESTS=200
export PHP_FCGI_MAX_REQUESTS

exec /usr/bin/php5-cgi
