<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
  define('ROOT', 'http://localhost/php/Quick-Programming/php-mvc-2024/public/');
  define('DBNAME', 'quickprogramming_mvc2024');
  define('DBHOST', 'localhost');
  define('DBUSER', 'imon');
  define('DBPASS', 'p@ssw0rd');
  define('DBDRIVER', '');
} else {
  /*  online */
}