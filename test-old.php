<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);
$uri = "mongodb://localhost";
$m = new MongoClient($uri);
$db = $m->selectDB('moods');
$moodContent = new MongoCollection($db, 'moodData');

$moodContent->insert(array(
		"office" => 'New York',
		"time" => date('m-d-Y'),
		"mood" => 'Happy'
));

?>
