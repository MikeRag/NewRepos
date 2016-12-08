<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'localhost',
    'user' => 'id295925_mufasa320',
    'pass' => 'mufasa320',
    'name' => 'id295925_deecks'
));
$config->connect();

unset($config);