<?php

namespace Symbox\Tests;
 
use Symbox\Framework;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel;

class FrameworkTest extends \PHPUnit_Framework_TestCase
{
    private $sc;

    public function __construct()
    {
        $this->sc = include __DIR__.'/../../../src/container.php';
    }

    public function testNotFoundHandling()
    {
        $framework = $this->sc->get('framework');
        $response = $framework->handle(Request::create('/testtest'));
        $this->assertEquals(404, $response->getStatusCode());
    }
}
 