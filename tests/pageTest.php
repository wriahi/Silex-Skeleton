<?php

require_once __DIR__.'/../vendor/autoload.php';

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

    /* quick and dirty check */
    public function testFront()
    {
        $front  = file_get_contents('http://localhost/silex.dev/silex/web/index.php/test');
        $this->assertEquals($front,'Hi');
    }

    /* we should use this instead (once we have routing and cleaner controllers setup).
    public function testIndex()
    {
        $client = $this->createClient();
        $client->request('GET','/');
        $this->assertTrue($client->getResponse()->isOk());
    }
    */
}