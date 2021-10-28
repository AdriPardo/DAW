<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('./views');
include('./routes/web.php');
