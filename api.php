<?php
require 'WebApi.php';

use Webapi\Mvc\Api;

require 'controller\\mainController.php';
require 'controller\\productController.php';


$api = new Api();
$api->handle();
