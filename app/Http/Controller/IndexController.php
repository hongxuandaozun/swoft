<?php declare(strict_types=1);

namespace App\Http\Controller;

use ReflectionException;
use Swoft\Bean\Exception\ContainerException;
use Swoft\Context\Context;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Throwable;

/**
 * Class IndexController
 * @Controller(prefix="v1/index")
 */
class IndexController
{
    /**
     * @RequestMapping("index")
     * @throws Throwable
     */
    public function index(): Response
    {
	return Context::mustGet()->getResponse()->withContent('v1/index');
    }

    /**
     * @RequestMapping("hello[/{name}]")
     * @param string $name
     *
     * @return Response
     * @throws ReflectionException
     * @throws ContainerException
     */
    public function hello(string $name): Response
    {
        return Context::mustGet()->getResponse()->withContent('Hello' . ($name === '' ? '' : ", {$name}"));
    }
}
