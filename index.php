<?php
/**
 * Created by PhpStorm.
 * User: kendoctor
 * Date: 15/8/18
 * Time: 下午9:44
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

require __DIR__ . '/vendor/autoload.php';

$session = new Session();
$session->start();
echo $session->getId();

$request = Request::createFromGlobals();





$response = new Response(sprintf("Path info is %s. Base path is %s",
    $request->getPathInfo(),
    $request->getBasePath()));

$response->send();



