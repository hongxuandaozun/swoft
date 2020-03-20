<?php declare(strict_types=1);

namespace App\Http\Controller;

use ReflectionException;
use Swoft\Bean\Exception\ContainerException;
use Swoft\Context\Context;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Throwable;

/**
 * Class IndexController
 * @Controller
 */
class UserController
{
    /**
     * @RequestMapping
     * @throws Throwable
     */
    public function index(): Response
    {
	return Context::mustGet()->getResponse()->withContent('user/index');
    }
    /**
     * @RequestMapping
     * @throws Throwable
     */
    public function login(): Response
    {

	return Context::mustGet()->getResponse()->withContent('user/logi2n');
    }

    /**
     * @RequestMapping(route="funcArgs/{uid}/book/{bid}/{bool}/{name}")
     */
    public function funcArgs(bool $bool, Request $request, int $bid, string $name, int $uid, Response $response): array
    {

        return [$bid, $uid, $bool, $name, \get_class($request), \get_class($response)];
    }

}
