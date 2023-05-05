<?php
require_once 'classes/Database.php';
require_once 'classes/News.php';

$config = require_once 'config.php';

// create a new database connection
$db = new Database($config);

// create a new News object
$news = new News($db->getPdo());

// get all news articles from the database
$articles = $news->getNews();

// include the HTML template for displaying the news articles
include 'views/admin.php';
