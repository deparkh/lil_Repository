<?
require "libs/rb.php";
// RedbeanPHP Connection to DB
R::setup( 'mysql:host=localhost;dbname=phpregister_db',
    'root', '' ); //for both mysql or mariaDB
    
session_start();
