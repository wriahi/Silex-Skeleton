<?php

require_once '../vendor/autoload.php';

use Silex\WebTestCase;


class pageTest extends WebTestCase
{

    public function createApplication()
    {
       $app = require __DIR__.'/../main/app.php';
       $app['debug'] = true;
       $app['session.test'] = true;

       unset($app['exception_handler']);

       return $app;
    }

    public function testIndex()
    {
        $client = $this->createClient();
        $client->request('GET','/');
        $this->assertTrue($client->getResponse()->isOk());
    }
}